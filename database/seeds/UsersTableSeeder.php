<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'roles_id' => '1',
        	'firstname' => 'admin',
        	'lastname' => 'root',
        	'email' => 'admin1@gmail.com',
        	'password' => bcrypt('123456789'),
        	'addresses_id' => '1',
        ]);

        DB::table('users')->insert([
        	'roles_id' => '2',
        	'firstname' => 'cristiano',
        	'lastname' => 'ronaldo',
        	'email' => 'cr7@gmail.com',
        	'password' => bcrypt('123456789'),
        	'addresses_id' => '1',
        ]);

        DB::table('users')->insert([
        	'roles_id' => '3',
        	'firstname' => 'lionel',
        	'lastname' => 'messi',
        	'email' => 'lm10@gmail.com',
        	'password' => bcrypt('123456789'),
        	'addresses_id' => '1',
        ]);

    }
}
