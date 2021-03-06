<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aliments', function (Blueprint $table) {
        $table->increments('id');
	    $table->timestamps();
	    $table->integer('category_id')->unsigned();
        $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        $table->integer('glucide')->nullable();
        $table->integer('quantite')->nullable();
	     $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aliments');
    }
}
