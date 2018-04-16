<?php

use Illuminate\Database\Seeder;
/**
 *Seeder for the coursework table
 */
class CwsTableSeeder extends Seeder
{
    /**
     * The following public function is used to set out the layout to insert a new record
     * it starts by selecting the name of the table
     * then goes column by column assign data to the column
     * then repeats four times
     */
    public function run()
    {
        DB::table('cws')->insert([
            'Id' =>  1,
            'title' => 'Project Proposal',
        ]);
        DB::table('cws')->insert([
            'Id' =>  2,
            'title' => 'Poster Presentation',
        ]);

        DB::table('cws')->insert([
            'Id' =>  3,
            'title' => 'Final document',
        ]);
        DB::table('cws')->insert([
            'Id' =>  4,
            'title' => 'Development techniques',
        ]);
    }
}
