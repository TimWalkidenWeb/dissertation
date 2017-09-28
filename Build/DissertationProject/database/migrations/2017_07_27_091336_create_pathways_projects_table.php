<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePathwaysProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pathways_projects', function (Blueprint $table) {
            $table->integer('projects_id')->unsigned()->onDelete('cascade');
            $table->integer('pathways_id')->unsigned();

            $table->foreign('projects_id')->references('id')->on('projects');
            $table->foreign('pathways_id')->references('id')->on('pathways');

            $table->primary(['projects_id', 'pathways_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pathways_projects');
    }
}
