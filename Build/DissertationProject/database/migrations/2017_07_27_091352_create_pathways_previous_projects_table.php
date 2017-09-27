<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePathwaysPreviousProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pathways_previous_projects', function (Blueprint $table) {
            $table->integer('previous_projects_id')->unsigned()->onDelete('cascade');
            $table->integer('pathways_id')->unsigned();
            $table->string('updated_at');
            $table->string('created_at');

            $table->foreign('previous_projects_id')->references('id')->on('previous_projects');
            $table->foreign('pathways_id')->references('id')->on('pathways');

            $table->primary(['previous_projects_id', 'pathways_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pathways_previous_project');
    }
}
