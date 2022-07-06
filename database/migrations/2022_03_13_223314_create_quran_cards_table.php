<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuranCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quran_cards', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('ayeh');
            $table->text('translation');
            $table->string('picture');
            $table->unsignedBigInteger('category_id');

            $table->foreign('category_id')->references('id')->on("quran_categories")->onDelete('cascade')->onUpdate('cascade');


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
        Schema::dropIfExists('quran_cards');
    }
}
