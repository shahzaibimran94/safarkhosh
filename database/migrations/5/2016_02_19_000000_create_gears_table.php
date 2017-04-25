<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gears', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('price');
            $table->integer('gearcats_id')->unsigned()->index();
             $table->integer('sellers_id')->unsigned()->index();
            $table->string('description');
            $table->string('image');
            $table->integer('is_del');
            $table->timestamps();
            $table->foreign('gearcats_id')->references('id')->on('gearcats');
             $table->foreign('sellers_id')->references('id')->on('sellers');
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
         $table->dropForeign('gears_gearcats_id_foreign');
        $table->dropForeign('gears_sellers_id_foreign');
        });
        Schema::dropIfExists('gears');
    }
}
