<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();

            $table->text('meta_title')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('url_index', 255)->unique();
            $table->text('main_title')->nullable();
            $table->text('main_bg')->nullable();
            $table->text('breadcrumbs_name')->nullable();
            $table->text('breadcrumbs_title')->nullable();
            $table->text('h2_main')->nullable();
            $table->text('p_main')->nullable();
            $table->text('h2_content_1')->nullable();
            $table->text('h2_content_2')->nullable();
            $table->text('h2_content_3')->nullable();
            $table->text('h3_content_1')->nullable();
            $table->text('h3_content_2')->nullable();
            $table->text('h3_content_3')->nullable();
            $table->text('p_content_1')->nullable();
            $table->text('p_content_2')->nullable();
            $table->text('p_content_3')->nullable();
            $table->text('h2_items')->nullable();
            $table->text('h3_items')->nullable();
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
            $table->text('main_content')->nullable();
            $table->text('arts_et_metiers_content')->nullable();
            $table->text('enfants_rouges_content')->nullable();
            $table->text('sainte_avoye_content')->nullable();
            $table->text('archives_content')->nullable();
            $table->text('h2_faq')->nullable()->nullable();
            $table->text('h3_faq')->nullable()->nullable();

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
        Schema::dropIfExists('items');
    }
}
