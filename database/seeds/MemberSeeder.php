<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'fname' => 'Ramsay',
            'lname' => 'Jordan',
            'email' => 'rj@gmail.com',
            'phone_number'=> '2134567689',

        ]);
    }
}
