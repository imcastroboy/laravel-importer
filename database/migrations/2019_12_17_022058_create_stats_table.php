<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('player_id');
            $table->integer('chance_playing_next_round')->nullable();
            $table->integer('chance_playing_this_round')->nullable();
            $table->integer('code')->nullable();
            $table->integer('cost_change_event')->nullable();
            $table->integer('cost_change_event_fall')->nullable();
            $table->integer('cost_change_start')->nullable();
            $table->integer('cost_change_start_fall')->nullable();
            $table->integer('dreamteam_count')->nullable();
            $table->integer('element_type')->nullable();
            $table->float('ep_next', 8, 1)->nullable();
            $table->float('ep_this', 8, 1)->nullable();
            $table->integer('event_points')->nullable();
            $table->float('form', 8, 1)->nullable();
            $table->boolean('in_dreamteam')->nullable();
            $table->text('news')->nullable();
            $table->string('news_added', 100)->nullable();
            $table->integer('now_cost')->nullable();
            $table->float('points_per_game', 8, 1)->nullable();
            $table->float('selected_by_percent', 8, 1)->nullable();
            $table->boolean('special')->nullable();
            $table->integer('total_points')->nullable();
            $table->integer('transfers_in')->nullable();
            $table->integer('transfers_in_event')->nullable();
            $table->integer('transfers_out')->nullable();
            $table->integer('transfers_out_event')->nullable();
            $table->float('value_form', 8, 1)->nullable();
            $table->float('value_season', 8, 1)->nullable();
            $table->integer('minutes')->nullable();
            $table->integer('goals_scored')->nullable();
            $table->integer('assists')->nullable();
            $table->integer('clean_sheets')->nullable();
            $table->integer('goals_conceded')->nullable();
            $table->integer('own_goals')->nullable();
            $table->integer('penalties_saved')->nullable();
            $table->integer('penalties_missed')->nullable();
            $table->integer('yellow_cards')->nullable();
            $table->integer('red_cards')->nullable();
            $table->integer('saves')->nullable();
            $table->integer('bonus')->nullable();
            $table->integer('bps')->nullable();
            $table->float('influence', 8, 1)->nullable();
            $table->float('creativity', 8, 1)->nullable();
            $table->float('threat', 8, 1)->nullable();
            $table->float('ict_index', 8, 1)->nullable();
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
        Schema::dropIfExists('stats');
    }
}
