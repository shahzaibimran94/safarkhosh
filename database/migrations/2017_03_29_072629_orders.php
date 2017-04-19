<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->integer('invoiceId');
            $table->integer('customerId');
            $table->string('customerName');
            $table->string('title');
            $table->string('operator');
            $table->string('type');
            $table->integer('passenger');
            $table->string('extras');
            $table->integer('payment');
            $table->string('status');
            $table->string('cancel');
            $table->string('cnic');
            $table->string('contact');
            $table->string('email');
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
        Schema::dropIfExists('orders');
    }
}
