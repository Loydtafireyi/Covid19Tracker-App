<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Loyd Admin',
        	'email' => 'admin@admin.com',
        	'admin' => 1,
        	'avatar' => 'https://images.pexels.com/photos/1097456/pexels-photo-1097456.jpeg?cs=srgb&dl=person-wearing-red-hoodie-1097456.jpg&fm=jpg',
        	'password' => bcrypt('admin123'),
        ]);
    }
}
