<?php

namespace App\Entities;

use App\Contracts\Person;
use App\Contracts\Player;
use App\Contracts\Stats;


class FootballPlayer implements Person, Player
{
    public $player;

    public function __construct($player)
    {
        $this->player = $player;
    }

    public function id()
    {
        return $this->player->id;
    }

    public function firstName()
    {
        return $this->player->first_name;
    }

    public function secondName()
    {
        return $this->player->second_name;
    }

    public function photo()
    {
        return $this->player->photo;
    }

    public function webName()
    {
        return $this->player->web_name;
    }

    public function status()
    {
        return $this->player->status;
    }

    public function squadNumber()
    {
        return $this->player->squad_number;
    }

    public function team()
    {
        return $this->player->team;
    }

    public function teamCode()
    {
        return $this->player->team_code;
    }
}