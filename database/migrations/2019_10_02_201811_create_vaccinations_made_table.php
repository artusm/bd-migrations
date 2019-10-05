<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccinationsMadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccinations_made', function (Blueprint $table) {
            $table->unsignedInteger('animal_id');
            $table->unsignedInteger('vaccination_id');

            $table
                ->foreign('animal_id')
                ->references('id')
                ->on('animals')
                ->onDelete('cascade');
            $table
                ->foreign('vaccination_id')
                ->references('id')
                ->on('vaccinations')
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
        Schema::dropIfExists('vaccinations_made');
    }
}
