<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImmoNeufColumnToFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('faqs', function (Blueprint $table) {
            $table->unsignedBigInteger('immo_neuf_id')->nullable()->after('item_id');

            $table->foreign('immo_neuf_id', 'faq_immoneuf')->on('immo_neufs')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('faqs', function (Blueprint $table) {
            $table->dropForeign('faq_immoneuf');
            $table->dropColumn('immo_neuf_id');
        });
    }
}
