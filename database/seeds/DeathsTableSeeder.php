<?php

use App\Death;
use Illuminate\Database\Seeder;

class DeathsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $deaths1 = ['province_id' => 2, 'date_reported' => '11.04.2020', 'deaths' => 3];
        $deaths2 = ['province_id' => 1, 'date_reported' => '11.04.2020', 'deaths' => 1];
        $deaths3 = ['province_id' => 3, 'date_reported' => '11.04.2020', 'deaths' => 1];
        $deaths4 = ['province_id' => 4, 'date_reported' => '11.04.2020', 'deaths' => 1];
        $deaths5 = ['province_id' => 5, 'date_reported' => '11.04.2020', 'deaths' => 1];
        $deaths6 = ['province_id' => 6, 'date_reported' => '11.04.2020', 'deaths' => 1];
        $deaths7 = ['province_id' => 7, 'date_reported' => '11.04.2020', 'deaths' => 1];
        $deaths8 = ['province_id' => 8, 'date_reported' => '11.04.2020', 'deaths' => 1];
        $deaths9 = ['province_id' => 9, 'date_reported' => '11.04.2020', 'deaths' => 1];
        $deaths10 = ['province_id' => 10, 'date_reported' => '11.04.2020', 'deaths' => 1];

        App\Death::create($deaths1);
        App\Death::create($deaths2);
        App\Death::create($deaths3);
        App\Death::create($deaths4);
        App\Death::create($deaths5);
        App\Death::create($deaths6);
        App\Death::create($deaths7);
        App\Death::create($deaths8);
        App\Death::create($deaths9);
        App\Death::create($deaths10);
    }
}
