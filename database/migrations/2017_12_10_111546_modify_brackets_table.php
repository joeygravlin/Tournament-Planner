<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyBracketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('brackets')){
            Schema::table('brackets', function (Blueprint $table) {
                $table->dropColumn('parent_id');
                $table->dropColumn('left_child_id');
                $table->dropColumn('right_child_id');
                $table->integer('score');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('brackets')) {
            Schema::table('brackets', function (Blueprint $table) {
                $table->integer('parent_id')->nullable()->unsigned();
                $table->integer('left_child_id')->nullable()->unsigned();
                $table->integer('right_child_id')->nullable()->unsigned();
                $table->dropColumn('score');
            });
        }

    }
}
