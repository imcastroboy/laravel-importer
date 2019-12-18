<?php

namespace App\Services;

use App\Contracts\Importer;
use App\Contracts\HttpClient;
use App\Contracts\Repository;
use App\Entities\PlayerStats;
use App\Entities\FootballPlayer;
use App\Repositories\PlayerRepository;

class JsonImporterService implements Importer
{
    public $data;
    public $repo;

    public function __construct(HttpClient $client, Repository $repo)
    {
        $this->data = $client;
        $this->repo = $repo;
    }

    public function execute()
    {
        return $this->transform()->map(function($player){
            return $this->repo->save($player);
        });
    }

    public function transform()
    {
        return $this->getElements()->map(function($element){
            return new FootballPlayer($element);
        });
    }

    public function getElements()
    {  
        $limit = config('importer.limit');
        return collect($this->data->get())->slice(0, $limit);
    }

}

