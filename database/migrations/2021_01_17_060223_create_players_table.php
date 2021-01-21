<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->string('PlayerName');
            $table->string('PlayerNickName')->unique('PlayerNickName');
            $table->string('PlayerEmail');
            $table->string('PlayerPassword');
            $table->dateTime('LastLogin');
            $table->dateTime('DateJoined');
            $table->integer('games_play_id');
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
