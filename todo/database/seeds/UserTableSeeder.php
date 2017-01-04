<?php

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
        $users =[
        	[
        		'name' => 'Lizzie',
        		'email' => 'ririellelee@gmail.com',
        		'password' =>  bcrypt('1111')
        	],
        	[
        		'name' => 'tester',
        		'email' => 'test@gmail.com',
        		'password' =>  bcrypt('0000')
        	]       
        ];

        foreach ($users as $user) {
        	App\User::create($user);
        }
    }
}
