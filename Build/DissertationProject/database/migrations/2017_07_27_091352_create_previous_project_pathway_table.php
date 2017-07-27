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
        Schema::create('previous_project_pathway', function (Blueprint $table) {
            $table->integer('previous_project_id')->unsigned();
            $table->integer('pathway_id')->unsigned();

            $table->foreign('previous_project_id')->references('id')->on('projects');
            $table->foreign('pathway_id')->references('id')->on('pathway');

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
