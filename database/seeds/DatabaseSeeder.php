<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(DeathsTableSeeder::class);
        $this->call(TestsTableSeeder::class);
        $this->call(ProvinceTableSeeder::class);
        $this->call(DonorNameTableSeeder::class);
        $this->call(DonortypeTableSeeder::class);
        $this->call(RecoveredTableSeeder::class);
        $this->call(InfectionTableSeeder::class);
    }
}
