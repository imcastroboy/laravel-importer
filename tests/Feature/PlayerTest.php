<?php

namespace Tests\Feature;

use File;
use Mockery;
use App\Stats;
use App\Player;
use Tests\TestCase;
use App\Contracts\Importer;
use App\Http\Resources\Players;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http\Resources\Player as PlayerResource;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PlayerTest extends TestCase
{
    use DatabaseMigrations;

    private $importer;

    private $source;

    /**
    * After the first run of setUp "migrate:fresh"
    * @return void
    */
    public function setUp(): void
    {
        parent::setUp();
        Artisan::call('migrate:fresh');
        $this->source = base_path('tests/mocks/api.json');
        $this->importer = $this->instance(\App\Contracts\Importer::class,
            new \App\Services\JsonImporterService(
                new \App\Services\NativeHttpClientService($this->source),
                new \App\Repositories\PlayerRepository
            )
        );
    }

    private function import()
    {
        return $this->artisan('import:players');
    }

    /** @test */
    public function it_will_save_data_from_an_api()
    {
        $this->import()->expectsOutput('Import Done!');
    }

    /** @test */
    public function check_if_data_exists_in_the_database()
    {
        $this->import();

        $repo = new \App\Repositories\PlayerRepository;

        $player = $this->importer->transform()[0];
        $stats = $repo->getStat($player);
        $this->assertDatabaseHas('players', $repo->getPlayerInfo($player));
        $this->assertDatabaseHas('stats', [
            'form' => $player->form(),
            'total_points' => $player->totalPoints(),
            'influence' => $player->influence(),
            'creativity' => $player->creativity(),
            'threat' => $player->threat(),
            'ict_index' => $player->ictIndex(),
        ]);

    }

    /** @test */
    public function check_if_output_is_instance_of_footballplayer_class()
    {
        $player = $this->importer->transform()[0];

        $this->assertInstanceOf(\App\Entities\FootballPlayer::class, $player);
        $this->assertInstanceOf(\App\Contracts\Person::class, $player);
        $this->assertInstanceOf(\App\Contracts\Player::class, $player);
        $this->assertInstanceOf(\App\Contracts\Stats::class, $player);
    }

    /** @test */
    public function check_if_saved_players_is_100()
    {
        $this->import();

        $totalPlayers = config('importer.limit');

        $numOfPlayers = Player::all();

        $this->assertCount($totalPlayers, $numOfPlayers->toArray());

    }

    /** @test */
    public function it_will_show_all_players()
    {
        $this->import();

        $response = $this->json('GET', route('players.index'));

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    [
                        'id',
                        'fullname'
                    ]
                ],
                'links' => [
                    'first',
                    'last',
                    'prev',
                    'next'
                ],
                'meta' => [
                    'current_page',
                    'from',
                    'last_page',
                    'path',
                    'per_page',
                    'to',
                    'total'
                ]
            ]);
    }

    /** @test */
    public function it_will_show_a_player()
    {
        $this->import();

        $player = new PlayerResource(Player::first());

        $response = $this->json('GET', route('players.show', $player->id));

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    "id",
                    "first_name",
                    "second_name",
                    "form",
                    "total_points",
                    "influence",
                    "creativity",
                    "threat",
                    "ict_index"
                ]
            ]);
    }

}
