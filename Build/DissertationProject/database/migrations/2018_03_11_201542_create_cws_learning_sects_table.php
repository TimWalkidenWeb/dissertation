<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**
 * The following code is used to create the coursework learning section table
 */
class CreateCwsLearningSectsTable extends Migration
{
    /**
     * pubic function is used to create the columns within the table,
     * the first row names the table
     * the second row creates the column called cws_id with the data type of integer
     * the third row create the column called learning section with the data type of integer
     * the next two lines create the foregin keys by selecting the column and linking it to the a column in another table
     * the last line sets the column to primary keys
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
