<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionColumnsToBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->text('description_2')->nullable()->after('h3_title_2');
            $table->text('description_3')->nullable()->after('h3_title_3');
            $table->text('description_4')->nullable()->after('h3_title_4');
            $table->text('description_5')->nullable()->after('h3_title_5');
            $table->text('description_6')->nullable()->after('h3_title_6');
            $table->text('description_7')->nullable()->after('h3_title_7');
            $table->text('description_8')->nullable()->after('h3_title_8');
            $table->text('description_9')->nullable()->after('h3_title_9');
            $table->text('description_10')->nullable()->after('h3_title_10');
            $table->text('description_11')->nullable()->after('h3_title_11');
            $table->text('description_12')->nullable()->after('h3_title_12');
            $table->text('description_13')->nullable()->after('h3_title_13');
            $table->text('description_14')->nullable()->after('h3_title_14');
            $table->text('description_15')->nullable()->after('h3_title_15');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('description_2');
            $table->dropColumn('description_3');
            $table->dropColumn('description_4');
            $table->dropColumn('description_5');
            $table->dropColumn('description_6');
            $table->dropColumn('description_7');
            $table->dropColumn('description_8');
            $table->dropColumn('description_9');
            $table->dropColumn('description_10');
            $table->dropColumn('description_11');
            $table->dropColumn('description_12');
            $table->dropColumn('description_13');
            $table->dropColumn('description_14');
            $table->dropColumn('description_15');
        });
    }
}
