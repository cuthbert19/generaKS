<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('projects')->insert([
        	'name'=>'DWH-ICD',
        	'ipVM'=>'192.168.100.1',
        	'subnetVM'=>'192.168.100.0/24',
        	'created_at'=>$now,
        	'updated_at'=>$now,
        ]);
    }
}
