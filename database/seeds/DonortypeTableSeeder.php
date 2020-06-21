<?php

use App\DonorType;
use Illuminate\Database\Seeder;

class DonortypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $donor1 = ['type' => 'Governments'];
        $donor2 = ['type' => 'Embassies'];
        $donor3 = ['type' => 'Development Agencies'];
        $donor4 = ['type' => 'Citizen Initiatives'];
        $donor5 = ['type' => 'Corporates'];

        DonorType::create($donor1);
        DonorType::create($donor2);
        DonorType::create($donor3);
        DonorType::create($donor4);
        DonorType::create($donor5);
    }
}
