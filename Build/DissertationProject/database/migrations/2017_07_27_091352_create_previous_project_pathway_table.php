<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreviousProjectPathwayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previous_projects_pathways', function (Blueprint $table) {
            $table->integer('previous_id')->unsigned();
            $table->integer('pathway_id')->unsigned();
            $table->string('updated_at');
            $table->string('created_at');

            $table->foreign('previous_id')->references('id')->on('previous_projects');
            $table->foreign('pathway_id')->references('id')->on('pathways');

            $table->primary(['previous_project_id', 'pathway_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('previous_project_pathway');
    }
}
