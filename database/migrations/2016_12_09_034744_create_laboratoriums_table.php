<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboratoriumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratoriums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('kalabid')->unsigned();
            $table->foreign('kalabid')->references('id')->on('dosens');
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
        Schema::drop('laboratoriums');
    }
}
