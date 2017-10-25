<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTruckingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truckings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path',50);
            $table->integer('price');
            $table->string('avto', 50);
            $table->integer('weight');
            $table->integer('bulk');
            $table->integer('year');
            $table->text('text');
            $table->string('foto', 100);

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
        Schema::dropIfExists('truckings');
    }
}
