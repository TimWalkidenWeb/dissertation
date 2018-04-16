<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**
 * The following code is used to create the pathways pre projects  table
 */
class CreatePathwaysPreProjectsTable extends Migration
{
    /**
     * pubic function is used to create the columns within the table,
     * the first row names the table
     * the second row creates the column called pathway_id with the data type of integer
     * the third row create the column called pre_projects_id with the data type of integer
     * the next two lines create the foregin keys by selecting the column and linking it to the a column in another table
     * the last line sets the column to primary keys
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
