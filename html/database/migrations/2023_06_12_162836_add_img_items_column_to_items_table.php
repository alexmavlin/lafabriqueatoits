<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImgItemsColumnToItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->text('img_items')->nullable()->after('h3_items');
            $table->text('img_items_430')->nullable()->after('img_items');
            $table->text('img_items_title')->nullable()->after('img_items_430');
            $table->text('p_items_desc')->nullable()->after('img_items_title');
            $table->text('p_items_src')->nullable()->after('p_items_desc');
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
            $table->dropColumn('img_items');
            $table->dropColumn('img_items_430');
            $table->dropColumn('img_items_title');
            $table->dropColumn('p_items_desc');
            $table->dropColumn('p_items_src');
        });
    }
}
