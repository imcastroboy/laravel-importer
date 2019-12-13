<?php

namespace App\Services;

use App\Contracts\Importer;

class JsonImporterService implements Importer
{
    public $data;

    public function __construct($source)
    {
        $response = file_get_contents($source);
        $this->data = json_decode($response);
    }

    public function getPlayers(int $limit = 0)
    {
        $limit = $limit === 0 ? config('importer.limit') : $limit;

        return collect($this->data->elements)->slice(0, $limit)
            ->map(function($player) {
                return [
                    'player_id' => $player->id,
                    'first_name' => $player->first_name,
                    'second_name' => $player->second_name,
                    'form' => $player->form,
                    'total_points' => $player->total_points,
                    'influence' => $player->influence,
                    'creativity' => $player->creativity,
                    'threat' => $player->threat,
                    'ict_index' => $player->ict_index,
                ];
        });
    }
}

