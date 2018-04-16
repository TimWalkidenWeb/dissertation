<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**
 * The following code is used to create the previous project table
 */
class CreatePreProjectsTable extends Migration
{
    /**
     * pubic function is used to create the columns within the table,
     * the first row names the table
     * the second row creates the column called id with the data type of increments
     * the third row create the column called title with the data type of string
     * the next row create the column called content with the data type of longText
     * the next row create the column called description with the data type of longText
     * the next row create the column called date with the data type of date
     * the next row create the column called user_id with the data type of integer
     * the next row create the column called image with the data type of longText
     * the next two lines create the foregin keys by selecting the column and linking it to the a column in another table
     */
    public function up()
    {
        Schema::create('pre_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title');
            $table->longText('content');
            $table->longText('description');
            $table->date('Date');
            $table->integer('user_id')->unsigned();
            $table->longText('image');
            $table->timestamps();

            // $table->primary('id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pre_projects');
    }
}
