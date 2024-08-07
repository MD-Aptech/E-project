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
        Schema::create('vacccine_bookings', function (Blueprint $table) {
            $table->id();
            $table->string("patient_name");
            $table->string("patient_email");
            $table->string("contactNumber");
            $table->string("hospitalName");
            $table->string("vaccineName");
            $table->date("date");
            $table->time("time");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacccine_bookings');
    }
};
