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
        DB::table('permission')->insert([
            'Id' =>  1,
            'permission' => 'Access to all staff data',
    ]);
        DB::table('permission')->insert([
            'Id' =>  2,
            'permission' => 'Access to only your data',
        ]);
    }
}
