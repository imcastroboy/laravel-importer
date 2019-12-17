<?php

namespace App\Contracts;

interface Repository
{
    public function getData();

    public function findById(int $id = 0);

    public function save(array $data, int $id = 0);
}