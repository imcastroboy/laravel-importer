<?php

namespace Tests\Feature;

use App\Contracts\Importer;
use App\Services\JsonImporterService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Mockery;
use Tests\TestCase;

class ImporterTest extends TestCase
{

    /** @test */
    public function it_will_check_the_interface()
    {
        $importer = Mockery::mock(Importer::class, JsonImporterService::class);

        $importer->shouldReceive('getPlayers');

    }

}
