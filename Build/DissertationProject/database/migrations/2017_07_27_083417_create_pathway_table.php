<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**
 * The following code is used to create the pathway table
 */
class CreatePathwayTable extends Migration
{
    /**
     * pubic function is used to create the columns within the table,
     * the first row names the table
     * the second row creates the column called id with the data type of increments
     * the third row create the column called pathway with the data type of string

     */
    public function up()
    {
        Schema::create('pathways', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pathway');

           // $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pathway');
    }
}
