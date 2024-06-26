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
        Schema::create('course_assignments_content', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_assignments_id');
            $table->timestamps();

            $table->foreign('course_assignments_id')->references('id')->on('course_assignments')->onDelete('restrict');            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_assignments_content');
    }
};
