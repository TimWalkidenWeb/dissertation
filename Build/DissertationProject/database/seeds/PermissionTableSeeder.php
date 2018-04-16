<?php

use Illuminate\Database\Seeder;
/**
 *Seeder for the permission table
 */
class PermissionTableSeeder extends Seeder
{
    /**
     * The following public function is used to set out the layout to insert a new record
     * it starts by selecting the name of the table
     * then goes column by column assign data to the column
     * then repeats three times
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'Id' =>  1,
            'permission' => 'Programme leader',
    ]);
        DB::table('permissions')->insert([
            'Id' =>  3,
            'permission' => 'lecturer',
        ]);

        DB::table('permissions')->insert([
            'Id' =>  2,
            'permission' => 'student',
        ]);
    }
}
