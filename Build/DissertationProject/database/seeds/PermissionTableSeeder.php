<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'Id' =>  1,
            'permission' => 'Head of department',
    ]);
        DB::table('permissions')->insert([
            'Id' =>  2,
            'permission' => 'lecturer',
        ]);

        DB::table('permissions')->insert([
            'Id' =>  3,
            'permission' => 'student',
        ]);
    }
}
