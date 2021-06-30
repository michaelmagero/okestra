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

            $table->string('name')->nullable();
            $table->string('middlename')->nullable();
            $table->string('surname')->nullable();
            $table->string('national_id')->nullable();
            $table->string('dob')->nullable();
            $table->string('phone')->nullable();
            $table->string('id_number')->nullable();
            $table->string('kra_pin')->nullable();
            $table->string('county')->nullable();
            $table->string('locality')->nullable();
            $table->string('street')->nullable();
            $table->string('apartment')->nullable();
            $table->string('employer')->nullable();
            $table->string('employment_type')->nullable();
            $table->string('net_income')->nullable();
            $table->string('expenses')->nullable();
            $table->string('bank_statements')->nullable();
            $table->string('mpesa_statements')->nullable();
            $table->string('business_name')->nullable();
            $table->string('gross_business_income')->nullable();
            $table->string('cr12_certificate')->nullable();
            $table->string('kra_certificate')->nullable();
            $table->string('incorporation_certificate')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('status')->nullable()->default(0); //pending - 0 , approved - 1

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
