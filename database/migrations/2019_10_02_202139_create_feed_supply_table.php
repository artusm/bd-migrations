<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedSupplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feed_supply', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('feed_supplier_id');
            $table->integer('count');
            $table->integer('price');
            $table->date('delivery_at');

            $table
                ->foreign('feed_supplier_id')
                ->references('id')
                ->on('feed_suppliers')
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
        Schema::dropIfExists('feed_supply');
    }
}
