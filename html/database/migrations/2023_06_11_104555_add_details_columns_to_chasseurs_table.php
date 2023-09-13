<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDetailsColumnsToChasseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chasseurs', function (Blueprint $table) {
            $table->text('h2_details')->nullable();
            $table->text('p_details')->nullable();
            $table->text('h3_details_1')->nullable();
            $table->text('contnent_details_1')->nullable();
            $table->text('h3_details_2')->nullable();
            $table->text('contnent_details_2')->nullable();
            $table->text('h3_details_3')->nullable();
            $table->text('contnent_details_3')->nullable();
            $table->text('h3_details_4')->nullable();
            $table->text('contnent_details_4')->nullable();
            $table->text('h3_details_5')->nullable();
            $table->text('contnent_details_5')->nullable();
            $table->text('h3_details_6')->nullable();
            $table->text('contnent_details_6')->nullable();
            $table->text('h3_details_7')->nullable();
            $table->text('contnent_details_7')->nullable();
            $table->text('h3_details_8')->nullable();
            $table->text('contnent_details_8')->nullable();
            $table->text('h3_details_9')->nullable();
            $table->text('contnent_details_9')->nullable();
            $table->text('h3_details_10')->nullable();
            $table->text('contnent_details_10')->nullable();
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
            $table->dropColumn('h2_details');
            $table->dropColumn('p_details');
            $table->dropColumn('h3_details_1');
            $table->dropColumn('contnent_details_1');
            $table->dropColumn('h3_details_2');
            $table->dropColumn('contnent_details_2');
            $table->dropColumn('h3_details_3');
            $table->dropColumn('contnent_details_3');
            $table->dropColumn('h3_details_4');
            $table->dropColumn('contnent_details_4');
            $table->dropColumn('h3_details_5');
            $table->dropColumn('contnent_details_5');
            $table->dropColumn('h3_details_6');
            $table->dropColumn('contnent_details_6');
            $table->dropColumn('h3_details_7');
            $table->dropColumn('contnent_details_7');
            $table->dropColumn('h3_details_8');
            $table->dropColumn('contnent_details_8');
            $table->dropColumn('h3_details_9');
            $table->dropColumn('contnent_details_9');
            $table->dropColumn('h3_details_10');
            $table->dropColumn('contnent_details_10');
        });
    }
}
