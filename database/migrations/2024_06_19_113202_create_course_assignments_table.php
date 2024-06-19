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
        Schema::create('course_assignments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->string('section');
            $table->string('days_of_the_week');
            $table->time('class_start_time');
            $table->time('class_end_time');
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('program_id');
            $table->unsignedBigInteger('department_id');
            $table->timestamps();

            $table->foreign('program_id')->references('id')->on('programs')->onDelete('restrict');            
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('restrict');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('restrict');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('restrict');
        });

       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_assignments');
    }
};
