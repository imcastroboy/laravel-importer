<?php

namespace Tests\Feature;

use App\Contracts\Repository;
use App\Repositories\PlayerRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Mockery;

class RepositoryTest extends TestCase
{

    /** @test */
    public function it_will_test_the_interface()
    {
        $mock = Mockery::mock(Repository::class, PlayerRepository::class);

        $mock->shouldReceive(['getData', 'findById', 'delete','saved'])->once();
    }
}
