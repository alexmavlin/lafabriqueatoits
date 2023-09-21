<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBankColumnsToImmoNeufsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('immo_neufs', function (Blueprint $table) {
            $table->text('bank_h3_4')->nullable()->after('bank_h3_3');
            $table->text('bank_h3_5')->nullable()->after('bank_h3_4');
            $table->text('bank_h3_6')->nullable()->after('bank_h3_5');
            $table->text('bank_h3_7')->nullable()->after('bank_h3_6');
            $table->text('bank_h3_8')->nullable()->after('bank_h3_7');
            $table->text('bank_h3_9')->nullable()->after('bank_h3_8');
            $table->text('bank_h3_10')->nullable()->after('bank_h3_9');
            $table->text('bank_h3_11')->nullable()->after('bank_h3_10');
            $table->text('bank_h3_12')->nullable()->after('bank_h3_11');
            $table->text('bank_h3_13')->nullable()->after('bank_h3_12');
            $table->text('bank_h3_14')->nullable()->after('bank_h3_13');

            $table->text('bank_p_4')->nullable()->after('bank_p_3');
            $table->text('bank_p_5')->nullable()->after('bank_p_4');
            $table->text('bank_p_6')->nullable()->after('bank_p_5');
            $table->text('bank_p_7')->nullable()->after('bank_p_6');
            $table->text('bank_p_8')->nullable()->after('bank_p_7');
            $table->text('bank_p_9')->nullable()->after('bank_p_8');
            $table->text('bank_p_10')->nullable()->after('bank_p_9');
            $table->text('bank_p_11')->nullable()->after('bank_p_10');
            $table->text('bank_p_12')->nullable()->after('bank_p_11');
            $table->text('bank_p_13')->nullable()->after('bank_p_12');
            $table->text('bank_p_14')->nullable()->after('bank_p_13');
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
            $table->dropColumn('bank_h3_4');
            $table->dropColumn('bank_h3_5');
            $table->dropColumn('bank_h3_6');
            $table->dropColumn('bank_h3_7');
            $table->dropColumn('bank_h3_8');
            $table->dropColumn('bank_h3_9');
            $table->dropColumn('bank_h3_10');
            $table->dropColumn('bank_h3_11');
            $table->dropColumn('bank_h3_12');
            $table->dropColumn('bank_h3_13');
            $table->dropColumn('bank_h3_14');

            $table->dropColumn('bank_p_4');
            $table->dropColumn('bank_p_5');
            $table->dropColumn('bank_p_6');
            $table->dropColumn('bank_p_7');
            $table->dropColumn('bank_p_8');
            $table->dropColumn('bank_p_9');
            $table->dropColumn('bank_p_10');
            $table->dropColumn('bank_p_11');
            $table->dropColumn('bank_p_12');
            $table->dropColumn('bank_p_13');
            $table->dropColumn('bank_p_14');
        });
    }
}
