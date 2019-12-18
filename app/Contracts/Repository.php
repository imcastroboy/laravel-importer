<?php

namespace App\Contracts;

use Illuminate\Support\Collection;

interface Repository
{
    public function getData();

    public function findById(int $id = 0);

    public function save($data);
}