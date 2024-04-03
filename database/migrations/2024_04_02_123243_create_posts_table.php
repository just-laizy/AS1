<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->index();
            $table->foreign('user_id') -> references('id')->on('users') -> onDelete('cascade');
            $table->bigInteger('category_id')->index();
            $table->foreign('category_id') -> references('id')->on('categories') -> onDelete('cascade');
            $table->string('title');
            $table->text('content');
            $table->integer('view_count')->default(0);
            $table->integer('like_count')->default(0);
            $table->timestamp('published_at');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');

        });
    }
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
