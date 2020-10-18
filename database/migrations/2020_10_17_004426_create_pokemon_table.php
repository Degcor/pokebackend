<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->text('description');
            $table->string('category',30);
            $table->string('height');
            $table->string('weight');
            $table->text('image');
            $table->unsignedBigInteger('type_one_id');
            $table->foreign('type_one_id')->references('id')->on('types');
            $table->unsignedBigInteger('type_two_id')->nullable();
            $table->foreign('type_two_id')->references('id')->on('types');
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
        Schema::dropIfExists('pokemon');
    }
}
