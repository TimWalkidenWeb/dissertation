<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLearningMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learning_materials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title');
            $table->longText('content');
            $table->integer('learning_section_id')->unsigned();
            $table->integer('staff_id')->unsigned();
            $table->timestamps();

           // $table->primary('id');
            $table->foreign('staff_id')->references('id')->on('users');
            $table->foreign('learning_section_id')->references('id')->on('learning_sects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}