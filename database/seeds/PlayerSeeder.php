<?php

use App\Player;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Player::class, 100)->create()->each(function ($player) {
            $player->stats()->save(factory(App\Stats::class)->make());
        });
    }
}
