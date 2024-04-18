<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_forms', function (Blueprint $table) {
            $table->id();
            $table->string('service_name')->nullable();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->unique();
            $table->date('dob');
            $table->string('country');
            $table->string('passport_number')->nullable();
            $table->date('passport_issue')->nullable();
            $table->date('passport_expiry')->nullable();
            $table->integer('applicants')->nullable();
            $table->string('visa_type')->nullable();
            $table->integer('days_required')->nullable();
            $table->string('country_code')->nullable();
            $table->string('mobile_number')->nullable();
            $table->date('arrival_date')->nullable();
            $table->string('passport_copy')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_forms');
    }
};
