<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddItemIdColumnToFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('faqs', function (Blueprint $table) {
            $table->unsignedBigInteger('chasseur_id')->nullable()->change();
            $table->unsignedBigInteger('item_id')->after('chasseur_id')->nullable();

            // Fk
            $table->foreign('item_id', 'faq_item_fk')->on('items')->references('id')->onDelete('cascade');
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
            $table->dropForeign('faq_item_fk');
            $table->dropColumn('item_id');
        });
    }
}
