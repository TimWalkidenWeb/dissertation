<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title');
            $table->string('content');
            $table->string('description');
            $table->date('Date');
            $table->integer('user_id')->unsigned();
            $table->string('image');
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
