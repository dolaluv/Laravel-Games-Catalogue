<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_games', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('games_id')->unsigned()->index();
            $table->integer('players_id')->unsigned()->index();
            $table->integer('gamesversion_id')->unsigned()->index(); 
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_games');
    }
}
