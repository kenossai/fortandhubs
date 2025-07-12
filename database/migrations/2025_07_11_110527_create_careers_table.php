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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('location');
            $table->string('experience')->nullable();        // e.g. "3+ years"
            $table->string('job_avg_salary')->nullable();    // e.g. "$50,000 - $70,000"
            $table->string('working_hours')->nullable();     // e.g. "9 AM - 5 PM"
            $table->string('working_days')->nullable();      // e.g. "Monday - Friday"
            $table->enum('type', ['Full-time', 'Part-time', 'Contract', 'Internship']);
            $table->enum('status', ['Open', 'Closed'])->default('Open');
            $table->integer('positions')->default(1);
            $table->date('deadline')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
