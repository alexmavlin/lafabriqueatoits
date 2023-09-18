<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHunterColumnsToItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->string('hunter_img')->nullable();
            $table->string('hunter_img_600')->nullable();
            $table->string('hunter_img_400')->nullable();
            $table->string('hunter_img_alt')->nullable();
            $table->text('hunter_h1')->nullable();
            $table->text('hunter_p')->nullable();
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
            $table->dropColumn('hunter_img');
            $table->dropColumn('hunter_img_600');
            $table->dropColumn('hunter_img_400');
            $table->dropColumn('hunter_img_alt');
            $table->dropColumn('hunter_h1');
            $table->dropColumn('hunter_p');
        });
    }
}
