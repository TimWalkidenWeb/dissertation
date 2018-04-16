<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**
 * The following code is used to create the coursework learning section table
 */
class CreatePathwaysProjectsTable extends Migration
{
    /**
     * pubic function is used to create the columns within the table,
     * the first row names the table
     * the second row creates the column called projects_id with the data type of integer
     * the third row create the column called pathways_id with the data type of integer
     * the next two lines create the foreign keys by selecting the column and linking it to the a column in another table
     * the last line sets the column to primary keys
     */
    public function up()
    {
        Schema::create('pathways_projects', function (Blueprint $table) {
            $table->integer('projects_id')->unsigned()->onDelete('cascade');
            $table->integer('pathways_id')->unsigned()->onDelete('cascade');

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
