<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**
 * The following code is used to create the user table
 */
class CreateUsersTable extends Migration
{
    /**
     * pubic function is used to create the columns within the table,
     * the first row names the table
     * the second row creates the column called id with the data type of increments
     * the third row create the column called name with the data type of string
     * the next row create the column called email with the data type of string and unique
     * the next row create the column called password with the data type of string
     * the next row create the column called permission with the data type of integer
     * the next two lines create the foregin keys by selecting the column and linking it to the a column in another table
     */
    public function up()
    {

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('updated_at');
            $table->string('created_at');
            $table->integer('permission')->unsigned();
            $table->string('remember_token')->nullable();

            //$table->primary('id');
            $table->foreign('permission')->references('id')->on('permissions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
