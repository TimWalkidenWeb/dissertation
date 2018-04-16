<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**
 * The following code is used to create the coursework learning section table
 */
class CreateLearningSectsTable extends Migration
{
    /**
     * pubic function is used to create the columns within the table,
     * the first row names the table
     * the second row creates the column called id with the data type of increments
     * the third row create the column called title with the data type of string
     * the next row create the column called content with the data type of longText
     * the next row create the column called image with the data type of string
     */
    public function up()
    {
        Schema::create('learning_sects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('content');
            $table->string('image');
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
        Schema::dropIfExists('learning_sects');
    }
}
