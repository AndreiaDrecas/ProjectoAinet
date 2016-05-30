<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Advertisements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            // $table->increments('id');
            // $table->integer('owner_id');
            // $table->string('name')
            // $table->string('description');
            // $table->timestamps('available_on');
            // $table->timestamps('available_until');
            // $table->integer('price_cents');
            // $table->string('trade_prefs');
            // $table->string('quantity');
            // $table->integer('blocked');
            // $table->string('presentation'); 
            // $table->rememberToken();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('advertisements');
    }
}
