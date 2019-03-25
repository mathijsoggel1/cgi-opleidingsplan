<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Mathijs',
            'email'=> 'mathijs.oggel@cgi.com',
            'password' => bcrypt('test12'),
        ]);
         DB::table('users')->insert([
            'name' => 'Roel',
            'email'=> 'roel.donker@cgi.com',
            'password' => bcrypt('test12'),
        ]);
         DB::table('users')->insert([
            'name' => 'Kirsty',
            'email'=> 'kirsty.van.beek@cgi.com',
            'password' => bcrypt('test12'),
        ]);
         DB::table('users')->insert([
            'name' => 'CGI-admin',
            'email'=> 'admin@cgi.com',
            'password' => bcrypt('cgiadmin'),
        ]);
    }
}
