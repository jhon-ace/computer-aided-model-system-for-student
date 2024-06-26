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
        Schema::table('course_content_announcement', function (Blueprint $table) {
            $table->unsignedBigInteger('course_assignments_id')->nullable()->after('course_assignments_id');

            $table->foreign('announcement_id')->references('id')->on('course_content_announcement')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('course_content_announcement', function (Blueprint $table) {
            //
        });
    }
};
