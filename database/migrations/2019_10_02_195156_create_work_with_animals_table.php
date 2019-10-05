<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkWithAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_with_animals', function (Blueprint $table) {
            $table->unsignedInteger('animal_id');
            $table->unsignedInteger('employee_id');

            $table
                ->foreign('animal_id')
                ->references('id')
                ->on('animals')
                ->onDelete('cascade');
            $table
                ->foreign('employee_id')
                ->references('id')
                ->on('employees')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_with_animals');
    }
}
