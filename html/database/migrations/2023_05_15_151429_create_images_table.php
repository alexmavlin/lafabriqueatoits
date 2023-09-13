<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->collation = 'utf8mb4_swedish_ci';
            
            $table->id();
            $table->string('src', 255);
            $table->string('alt', 255)->nullable();
            $table->unsignedBigInteger('habitations_id')->nullable();
            $table->boolean('is_first')->default(0);
            $table->timestamps();

            // FK
            $table->foreign('habitations_id', 'image_habitation_fk')->on('habitations')->references('id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
