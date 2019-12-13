<?php

namespace App\Contracts;


interface Importer 
{
    /**
     * Get the transformed resource from a source url
     * @return Collection 
     */
    public function getPlayers(int $limit = 0);
}