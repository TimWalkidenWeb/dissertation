<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCwsLearningSectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cws_learning_sect', function (Blueprint $table) {
            $table->integer('cws_id')->unsigned()->onDelete('cascade');
            $table->integer('learning_sect_id')->unsigned();


            $table->foreign('cws_id')->references('id')->on('cws');
            $table->foreign('learning_sect_id')->references('id')->on('learning_sects');

            $table->primary(['cws_id', 'learning_sect_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cws_learning_sects');
    }
}
