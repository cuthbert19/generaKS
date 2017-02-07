<?php

use Illuminate\Database\Seeder;

class InterfacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('interfaces')->insert([
        	'name'=>'eth0',
        	'pcislot'=>'0000:01:00.0',
        	'linkstatus'=>true,
        	'isbondmaster'=>false,
        	'bondslave'=>'bond0',
        	'host_id'=>generaKS\Host::all()->random()->id,
        	'created_at'=>$now,
        	'updated_at'=>$now,
        ]);
    }
}
