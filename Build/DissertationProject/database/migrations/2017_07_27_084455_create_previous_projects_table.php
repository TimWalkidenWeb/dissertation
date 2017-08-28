<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreviousProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previous_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title');
            $table->binary('content');
            $table->string('description');
            $table->date('Date');
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('previous_projects');
    }
}
