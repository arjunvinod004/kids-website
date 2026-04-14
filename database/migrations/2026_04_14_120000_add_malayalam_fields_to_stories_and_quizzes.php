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
        Schema::table('stories', function (Blueprint $table) {
            $table->string('title_ml')->nullable()->after('title');
            $table->text('content_ml')->nullable()->after('content');
            $table->string('age_group')->nullable()->after('content_ml');
        });

        Schema::table('quizzes', function (Blueprint $table) {
            $table->string('title_ml')->nullable()->after('title');
            $table->json('questions_ml')->nullable()->after('questions');
            $table->string('age_group')->nullable()->after('questions_ml');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stories', function (Blueprint $table) {
            $table->dropColumn(['title_ml', 'content_ml', 'age_group']);
        });

        Schema::table('quizzes', function (Blueprint $table) {
            $table->dropColumn(['title_ml', 'questions_ml', 'age_group']);
        });
    }
};
