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
        $deaths2 = ['province_id' => 8, 'date_reported' => '11.04.2020', 'deaths' => 1];

        App\Death::create($deaths1);
        App\Death::create($deaths2);
    }
}
