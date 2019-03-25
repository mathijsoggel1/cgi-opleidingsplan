<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Informatie Analyst',
            'client_id' => '1',
        ]);
         DB::table('roles')->insert([
            'name' => 'Algemeen',
            'client_id' => '4',
        ]);
        DB::table('roles')->insert([
            'name' => 'Tester',
            'client_id' => '1',
        ]);
        DB::table('roles')->insert([
            'name' => 'Aplicatie Consultant',
            'client_id' => '1',
        ]);
       	DB::table('roles')->insert([
            'name' => 'Architect',
            'client_id' => '1',
        ]);
     	DB::table('roles')->insert([
            'name' => 'Developer BI',
            'client_id' => '1',
        ]);
        DB::table('roles')->insert([
            'name' => 'Developer BPM',
            'client_id' => '1',
        ]);
         DB::table('roles')->insert([
            'name' => 'Developer .NET',
            'client_id' => '1',
        ]);
          DB::table('roles')->insert([
            'name' => 'Developer Front-end',
            'client_id' => '1',
        ]);
        DB::table('roles')->insert([
            'name' => 'Scrum Master / Product Owner',
            'client_id' => '1',
        ]);
        DB::table('roles')->insert([
            'name' => 'Security Specialist',
            'client_id' => '1',
        ]);
         DB::table('roles')->insert([
            'name' => 'Developer Integratie',
            'client_id' => '1',
        ]);
    }
}
