<?php

namespace Tests\Feature;

use App\Contracts\Importer;
use App\Http\Resources\Player as PlayerResource;
use App\Http\Resources\Players;
use App\Player;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Mockery;

class PlayerTest extends TestCase
{

    use DatabaseMigrations;

    /** @test */
    public function it_will_save_players_and_count()
    {
        $totalPlayers = config('importer.limit');

        $players = factory(Player::class, $totalPlayers)->create();

        $numOfPlayers = Player::all();

        $this->assertCount($totalPlayers, $numOfPlayers->toArray());

    }

    /** @test */
    public function it_will_show_all_players()
    {
        $players = factory(Player::class, 5)->create();

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
        $players = factory(Player::class, 5)->create();

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