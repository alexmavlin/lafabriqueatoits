<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOfferColumnsToItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->string('offer_img_1')->nullable();
            $table->string('offer_img_600_1')->nullable();
            $table->string('offer_img_400_1')->nullable();
            $table->string('offer_img_alt_1')->nullable();
            $table->string('offer_img_2')->nullable();
            $table->string('offer_img_600_2')->nullable();
            $table->string('offer_img_400_2')->nullable();
            $table->string('offer_img_alt_2')->nullable();
            $table->string('offer_img_3')->nullable();
            $table->string('offer_img_600_3')->nullable();
            $table->string('offer_img_400_3')->nullable();
            $table->string('offer_img_alt_3')->nullable();
            $table->string('offer_img_4')->nullable();
            $table->string('offer_img_600_4')->nullable();
            $table->string('offer_img_400_4')->nullable();
            $table->string('offer_img_alt_4')->nullable();
            $table->string('offer_img_5')->nullable();
            $table->string('offer_img_600_5')->nullable();
            $table->string('offer_img_400_5')->nullable();
            $table->string('offer_img_alt_5')->nullable();
            $table->text('offer_h2_1')->nullable();
            $table->text('offer_h2_2')->nullable();
            $table->text('offer_h2_3')->nullable();
            $table->text('offer_h2_4')->nullable();
            $table->text('offer_h2_5')->nullable();
            $table->text('offer_p_1')->nullable();
            $table->text('offer_p_2')->nullable();
            $table->text('offer_p_3')->nullable();
            $table->text('offer_p_4')->nullable();
            $table->text('offer_p_5')->nullable();
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
            $table->dropColumn('offer_img_1');
            $table->dropColumn('offer_img_600_1');
            $table->dropColumn('offer_img_400_1');
            $table->dropColumn('offer_img_alt_1');
            $table->dropColumn('offer_img_2');
            $table->dropColumn('offer_img_600_2');
            $table->dropColumn('offer_img_400_2');
            $table->dropColumn('offer_img_alt_2');
            $table->dropColumn('offer_img_3');
            $table->dropColumn('offer_img_600_3');
            $table->dropColumn('offer_img_400_3');
            $table->dropColumn('offer_img_alt_3');
            $table->dropColumn('offer_img_4');
            $table->dropColumn('offer_img_600_4');
            $table->dropColumn('offer_img_400_4');
            $table->dropColumn('offer_img_alt_4');
            $table->dropColumn('offer_img_5');
            $table->dropColumn('offer_img_600_5');
            $table->dropColumn('offer_img_400_5');
            $table->dropColumn('offer_img_alt_5');
            $table->dropColumn('offer_h2_1');
            $table->dropColumn('offer_h2_2');
            $table->dropColumn('offer_h2_3');
            $table->dropColumn('offer_h2_4');
            $table->dropColumn('offer_h2_5');
            $table->dropColumn('offer_p_1');
            $table->dropColumn('offer_p_2');
            $table->dropColumn('offer_p_3');
            $table->dropColumn('offer_p_4');
            $table->dropColumn('offer_p_5');
        });
    }
}
