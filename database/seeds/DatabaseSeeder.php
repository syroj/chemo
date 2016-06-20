<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'key'=>str_random(7),
        	'name'=>'admin',
        	'username'=>'admin',
        	'email'=>'admin@website.com',
        	'password'=>bcrypt('rahasia'),
        	'rule'=>'admin',
        	]);
    }
}
