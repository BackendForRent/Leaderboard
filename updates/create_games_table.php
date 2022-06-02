<?php namespace Goosy\Leaderboard\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateGamesTable extends Migration
{
    public function up()
    {
        Schema::create('goosy_leaderboard_games', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);	
            $table->enum('order', ['ascending', 'descending']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('goosy_leaderboard_games');
    }
}
