<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Demoyoucontact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demoyouesreles', function (Blueprint $table) {

            $table->string('namerel');
            $table->date('daterel');
            $table->integer('idrel')->unsigned();
            $table->foreign('idrel')->references('id')->on ('demoyoues');
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
        Schema::dropIfExists('demoyouesreles');
    }
}
