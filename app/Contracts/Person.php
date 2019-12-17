<?php

namespace App\Contracts;


/**
 * Person's peronal information
 */
interface Person
{
    public function id();
    public function firstName();
    public function secondName();
    public function photo();
    public function webName();
    public function status();
}