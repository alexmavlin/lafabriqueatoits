<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImagesColumnsToBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->text('img_content_2')->nullable()->after('content_2');
            $table->text('img_content_3')->nullable()->after('content_3');
            $table->text('img_content_4')->nullable()->after('content_4');
            $table->text('img_content_5')->nullable()->after('content_5');
            $table->text('img_content_6')->nullable()->after('content_6');
            $table->text('img_content_7')->nullable()->after('content_7');
            $table->text('img_content_8')->nullable()->after('content_8');
            $table->text('img_content_9')->nullable()->after('content_9');
            $table->text('img_content_10')->nullable()->after('content_10');
            $table->text('img_content_11')->nullable()->after('content_11');
            $table->text('img_content_12')->nullable()->after('content_12');
            $table->text('img_content_13')->nullable()->after('content_13');
            $table->text('img_content_14')->nullable()->after('content_14');
            $table->text('img_content_15')->nullable()->after('content_15');
            $table->text('img_alt_2')->nullable()->after('img_content_2');
            $table->text('img_alt_3')->nullable()->after('img_content_3');
            $table->text('img_alt_4')->nullable()->after('img_content_4');
            $table->text('img_alt_5')->nullable()->after('img_content_5');
            $table->text('img_alt_6')->nullable()->after('img_content_6');
            $table->text('img_alt_7')->nullable()->after('img_content_7');
            $table->text('img_alt_8')->nullable()->after('img_content_8');
            $table->text('img_alt_9')->nullable()->after('img_content_9');
            $table->text('img_alt_10')->nullable()->after('img_content_10');
            $table->text('img_alt_11')->nullable()->after('img_content_11');
            $table->text('img_alt_12')->nullable()->after('img_content_12');
            $table->text('img_alt_13')->nullable()->after('img_content_13');
            $table->text('img_alt_14')->nullable()->after('img_content_14');
            $table->text('img_alt_15')->nullable()->after('img_content_15');
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
            $table->dropColumn('img_content_2');
            $table->dropColumn('img_content_3');
            $table->dropColumn('img_content_4');
            $table->dropColumn('img_content_5');
            $table->dropColumn('img_content_6');
            $table->dropColumn('img_content_7');
            $table->dropColumn('img_content_8');
            $table->dropColumn('img_content_9');
            $table->dropColumn('img_content_10');
            $table->dropColumn('img_content_11');
            $table->dropColumn('img_content_12');
            $table->dropColumn('img_content_13');
            $table->dropColumn('img_content_14');
            $table->dropColumn('img_content_15');
            $table->dropColumn('img_alt_2');
            $table->dropColumn('img_alt_3');
            $table->dropColumn('img_alt_4');
            $table->dropColumn('img_alt_5');
            $table->dropColumn('img_alt_6');
            $table->dropColumn('img_alt_7');
            $table->dropColumn('img_alt_8');
            $table->dropColumn('img_alt_9');
            $table->dropColumn('img_alt_10');
            $table->dropColumn('img_alt_11');
            $table->dropColumn('img_alt_12');
            $table->dropColumn('img_alt_13');
            $table->dropColumn('img_alt_14');
            $table->dropColumn('img_alt_15');
        });
    }
}
