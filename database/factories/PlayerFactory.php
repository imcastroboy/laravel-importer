<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Player;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker) {
    return [
        'player_id' => $faker->numberBetween(1,500),
        'first_name' => $faker->firstName,
        'second_name' => $faker->lastName,
        'form' => $faker->randomFloat(1,0,50),
        'total_points' => $faker->numberBetween(0,20),
        'influence' => $faker->randomFloat(1,0,50),
        'creativity' => $faker->randomFloat(1,0,50),
        'threat' => $faker->randomFloat(1,0,50),
        'ict_index' => $faker->randomFloat(1,0,50),
    ];
});
