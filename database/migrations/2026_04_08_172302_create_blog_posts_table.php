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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('author_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('editor_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('excerpt', 500)->nullable();
            $table->longText('content');
            $table->string('seo_title', 255)->nullable();
            $table->text('seo_description')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('cover_image_alt')->nullable();
            $table->json('tags')->nullable();
            $table->enum('status', ['draft', 'pending_review', 'scheduled', 'published', 'archived'])->default('draft')->index();
            $table->enum('visibility', ['public', 'unlisted', 'private'])->default('public')->index();
            $table->boolean('is_featured')->default(false)->index();
            $table->boolean('is_pinned')->default(false)->index();
            $table->boolean('allow_comments')->default(true);
            $table->unsignedSmallInteger('reading_time_minutes')->nullable();
            $table->unsignedInteger('views_count')->default(0);
            $table->timestamp('published_at')->nullable()->index();
            $table->timestamp('scheduled_for')->nullable()->index();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
