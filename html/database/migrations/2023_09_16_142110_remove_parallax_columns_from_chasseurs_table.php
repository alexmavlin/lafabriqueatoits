<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveParallaxColumnsFromChasseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chasseurs', function (Blueprint $table) {
            $table->dropColumn('parallax1_heading');
            $table->dropColumn('parallax1_p');
            $table->dropColumn('parallax1_img');
            $table->dropColumn('parallax2_heading');
            $table->dropColumn('parallax2_p');
            $table->dropColumn('parallax2_img');
            $table->dropColumn('parallax3_heading');
            $table->dropColumn('parallax3_p');
            $table->dropColumn('parallax3_img');
            $table->dropColumn('parallax4_heading');
            $table->dropColumn('parallax4_p');
            $table->dropColumn('parallax4_img');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chasseurs', function (Blueprint $table) {
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
        });
    }
}
