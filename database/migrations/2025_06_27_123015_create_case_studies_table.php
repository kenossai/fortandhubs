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
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('client')->nullable();
            $table->date('date')->nullable();
            $table->string('role')->nullable();
            $table->text('overview')->nullable();
            $table->string('visit_url')->nullable();
            $table->string('banner_image')->nullable();
            $table->json('gallery')->nullable(); // store array of image URLs
            $table->text('about_project')->nullable();
            $table->text('approach')->nullable();
            $table->unsignedTinyInteger('conversion_increase')->nullable();
            $table->unsignedTinyInteger('traffic_increase')->nullable();
            $table->unsignedTinyInteger('daily_signups')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};
