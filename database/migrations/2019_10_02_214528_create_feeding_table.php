<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feeding', function (Blueprint $table) {
            $table->unsignedInteger('animal_id');
            $table->unsignedInteger('feed_id');

            $table
                ->foreign('animal_id')
                ->references('id')
                ->on('animals')
                ->onDelete('cascade');
            $table
                ->foreign('feed_id')
                ->references('id')
                ->on('feeds')
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
        Schema::dropIfExists('feeding');
    }
}
