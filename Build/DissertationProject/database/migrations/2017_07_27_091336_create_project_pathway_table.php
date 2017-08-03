<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectPathwayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_pathways', function (Blueprint $table) {
            $table->integer('project_id')->unsigned();
            $table->integer('pathway_id')->unsigned();
            $table->string('updated_at');
            $table->string('created_at');

            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('pathway_id')->references('id')->on('pathways');

            $table->primary(['project_id', 'pathway_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_pathway');
    }
}
