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
            $table->string('email');
            $table->string('id_number');
            $table->string('kra_pin');
            $table->string('county');
            $table->string('locality');
            $table->string('street');
            $table->string('apartment');
            $table->string('employer')->nullable();
            $table->string('employment_type')->nullable();
            $table->string('employed_net_income')->nullable();
            $table->string('self_net_income')->nullable();
            $table->string('expenses')->nullable();
            $table->string('employed_bank_statements')->nullable();
            $table->string('employed_mpesa_statements')->nullable();
            $table->string('business_name')->nullable();
            $table->string('gross_business_income')->nullable();
            $table->string('cr12_certificate')->nullable();
            $table->string('kra_certificate')->nullable();
            $table->string('self_bank_statements')->nullable();
            $table->string('incorporation_certificate')->nullable();
            $table->string('application_status')->default(0); //pending - 0 , approved - 1, rejected - 2
            $table->string('loan_status')->default(0); //active - 0 , complete - 1, empty if application status is rejected -2

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
