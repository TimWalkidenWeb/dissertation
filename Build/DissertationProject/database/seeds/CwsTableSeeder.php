<?php

use Illuminate\Database\Seeder;

class CwsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
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
