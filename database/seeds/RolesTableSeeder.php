<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //created users
        DB::table('roles')->insert([
            'title' => 'admin',

        ]);


        DB::table('roles')->insert([
            'title' => 'Employee',

        ]);
            //account user role
        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,

        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 2,

        ]);
    }
}
