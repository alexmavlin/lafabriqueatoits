<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImmoNeufsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('immo_neufs', function (Blueprint $table) {
            $table->id();

            $table->text('meta_title', 500)->nullable();
            $table->text('meta_keywords', 500)->nullable();
            $table->text('meta_description', 500)->nullable();
            $table->string('url_index', 100)->unique();
            $table->text('breadcrumbs_name', 255)->nullable();
            $table->text('breadcrumbs_title')->nullable();
            $table->text('page_title', 255)->nullable();
            $table->text('h2_main', 500)->nullable();
            $table->text('h3_main', 1000)->nullable();
            $table->string('img_main')->nullable();
            $table->string('img_main_430')->nullable();
            $table->string('img_main_title')->nullable();
            $table->text('content_main')->nullable();
            $table->text('parallax1_heading', 500)->nullable();
            $table->text('parallax1_p', 500)->nullable();
            $table->string('parallax1_img', 500)->nullable();
            $table->text('parallax2_heading', 500)->nullable();
            $table->text('parallax2_p', 500)->nullable();
            $table->string('parallax2_img', 500)->nullable();
            $table->text('h2_content_2', 500)->nullable();
            $table->text('h3_content_2', 1000)->nullable();
            $table->text('content_2')->nullable();
            $table->text('h2_content_3', 500)->nullable();
            $table->text('h3_content_3', 1000)->nullable();
            $table->text('content_3')->nullable();

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
        Schema::dropIfExists('immo_neufs');
    }
}
