<?php
use App\Test;
use Illuminate\Database\Seeder;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $test1 = ['province_id' => 1, 'tests' => 3000, 'tests_date' => '19.06.2020'];
        $test2 = ['province_id' => 2, 'tests' => 3000, 'tests_date' => '19.06.2020'];
        $test3 = ['province_id' => 3, 'tests' => 3000, 'tests_date' => '19.06.2020'];
        $test4 = ['province_id' => 4, 'tests' => 3000, 'tests_date' => '19.06.2020'];
        $test5 = ['province_id' => 5, 'tests' => 3000, 'tests_date' => '19.06.2020'];
        $test6 = ['province_id' => 6, 'tests' => 3000, 'tests_date' => '19.06.2020'];
        $test7 = ['province_id' => 7, 'tests' => 3000, 'tests_date' => '19.06.2020'];
        $test8 = ['province_id' => 8, 'tests' => 3000, 'tests_date' => '19.06.2020'];
        $test9 = ['province_id' => 9, 'tests' => 3000, 'tests_date' => '19.06.2020'];
        $test10 = ['province_id' => 10, 'tests' => 3000, 'tests_date' => '19.06.2020'];

        App\Test::create($test1);
        App\Test::create($test2);
        App\Test::create($test3);
        App\Test::create($test4);
        App\Test::create($test5);
        App\Test::create($test6);
        App\Test::create($test7);
        App\Test::create($test8);
        App\Test::create($test9);
        App\Test::create($test10);
    }
}
