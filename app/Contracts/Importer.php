<?php

namespace App\Contracts;


interface Importer 
{
    /**
     * Transform data into Player, Stats, Person entity.
     * @return Collection 
     */
    public function transform();

    /**
     * Get elements from a source.
     * @return Collection 
     */
    public function getElements();

    /**
     * Performs the actual saving of elements to the database
     * @return Collection 
     */
    public function execute();
}