<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lots', function (Blueprint $table) {
            $table->collation = 'utf8mb4_swedish_ci';

            $table->id();
            $table->string('name', 255)->nullable();
            $table->string('alt', 255)->nullable();
            $table->integer('price')->nullable();
            $table->text('descreption')->nullable();
            $table->string('img', 255);
            $table->unsignedBigInteger('habitations_id')->nullable();
            $table->integer('parts');
            $table->timestamps();

            // FK
            $table->foreign('habitations_id', 'lot_habitation_fk')->on('habitations')->references('id')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lots');
    }
}
