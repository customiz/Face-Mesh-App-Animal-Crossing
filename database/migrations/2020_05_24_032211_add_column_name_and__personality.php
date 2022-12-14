<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnNameAndPersonality extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('filename');
            $table->string('country')->nullable();
            $table->integer('score')->unsigned()->default(1500);
            $table->integer('wins')->unsigned()->default(0);
            $table->integer('losses')->unsigned()->default(0);
            $table->integer('rank')->unsigned()->default(0);
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
        Schema::dropIfExists('images');
    }
}
