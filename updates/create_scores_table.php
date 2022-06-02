<?php namespace Goosy\Leaderboard\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateScoresTable extends Migration
{
    public function up()
    {
        Schema::create('goosy_leaderboard_scores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->nullable();	
            $table->integer('game_id');	
            $table->bigInteger('score');	
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('goosy_leaderboard_scores');
    }
}
