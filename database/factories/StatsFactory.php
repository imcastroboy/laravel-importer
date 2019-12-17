<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Stats;
use Faker\Generator as Faker;

$factory->define(Stats::class, function (Faker $faker) {
    return [
        'form' => $faker->randomFloat(1,0,50),
        'total_points' => $faker->numberBetween(1,20),
        'influence' => $faker->randomFloat(1,0,50),
        'creativity' => $faker->randomFloat(1,0,50),
        'threat' => $faker->randomFloat(1,0,50),
        'ict_index' => $faker->randomFloat(1,0,50),
        'chance_playing_next_round' => $faker->numberBetween(0,100),
        'chance_playing_this_round' => $faker->numberBetween(0,100),
        'code' => $faker->numberBetween(10000,60000),
        'cost_change_event' => $faker->numberBetween(-5,10),
        'cost_change_event_fall' => $faker->numberBetween(-5,10),
        'cost_change_start' => $faker->numberBetween(-5,10),
        'cost_change_start_fall' => $faker->numberBetween(-5,10),
        'dreamteam_count' => $faker->numberBetween(0,10),
        'element_type' => $faker->numberBetween(0,10),
        'ep_next' => $faker->randomFloat(1,0,50),
        'ep_this' => $faker->randomFloat(1,0,50),
        'event_points' => $faker->numberBetween(0,10),
        'in_dreamteam' => false,
        'news' => $faker->sentence(),
        'news_added' => $faker->iso8601(),
        'now_cost' => $faker->numberBetween(0,10),
        'points_per_game' => $faker->randomFloat(1,0,50),
        'selected_by_percent' => $faker->randomFloat(1,0,50),
        'special' => false,
        'transfers_in' => $faker->numberBetween(0,50000),
        'transfers_in_event' => $faker->numberBetween(0,50000),
        'transfers_out' => $faker->numberBetween(0,50000),
        'transfers_out_event' => $faker->numberBetween(0,50000),
        'value_form' => $faker->randomFloat(1,0,50),
        'value_season' => $faker->randomFloat(1,0,50),
        'minutes' => $faker->numberBetween(0,90),
        'goals_scored' => $faker->numberBetween(0,3),
        'assists' => $faker->numberBetween(0,2),
        'clean_sheets' => $faker->numberBetween(0,2),
        'goals_conceded' => $faker->numberBetween(0,2),
        'own_goals' => $faker->numberBetween(0,2),
        'penalties_saved' => $faker->numberBetween(0,2),
        'penalties_missed' => $faker->numberBetween(0,2),
        'yellow_cards' => $faker->numberBetween(0,2),
        'red_cards' => $faker->numberBetween(0,2),
        'saves' => $faker->numberBetween(0,2),
        'bonus' => $faker->numberBetween(0,2),
        'bps' => $faker->numberBetween(0,30)
    ];
});
