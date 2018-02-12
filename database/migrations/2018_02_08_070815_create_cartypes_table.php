<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartypesTable extends Migration
{
    /**
     * Run the migrations.
     *
    * @return void
     */
    public function up()
    {
        Schema::create('cartypes', function (Blueprint $table) {
            $table->increments('car_id');
            $table->string('model_name');
            $table->string('brand');
            $table->string('no_of_passenger');
            $table->string('fuel_type');

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
        Schema::dropIfExists('cartypes');
    }
}
