<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBracketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brackets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tournament_id')->unsigned();        
            $table->integer('team_id')->unsigned()->nullable();
            $table->integer('parent_id')->nullable()->unsigned();
            $table->integer('left_child_id')->nullable()->unsigned();
            $table->integer('right_child_id')->nullable()->unsigned();
            $table->integer('node_id');
            
            $table->foreign('tournament_id')->references('id')->on('tournaments')->onDelete('cascade');
            $table->foreign('team_id')->references('id')->on('local_teams')->onDelete('cascade');
            
            
            
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
        Schema::dropIfExists('brackets');
    }
}
