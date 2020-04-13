<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('general_settings')->insert([
            'site_title' => 'Billys Burgers',
            'address_1' => '180 Main St',
            'address_2' => '',
            'city' => 'Staten Island',
            'state' => 'NY',
            'zipcode' => '10307',
            'phone_number' => '347-231-4545',
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
