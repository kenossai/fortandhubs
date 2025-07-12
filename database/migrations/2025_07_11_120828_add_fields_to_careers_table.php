<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('careers', function (Blueprint $table) {
        $table->string('experience')->nullable()->after('description');
        $table->string('job_avg_salary')->nullable()->after('experience');
        $table->string('working_hours')->nullable()->after('job_avg_salary');
        $table->string('working_days')->nullable()->after('working_hours');
    });
}

public function down()
{
    Schema::table('careers', function (Blueprint $table) {
        $table->dropColumn(['experience', 'job_avg_salary', 'working_hours', 'working_days']);
    });
}
    
};
