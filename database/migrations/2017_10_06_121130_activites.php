<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Activites extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('activites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->string('organisateur');
            $table->string('animateur');
            $table->integer('fk_lieu');
            $table->integer('ageMin');
            $table->integer('ageMax');
            $table->string('contact');
            $table->string('descriptif');
            $table->date('jour');
            $table->time('heureDeb');
            $table->time('heureFin');
            $table->integer('placeRes');
            $table->integer('capaciterAcc');
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
         Schema::drop('activites');
    }
}