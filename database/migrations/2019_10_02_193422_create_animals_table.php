<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 128)->index();
            $table->string('sex', 20);
            $table->integer('age');
            $table->integer('height');
            $table->date('receipt_at');

            $table->unsignedInteger('animal_specie_id');
            $table->unsignedInteger('animal_type_id');
            $table->unsignedInteger('animal_class_id');
        });

        Schema::table('animals', function (Blueprint $table) {
            $table
                ->foreign('animal_specie_id')
                ->references('id')
                ->on('animal_species')
                ->onDelete('cascade');
            $table
                ->foreign('animal_type_id')
                ->references('id')
                ->on('animal_types')
                ->onDelete('cascade');
            $table
                ->foreign('animal_class_id')
                ->references('id')
                ->on('animal_classes')
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
        Schema::table('animals', function (Blueprint $table) {
           $table->dropForeign('animal_specie_id');
           $table->dropForeign('animal_type_id');
           $table->dropForeign('animal_class_id');
        });
        Schema::dropIfExists('animals');
    }
}
