<?php

namespace App\Repositories;

use App\Contracts\Repository;
use App\Player;

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

    public function delete(int $id = 0)
    {
        return $this->findById($id)->delete();
    }


    public function save(array $data, int $id = 0)
    {
        return $this->players->updateOrCreate(
            [
                'player_id' => $data['player_id'], 
                'first_name' => $data['first_name'],
                'second_name' => $data['second_name']
            ],
            $data
        );
    }

}