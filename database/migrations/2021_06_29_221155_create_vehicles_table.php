<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('make');
            $table->string('model');
            $table->string('year');
            $table->string('mileage')->nullable();
            $table->string('transmission');
            $table->string('location');
            $table->string('fuel_type');
            $table->string('engine_capacity'); //cc's
            $table->string('color');
            $table->string('registration');
            $table->text('images')->nullable();
            $table->string('display_image');
            $table->decimal('price', 10, 2);
            $table->text('interior_features');
            $table->text('exterior_features');
            $table->text('safety_features');
            $table->text('performance_features');
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
        Schema::dropIfExists('vehicles');
    }
}
