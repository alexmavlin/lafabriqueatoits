<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteUnusedColumnsFromFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('faqs', function (Blueprint $table) {
            $table->dropColumn('h4_title_1');
            $table->dropColumn('h4_title_2');
            $table->dropColumn('h4_title_3');
            $table->dropColumn('h4_title_4');
            $table->dropColumn('h4_title_5');
            $table->dropColumn('h4_title_6');
            $table->dropColumn('h4_title_7');
            $table->dropColumn('h4_title_8');
            $table->dropColumn('h4_title_9');
            $table->dropColumn('h4_title_10');
            $table->dropColumn('content_1');
            $table->dropColumn('content_2');
            $table->dropColumn('content_3');
            $table->dropColumn('content_4');
            $table->dropColumn('content_5');
            $table->dropColumn('content_6');
            $table->dropColumn('content_7');
            $table->dropColumn('content_8');
            $table->dropColumn('content_9');
            $table->dropColumn('content_10');

            $table->text('content')->nullable()->after('main_title');
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
            $table->text('h4_title_1')->nullable();
            $table->text('h4_title_2')->nullable();
            $table->text('h4_title_3')->nullable();
            $table->text('h4_title_4')->nullable();
            $table->text('h4_title_5')->nullable();
            $table->text('h4_title_6')->nullable();
            $table->text('h4_title_7')->nullable();
            $table->text('h4_title_8')->nullable();
            $table->text('h4_title_9')->nullable();
            $table->text('h4_title_10')->nullable();
            $table->text('content_1')->nullable();
            $table->text('content_2')->nullable();
            $table->text('content_3')->nullable();
            $table->text('content_4')->nullable();
            $table->text('content_5')->nullable();
            $table->text('content_6')->nullable();
            $table->text('content_7')->nullable();
            $table->text('content_8')->nullable();
            $table->text('content_9')->nullable();
            $table->text('content_10')->nullable();

            $table->dropColumn('content');
        });
    }
}
