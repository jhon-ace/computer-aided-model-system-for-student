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
        Schema::table('course_assignments_content', function (Blueprint $table) {
            $table->unsignedBigInteger('announcement_id')->nullable()->after('course_assignments_id');

            $table->foreign('announcement_id')->references('id')->on('course_content_announcement')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('course_assignments_content', function (Blueprint $table) {
              $table->dropForeign(['announcement_id']);

            // Then drop the column
            $table->dropColumn('announcement_id');
        });
    }
};
