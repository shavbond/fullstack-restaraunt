<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SeoSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seo_settings')->insert([
            'description' => "Billys Burger is an American
             multinational chain of hamburger fast food restaurants. Headquartered 
             in the NY-metro area, the company 
             was founded in 1987 as Insta-Burger,
             a New York City–based restaurant chain.",

            'keywords' => "Burgers, NYC, Main St, Billys, Drinks, Salads,",
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
    }
}
