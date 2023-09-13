<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDepartmentIdConstrainedToHabitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('habitations', function (Blueprint $table) {
            $table->foreign('department_id', 'habitation_department_fk')->references('id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('habitations', function (Blueprint $table) {
            $table->dropForeign('habitation_department_fk');
        });
    }
}
