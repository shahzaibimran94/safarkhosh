<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyConstraintsIntoTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('gears', function(Blueprint $table)
        {
           $table->foreign('catgear')->references('id')->on('gearcats');
             $table->foreign('sellerid')->references('id')->on('sellers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('gears', function(Blueprint $table)
        {
            $table->dropForeign('gears_catgear_foreign');
            $table->dropForeign('gears_sellerid_foreign');
        });
    }
}
