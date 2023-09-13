<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('blog_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();

            // IDX
            $table->index('blog_id', 'blog_category_idx');
            $table->index('category_id', 'category_blog_idx');

            // FK
            $table->foreign('blog_id', 'blog_category_fk')->on('blogs')->references('id')->nullOnDelete();
            $table->foreign('category_id', 'category_blog_fk')->on('categories')->references('id')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs_categories');
    }
}
