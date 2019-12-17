<?php

namespace App\Repositories;

use App\Contracts\Repository;
use App\Player;
use App\Stats;

class PlayerRepository implements Repository
{

    private $players;

    public function __construct(Player $players)
    {
        $this->players = $players;
    }

    public function getData()
    {
        $limit = config('importer.limit');

        return $this->players->paginate($limit);
    }

    public function findById(int $id = 0)
    {
        return $this->players->find($id);
    }

    public function save(array $data, int $id = 0)
    {
        $this->players->updateOrCreate(
            [
                'id' => $data['player']['id']
            ],

            $data['player']
        );
        
        $player = $this->findById($data['player']['id']);
        $player->stats()->save(new Stats($data['stats']));
    }

}