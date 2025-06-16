<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Event\Telemetry\Duration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('sub_title')->nullable();
            $table->longText('description')->nullable();
            $table->text('image_path')->nullable();
            $table->string('slug')->unique();
            $table->string('client_name')->nullable();
            $table->string('category')->nullable();
            $table->string('status')->default('active'); // active, inactive, archived
            $table->date('project_year')->nullable();
            $table->string('location')->nullable();
            $table->string('price')->nullable();
            $table->text('project_approach')->nullable(); // e.g., ['Design', 'Development', 'Testing']
            $table->string('duration')->nullable(); // e.g., '3 months', '1 year'
            $table->string('link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
