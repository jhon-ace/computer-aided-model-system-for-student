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
        Schema::create('course_classwork_files', function (Blueprint $table) {
            $table->id();
            $table->string('classwork_file')->nullable();
            $table->unsignedBigInteger('classwork_id');
            $table->timestamps();

            $table->foreign('classwork_id')->references('id')->on('course_content_classwork')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_classwork_files');
    }
};
