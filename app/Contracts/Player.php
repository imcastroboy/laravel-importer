<?php

namespace App\Contracts;

/**
 * Player's stats and data
 */
interface Player
{
    public function squadNumber();
    public function team();
    public function teamCode();
}