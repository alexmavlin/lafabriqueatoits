<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->text('main_title');
            $table->text('h4_title_1');
            $table->text('content_1');
            $table->text('h4_title_2');
            $table->text('content_2');
            $table->text('h4_title_3');
            $table->text('content_3');
            $table->text('h4_title_4');
            $table->text('content_4');
            $table->text('h4_title_5');
            $table->text('content_5');
            $table->text('h4_title_6');
            $table->text('content_6');
            $table->text('h4_title_7');
            $table->text('content_7');
            $table->text('h4_title_8');
            $table->text('content_8');
            $table->text('h4_title_9');
            $table->text('content_9');
            $table->text('h4_title_10');
            $table->text('content_10');
            $table->unsignedBigInteger('chasseur_id');
            $table->timestamps();

            // FK
            $table->foreign('chasseur_id', 'faq_chasseur_fk')->on('chasseurs')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faqs');
    }
}
