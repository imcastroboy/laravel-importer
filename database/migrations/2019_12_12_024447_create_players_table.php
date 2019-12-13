<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('player_id');
            $table->string('first_name', 250);
            $table->string('second_name', 250);
            $table->float('form', 8, 1);
            $table->integer('total_points');
            $table->float('influence', 8, 1);
            $table->float('creativity', 8, 1);
            $table->float('threat', 8, 1);
            $table->float('ict_index', 8, 1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
