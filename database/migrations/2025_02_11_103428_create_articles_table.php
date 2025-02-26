<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id('article_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->foreignId('author_id')->constrained(
                table: "authors",
                column: "author_id",
                indexName: "article_author_id"
            )->onDelete('cascade');
            $table->foreignId('category_id')->constrained(
                table: "categories",
                column: "category_id",
                indexName: "article_category_id"
            )->onDelete('cascade');
            $table->string('image')->nullable();
            $table->longText('main_content');
            $table->longText('support_content_1st')->nullable();
            $table->longText('support_content_2nd')->nullable();
            $table->longText('summary')->nullable();
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            $table->json('tags')->nullable();
            $table->unsignedInteger('views')->default(0);
            $table->unsignedInteger('likes')->default(0);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
