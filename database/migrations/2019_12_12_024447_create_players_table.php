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
            $table->bigInteger('id');
            $table->string('first_name', 250);
            $table->string('second_name', 250);
            $table->string('web_name', 250);
            $table->string('photo', 250)->nullable();
            $table->integer('squad_number')->nullable();
            $table->string('status', 10);
            $table->integer('team');
            $table->integer('team_code');
            $table->timestamps();

            $table->primary('id');
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
