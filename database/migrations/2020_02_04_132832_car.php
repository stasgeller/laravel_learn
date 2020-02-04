<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Car extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Car', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('manufacturerId')->unsigned();
          $table->float('price');
          $table->dateTime('firstRegistrationDate')->default(DB::raw('CURRENT_TIMESTAMP'));
          $table->integer('ownerId')->unsigned();

          $table->foreign('manufacturer')->references('id')->on('Manufacturer');
          $table->foreign('owner')->references('id')->on('Owner');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Car');
    }
}
