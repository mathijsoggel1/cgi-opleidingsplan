<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => 'Transavia',
        ]);

        DB::table('clients')->insert([
            'name' => 'KLM',
        ]);

        DB::table('clients')->insert([
            'name' => 'Schiphol',
        ]);
        DB::table('clients')->insert([
            'name' => 'Joiners',
        ]);
    }
}
