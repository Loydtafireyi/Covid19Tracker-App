<?php

use App\Province;
use Illuminate\Database\Seeder;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $province1 = ['name' => 'Mashonaland Central', 'code' => 'ZWE524', 'country_id' => 1];
        $province2 = ['name' => 'Harare', 'code' => 'ZWE525', 'country_id' => 1];
        $province3 = ['name' => 'Matabeleland North', 'code' => 'ZWE526', 'country_id' => 1];
        $province4 = ['name' => 'Midlands', 'code' => 'ZWE527', 'country_id' => 1];
        $province5 = ['name' => 'Mashonaland East', 'code' => 'ZWE528', 'country_id' => 1];
        $province6 = ['name' => 'Manicaland', 'code' => 'ZWE529', 'country_id' => 1];
        $province7 = ['name' => 'Matabeleland', 'code' => 'ZWE530', 'country_id' => 1];
        $province8 = ['name' => 'Bulawayo', 'code' => 'ZWE531', 'country_id' => 1];
        $province9 = ['name' => 'Masvingo', 'code' => 'ZWE532', 'country_id' => 1];
        $province10 = ['name' => 'Mashonaland West', 'code' => 'ZWE533', 'country_id' => 1];

        App\Province::create($province1);
        App\Province::create($province2);
        App\Province::create($province3);
        App\Province::create($province4);
        App\Province::create($province5);
        App\Province::create($province6);
        App\Province::create($province7);
        App\Province::create($province8);
        App\Province::create($province9);
        App\Province::create($province10);
    }
}
