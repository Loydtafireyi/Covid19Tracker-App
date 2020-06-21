<?php

use App\DonorName;
use Illuminate\Database\Seeder;

class DonorNameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $donor1 = ['name' => 'ZW Govt Treasury', 'donor_type_id' => 1, 'country_id' => 1];
        $donor2 = ['name' => 'ZW Govt Social Safety Funds', 'donor_type_id' => 1, 'country_id' => 1];
        $donor3 = ['name' => 'ZW Govt Disaster Fund', 'donor_type_id' => 1, 'country_id' => 1];
        $donor4 = ['name' => 'United Kingdom Govt', 'donor_type_id' => 1, 'country_id' => 1];
        $donor5 = ['name' => 'United States Govt', 'donor_type_id' => 1, 'country_id' => 1];
        $donor6 = ['name' => 'Swiss Govt', 'donor_type_id' => 1, 'country_id' => 1];
        $donor7 = ['name' => 'China (Nanning City)', 'donor_type_id' => 1, 'country_id' => 1];
        $donor8 = ['name' => 'India', 'donor_type_id' => 1, 'country_id' => 1];
        $donor9 = ['name' => 'Namibia', 'donor_type_id' => 1, 'country_id' => 1];
        $donor10 = ['name' => 'Chinese Embassy', 'donor_type_id' => 2, 'country_id' => 1];
        $donor11 = ['name' => 'Swedish Embassy', 'donor_type_id' => 2, 'country_id' => 1];

        App\DonorName::create($donor1);
        App\DonorName::create($donor2);
        App\DonorName::create($donor3);
        App\DonorName::create($donor4);
        App\DonorName::create($donor5);
        App\DonorName::create($donor6);
        App\DonorName::create($donor7);
        App\DonorName::create($donor8);
        App\DonorName::create($donor9);
        App\DonorName::create($donor10);
        App\DonorName::create($donor11);


    }
}
