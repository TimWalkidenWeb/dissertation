<?php

use Illuminate\Database\Seeder;
/**
 *Seeder for the user table
 */
class UserTableSeeder extends Seeder
{
    /**
     * The following public function is used to set out the layout to insert a new record
     * it starts by selecting the name of the table
     * then goes column by column assign data to the column
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'timothy.walkiden@edgehill.ac.uk',
            'password' => bcrypt('password'),
            'permission' => '1',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
