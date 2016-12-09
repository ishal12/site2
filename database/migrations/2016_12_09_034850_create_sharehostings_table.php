<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSharehostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sharehostings', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tglrequest');
            $table->integer('mhsid')->unsigned();
            $table->foreign('mhsid')->references('id')->on('users');
            $table->integer('supervisorid')->unsigned();
            $table->foreign('supervisorid')->references('id')->on('dosens');
            $table->date('tglvalidasisupervisor');
            $table->date('tglvalidasikajur');
            $table->date('tglakhir');
            $table->boolean('status');
            $table->string('keterangan');
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
        Schema::drop('sharehostings');
    }
}
