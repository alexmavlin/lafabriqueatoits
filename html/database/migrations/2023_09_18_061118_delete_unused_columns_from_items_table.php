<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteUnusedColumnsFromItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropColumn('h2_main');
            $table->dropColumn('p_main');
            $table->dropColumn('h2_content_1');
            $table->dropColumn('h2_content_2');
            $table->dropColumn('h2_content_3');
            $table->dropColumn('h3_content_1');
            $table->dropColumn('h3_content_2');
            $table->dropColumn('h3_content_3');
            $table->dropColumn('p_content_1');
            $table->dropColumn('p_content_2');
            $table->dropColumn('p_content_3');
            $table->dropColumn('h2_items');
            $table->dropColumn('h3_items');
            $table->dropColumn('img_items');
            $table->dropColumn('img_items_430');
            $table->dropColumn('img_items_title');
            $table->dropColumn('p_items_desc');
            $table->dropColumn('p_items_src');
            $table->dropColumn('parallax1_heading');
            $table->dropColumn('parallax2_heading');
            $table->dropColumn('parallax3_heading');
            $table->dropColumn('parallax4_heading');
            $table->dropColumn('parallax1_p');
            $table->dropColumn('parallax2_p');
            $table->dropColumn('parallax3_p');
            $table->dropColumn('parallax4_p');
            $table->dropColumn('parallax1_desc');
            $table->dropColumn('parallax1_img');
            $table->dropColumn('parallax2_img');
            $table->dropColumn('parallax3_img');
            $table->dropColumn('parallax4_img');
            $table->dropColumn('main_content');
            $table->dropColumn('arts_et_metiers_content');
            $table->dropColumn('enfants_rouges_content');
            $table->dropColumn('sainte_avoye_content');
            $table->dropColumn('archives_content');
            $table->dropColumn('h2_faq');
            $table->dropColumn('h3_faq');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
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
            $table->text('img_items')->nullable();
            $table->text('img_items_430')->nullable();
            $table->text('img_items_title')->nullable();
            $table->text('p_items_desc')->nullable();
            $table->text('p_items_src')->nullable();
            $table->text('parallax1_heading')->nullable();
            $table->text('parallax2_heading')->nullable();
            $table->text('parallax3_heading')->nullable();
            $table->text('parallax4_heading')->nullable();
            $table->text('parallax1_p')->nullable();
            $table->text('parallax2_p')->nullable();
            $table->text('parallax3_p')->nullable();
            $table->text('parallax4_p')->nullable();
            $table->text('parallax1_desc')->nullable();
            $table->text('parallax1_img')->nullable();
            $table->text('parallax2_img')->nullable();
            $table->text('parallax3_img')->nullable();
            $table->text('parallax4_img')->nullable();
            $table->text('main_content')->nullable();
            $table->text('arts_et_metiers_content')->nullable();
            $table->text('enfants_rouges_content')->nullable();
            $table->text('sainte_avoye_content')->nullable();
            $table->text('archives_content')->nullable();
            $table->text('h2_faq')->nullable();
            $table->text('h3_faq')->nullable();
        });
    }
}
