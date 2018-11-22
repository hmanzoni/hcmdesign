<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::truncate();
    	$user = User::create([
    		'name' => 'Hugo',
    		'email' => 'hugocmdesign@gmail.com',
    		'password' => 'capodeitutticapi'
    	]);

    }
}
