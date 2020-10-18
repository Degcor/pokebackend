<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDamageRelationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('damage_relations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('win_type_id');
            $table->foreign('win_type_id')->references('id')->on('types');
            $table->unsignedBigInteger('lose_type_id');
            $table->foreign('lose_type_id')->references('id')->on('types');
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
        Schema::dropIfExists('damage_relations');
    }
}
