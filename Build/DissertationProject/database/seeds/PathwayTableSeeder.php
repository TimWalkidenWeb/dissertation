<?php

use Illuminate\Database\Seeder;
/**
 *Seeder for the pathway table
 */
class PathwayTableSeeder extends Seeder
{
    /**
     * The following public function is used to set out the layout to insert a new record
     * it starts by selecting the name of the table
     * then goes column by column assign data to the column
     * then repeats five times
     */
    public function run()
    {
        DB::table('pathways')->insert([
           'Id' =>  1,
           'pathway' => 'Bsc Computer Science',
        ]
        );

        DB::table('pathways')->insert([
                'Id' =>  2,
                'pathway' => 'Bsc Computing',
            ]
        );

        DB::table('pathways')->insert([
                'Id' =>  3,
                'pathway' => 'Bsc Computing (Games Programming)',
            ]
        );

        DB::table('pathways')->insert([
                'Id' =>  4,
                'pathway' => 'Bsc Computing (Networking, Security and Forensics)',
            ]
        );

        DB::table('pathways')->insert([
                'Id' =>  5,
                'pathway' => 'Bsc Web Design and Development',
            ]
        );
    }
}
