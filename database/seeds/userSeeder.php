<?php
//namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Mario Pacheco',
        	'email' => 'roland350under@gmail.com',
        	'password' => bcrypt('Halcon19')
        ])->assignRole('admin');

        //User::factory(9)->create();
    }
}
