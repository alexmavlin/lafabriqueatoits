<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddParallaxAdditionalColumnToChasseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chasseurs', function (Blueprint $table) {
            $table->string('parallax1_desc')->after('parallax1_p')->nullable();
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
            $table->dropColumn('parallax1_desc');
        });
    }
}
