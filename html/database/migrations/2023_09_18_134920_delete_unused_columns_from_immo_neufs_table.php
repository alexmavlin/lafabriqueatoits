<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteUnusedColumnsFromImmoNeufsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('immo_neufs', function (Blueprint $table) {
            $table->dropColumn('h2_main');
            $table->dropColumn('h3_main');
            $table->dropColumn('img_main_430');
            $table->dropColumn('img_main_title');
            $table->dropColumn('content_main');
            $table->dropColumn('parallax1_heading');
            $table->dropColumn('parallax2_heading');
            $table->dropColumn('parallax1_p');
            $table->dropColumn('parallax2_p');
            $table->dropColumn('parallax1_img');
            $table->dropColumn('parallax2_img');
            $table->dropColumn('h2_content_2');
            $table->dropColumn('h2_content_3');
            $table->dropColumn('h3_content_2');
            $table->dropColumn('h3_content_3');
            $table->dropColumn('content_2');
            $table->dropColumn('content_3');
            $table->dropColumn('img_content_3');
            $table->dropColumn('img_content_3_430');
            $table->dropColumn('img_content_3_alt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('immo_neufs', function (Blueprint $table) {
            $table->text('h2_main')->nullable();
            $table->text('h3_main')->nullable();
            $table->text('img_main_430')->nullable();
            $table->text('img_main_title')->nullable();
            $table->text('content_main')->nullable();
            $table->text('parallax1_heading')->nullable();
            $table->text('parallax2_heading')->nullable();
            $table->text('parallax1_p')->nullable();
            $table->text('parallax2_p')->nullable();
            $table->text('parallax1_img')->nullable();
            $table->text('parallax2_img')->nullable();
            $table->text('h2_content_2')->nullable();
            $table->text('h2_content_3')->nullable();
            $table->text('h3_content_2')->nullable();
            $table->text('h3_content_3')->nullable();
            $table->text('content_2')->nullable();
            $table->text('content_3')->nullable();
            $table->text('img_content_3')->nullable();
            $table->text('img_content_3_430')->nullable();
            $table->text('img_content_3_alt')->nullable();
        });
    }
}
