<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalColumnsToImmoNeufsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('immo_neufs', function (Blueprint $table) {
            $table->string('dpt_name')->nullable()->after('url_index');
            $table->text('img_content_3')->nullable()->after('content_3');
            $table->text('img_content_3_430')->nullable()->after('img_content_3');
            $table->text('img_content_3_alt')->nullable()->after('img_content_3_430');
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
            $table->dropColumn('dpt_name');
            $table->dropColumn('img_content_3');
            $table->dropColumn('img_content_3_430');
            $table->dropColumn('img_content_3_alt');
        });
    }
}
