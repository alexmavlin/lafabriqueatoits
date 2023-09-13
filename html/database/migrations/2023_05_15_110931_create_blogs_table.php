<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->collation = 'utf8mb4_swedish_ci';

            $table->id();
            $table->string('h2_title_cards', 500)->nullable();
            $table->string('en_savoir_cards', 255);
            $table->text('description_cards')->nullable();
            $table->string('slug', 255);
            $table->string('title', 255);
            $table->string('meta_description', 1000)->nullable();
            $table->string('meta_keywords', 1000);
            $table->string('meta_title', 500);
            $table->string('image', 255)->nullable();
            $table->string('alt', 255)->nullable();
            $table->string('h1_title', 255)->nullable();
            $table->date('date')->nullable();
            $table->string('author', 255);
            $table->string('categorie', 1000);
            $table->text('h2_title')->nullable();
            $table->string('h3_title', 255)->nullable();
            $table->text('content')->nullable();
            $table->string('img_content', 255)->nullable();
            $table->string('alt_content', 255)->nullable();

            $table->string('h3_title_2', 500)->nullable();
            $table->text('content_2')->nullable();
            $table->string('h3_title_15', 500)->nullable();
            $table->text('content_15')->nullable();
            $table->string('h3_title_14', 500)->nullable();
            $table->text('content_14')->nullable();
            $table->string('h3_title_13', 500)->nullable();
            $table->text('content_13')->nullable();
            $table->string('h3_title_12', 500)->nullable();
            $table->text('content_12')->nullable();
            $table->string('h3_title_11', 500)->nullable();
            $table->text('content_11')->nullable();
            $table->string('h3_title_10', 500)->nullable();
            $table->text('content_10')->nullable();
            $table->string('h3_title_9', 500)->nullable();
            $table->text('content_9')->nullable();
            $table->string('h3_title_8', 500)->nullable();
            $table->text('content_8')->nullable();
            $table->string('h3_title_7', 500)->nullable();
            $table->text('content_7')->nullable();
            $table->string('h3_title_6', 500)->nullable();
            $table->text('content_6')->nullable();
            $table->string('h3_title_5', 500)->nullable();
            $table->text('content_5')->nullable();
            $table->string('h3_title_4', 500)->nullable();
            $table->text('content_4')->nullable();
            $table->string('h3_title_3', 500)->nullable();
            $table->text('content_3')->nullable();
            $table->boolean('is_selected')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
