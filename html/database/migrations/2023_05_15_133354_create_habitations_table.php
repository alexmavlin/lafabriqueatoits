<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitations', function (Blueprint $table) {
            $table->collation = 'utf8mb4_swedish_ci';
            
            $table->id();
            $table->string('slug', 255);
            $table->string('title', 255);
            $table->string('meta_title', 255);
            $table->string('h1_title', 255);
            $table->string('h2_title', 255)->nullable();
            $table->string('h3_title', 255);
            $table->integer('min_price')->nullable();
            $table->text('description')->nullable();
            $table->text('mini_descreption')->nullable();
            $table->string('meta_keywords', 500);
            $table->string('meta_description', 255);
            $table->enum('type', ['Appartement', 'Maison']);
            $table->string('devices', 255);
            $table->string('address', 255);
            $table->unsignedBigInteger('department_id')->nullable();
            $table->string('lon', 191)->nullable();
            $table->string('lat', 191)->nullable();
            $table->string('city', 255)->nullable();
            $table->year('delivery_date')->nullable();
            $table->string('trimester', 191)->nullable();
            $table->string('city_info_title_1', 191)->nullable();
            $table->string('city_info_title_2', 191)->nullable();
            $table->string('city_info_title_3', 191)->nullable();
            $table->string('city_info_title_4', 191)->nullable();
            $table->string('city_info_1', 255)->nullable();
            $table->string('city_info_2', 255)->nullable();
            $table->string('city_info_3', 255)->nullable();
            $table->string('city_info_4', 255)->nullable();
            $table->boolean('is_new')->default(0);
            $table->string('breadcrumb', 255)->nullable();
            $table->boolean('is_selected')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitations');
    }
}
