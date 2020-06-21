<?php

use App\Recovered;
use Illuminate\Database\Seeder;

class RecoveredTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recovered1 =['province_id' => 3, 'date_reported' => '11.06.2020', 'recovered' => 3];
        $recovered2 =['province_id' => 8, 'date_reported' => '11.06.2020', 'recovered' => 6];
        $recovered3 =['province_id' => 2, 'date_reported' => '11.06.2020', 'recovered' => 1];
        $recovered4 =['province_id' => 5, 'date_reported' => '11.06.2020', 'recovered' =>1];
        $recovered5 =['province_id' => 10, 'date_reported' => '11.06.2020', 'recovered' => 2];
        $recovered6 =['province_id' => 1, 'date_reported' => '11.06.2020', 'recovered' => 1];
        $recovered7 =['province_id' => 4, 'date_reported' => '11.06.2020', 'recovered' => 1];
        $recovered8 =['province_id' => 9, 'date_reported' => '11.06.2020', 'recovered' => 1];
        $recovered9 =['province_id' => 7, 'date_reported' => '11.06.2020', 'recovered' =>3];
        $recovered10 =['province_id' => 6, 'date_reported' => '11.06.2020', 'recovered' => 1];

        App\Recovered::create($recovered1);
        App\Recovered::create($recovered2);
        App\Recovered::create($recovered3);
        App\Recovered::create($recovered4);
        App\Recovered::create($recovered5);
        App\Recovered::create($recovered6);
        App\Recovered::create($recovered7);
        App\Recovered::create($recovered8);
        App\Recovered::create($recovered9);
        App\Recovered::create($recovered10);
    }
}
