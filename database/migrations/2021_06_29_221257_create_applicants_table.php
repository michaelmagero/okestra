<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('vehicle_id')->nullable();
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade');

            $table->string('name');
            $table->string('middlename');
            $table->string('surname');
            $table->string('national_id');
            $table->string('dob');
            $table->string('phone');
            $table->string('id_number');
            $table->string('kra_pin');
            $table->string('county');
            $table->string('locality');
            $table->string('street');
            $table->string('apartment');
            $table->string('employer');
            $table->string('employment_type');
            $table->string('net_income');
            $table->string('expenses');
            $table->string('bank_statements');
            $table->string('mpesa_statements');
            $table->string('business_name');
            $table->string('gross_business_income');
            $table->string('cr12_certificate');
            $table->string('kra_certificate');
            $table->string('incorporation_certificate');
            $table->string('email')->unique();
            $table->string('status')->default(0); //pending - 0 , approved - 1

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
        Schema::dropIfExists('applicants');
    }
}
