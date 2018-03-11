<?php

use Illuminate\Database\Seeder;

class PathwayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
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
