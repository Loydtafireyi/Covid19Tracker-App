<?php

use App\Infection;
use Illuminate\Database\Seeder;

class InfectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $infection1 =['province_id' => 3, 'date_reported' => '11.06.2020', 'infections' => 11];
        $infection2 =['province_id' => 8, 'date_reported' => '11.06.2020', 'infections' => 58];
        $infection3 =['province_id' => 2, 'date_reported' => '11.06.2020', 'infections' => 172];
        $infection4 =['province_id' => 5, 'date_reported' => '11.06.2020', 'infections' => 47];
        $infection5 =['province_id' => 10, 'date_reported' => '11.06.2020', 'infections' => 27];
        $infection6 =['province_id' => 1, 'date_reported' => '11.06.2020', 'infections' => 9];
        $infection7 =['province_id' => 4, 'date_reported' => '11.06.2020', 'infections' => 40];
        $infection8 =['province_id' => 9, 'date_reported' => '11.06.2020', 'infections' => 50];
        $infection9 =['province_id' => 7, 'date_reported' => '11.06.2020', 'infections' => 46];
        $infection10 =['province_id' => 6, 'date_reported' => '11.06.2020', 'infections' => 19];

        App\Infection::create($infection1);
        App\Infection::create($infection2);
        App\Infection::create($infection3);
        App\Infection::create($infection4);
        App\Infection::create($infection5);
        App\Infection::create($infection6);
        App\Infection::create($infection7);
        App\Infection::create($infection8);
        App\Infection::create($infection9);
        App\Infection::create($infection10);
    }
}
