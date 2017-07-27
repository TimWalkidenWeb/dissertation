<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLearningMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learning_material', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Title');
            $table->string('content');
            $table->integer('learning_section')->unsigned();
            $table->integer('staff_id')->unsigned();
            $table->timestamps();

           // $table->primary('id');
            $table->foreign('staff_id')->references('id')->on('staff');
            $table->foreign('learning_section')->references('id')->on('learning_section');
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