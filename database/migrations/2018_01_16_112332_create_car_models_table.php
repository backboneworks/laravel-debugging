<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_models', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('manufacturer_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('type');
            $table->integer('year')->nullable();
            $table->float('horsepower')->nullable();
            $table->float('mpg')->nullable();
            $table->timestamps();

            $table->foreign('manufacturer_id')
                ->references('id')->on('manufacturers')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_models');
    }
}
