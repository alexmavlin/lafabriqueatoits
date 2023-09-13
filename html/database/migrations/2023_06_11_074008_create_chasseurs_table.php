<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChasseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chasseurs', function (Blueprint $table) {
            $table->id();

            $table->text('meta_title', 500)->nullable();
            $table->text('meta_keywords', 500)->nullable();
            $table->text('meta_description', 500)->nullable();
            $table->string('url_index', 100)->unique();
            $table->text('breadcrumbs_name', 255)->nullable();
            $table->text('breadcrumbs_title')->nullable();
            $table->text('page_title', 255)->nullable();
            $table->text('h2_main', 500)->nullable();
            $table->text('p_main', 1000)->nullable();
            $table->string('img_main')->nullable();
            $table->string('img_main_430')->nullable();
            $table->string('img_main_title')->nullable();
            $table->text('parallax1_heading', 500)->nullable();
            $table->text('parallax1_p', 500)->nullable();
            $table->string('parallax1_img', 500)->nullable();
            $table->text('parallax2_heading', 500)->nullable();
            $table->text('parallax2_p', 500)->nullable();
            $table->string('parallax2_img', 500)->nullable();
            $table->text('parallax3_heading', 500)->nullable();
            $table->text('parallax3_p', 500)->nullable();
            $table->string('parallax3_img', 500)->nullable();
            $table->text('parallax4_heading', 500)->nullable();
            $table->text('parallax4_p', 500)->nullable();
            $table->string('parallax4_img', 500)->nullable();
            $table->text('h2_content', 500)->nullable();
            $table->text('p_content', 1000)->nullable();
            $table->text('h3_content_1')->nullable();
            $table->text('p_content_1')->nullable();
            $table->text('icon_content_1')->nullable();
            $table->text('h3_content_2')->nullable();
            $table->text('p_content_2')->nullable();
            $table->text('icon_content_2')->nullable();
            $table->text('h3_content_3')->nullable();
            $table->text('p_content_3')->nullable();
            $table->text('icon_content_3')->nullable();
            $table->text('h3_content_4')->nullable();
            $table->text('p_content_4')->nullable();
            $table->text('icon_content_4')->nullable();
            $table->text('h3_content_5')->nullable();
            $table->text('p_content_5')->nullable();
            $table->text('icon_content_5')->nullable();
            $table->text('h3_content_6')->nullable();
            $table->text('p_content_6')->nullable();
            $table->text('icon_content_6')->nullable();
            $table->text('h3_content_7')->nullable();
            $table->text('p_content_7')->nullable();
            $table->text('icon_content_7')->nullable();
            $table->text('h3_content_8')->nullable();
            $table->text('p_content_8')->nullable();
            $table->text('icon_content_8')->nullable();
            $table->text('h3_content_9')->nullable();
            $table->text('p_content_9')->nullable();
            $table->text('icon_content_9')->nullable();
            $table->text('h3_content_10')->nullable();
            $table->text('p_content_10')->nullable();
            $table->text('icon_content_10')->nullable();
            $table->text('h3_content_11')->nullable();
            $table->text('p_content_11')->nullable();
            $table->text('icon_content_11')->nullable();
            $table->text('h3_content_12')->nullable();
            $table->text('p_content_12')->nullable();
            $table->text('icon_content_12')->nullable();
            $table->text('h3_content_13')->nullable();
            $table->text('p_content_13')->nullable();
            $table->text('icon_content_13')->nullable();
            $table->text('h3_content_14')->nullable();
            $table->text('p_content_14')->nullable();
            $table->text('icon_content_14')->nullable();
            $table->text('h3_content_15')->nullable();
            $table->text('p_content_15')->nullable();
            $table->text('icon_content_15')->nullable();
            $table->text('h3_content_16')->nullable();
            $table->text('p_content_16')->nullable();
            $table->text('icon_content_16')->nullable();
            $table->text('h3_content_17')->nullable();
            $table->text('p_content_17')->nullable();
            $table->text('icon_content_17')->nullable();
            $table->text('h3_content_18')->nullable();
            $table->text('p_content_18')->nullable();
            $table->text('icon_content_18')->nullable();
            $table->text('h3_content_19')->nullable();
            $table->text('p_content_19')->nullable();
            $table->text('icon_content_19')->nullable();
            $table->text('h3_content_20')->nullable();
            $table->text('p_content_20')->nullable();
            $table->text('icon_content_20')->nullable();
            $table->text('h2_cards')->nullable();
            $table->text('p_cards')->nullable();
            $table->text('h2_items')->nullable();
            $table->text('p_items')->nullable();
            $table->text('p_items_desc')->nullable();
            $table->text('p_items_src')->nullable();
            $table->string('img_items')->nullable();
            $table->string('img_items_430')->nullable();
            $table->string('img_items_title')->nullable();
            $table->text('h2_faq')->nullable();
            $table->text('p_faq')->nullable();

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
        Schema::dropIfExists('chasseurs');
    }
}
