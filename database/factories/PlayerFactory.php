<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Player;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker) {
    return [
        'id' => $faker->unique()->randomDigit,
        'first_name' => $faker->firstName,
        'second_name' => $faker->lastName,
        'photo' => $faker->randomFloat(1,0,50),
        'web_name' => $faker->lastName,
        'status' => $faker->randomLetter,
        'squad_number' => null,
        'team' => $faker->numberBetween(1,10),
        'team_code' => $faker->numberBetween(1,10),
    ];
});
