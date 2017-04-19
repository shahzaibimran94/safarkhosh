<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tous', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('cost_per_person');
            $table->string('source');
            $table->date('date_to_go');
            $table->string('service');
            $table->string('gear');
            $table->string('activity');
            $table->string('operator');
            $table->string('type');
            $table->string('destination');
            $table->date('date_to_return');
            $table->string('image')->nullable();
            $table->string('poster')->nullable();
            $table->string('description');
            $table->integer('status');
            $table->integer('quantity');
            $table->integer('rquantity');
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
        Schema::dropIfExists('tours');
    }
}
