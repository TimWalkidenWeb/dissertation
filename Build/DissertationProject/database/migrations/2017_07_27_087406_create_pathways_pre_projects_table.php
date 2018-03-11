<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePathwaysPreProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pathways_pre_project', function (Blueprint $table) {
            $table->integer('pathways_id')->unsigned();
            $table->integer('pre_project_id')->unsigned()->onDelete('cascade');


            $table->foreign('pathways_id')->references('id')->on('pathways');
            $table->foreign('pre_project_id')->references('id')->on('pre_projects');


            $table->primary(['pre_project_id', 'pathways_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pathways_pre_projects');
    }
}
