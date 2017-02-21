<?php

use Illuminate\Database\Seeder;

class HostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$now = date('Y-m-d H:i:s');

        DB::table('hosts')->insert([
        	'name'=>'dicm2esertdme17',
        	'device'=>'em4',
        	'macAddress'=>'00:AA:bb:cc:33:66',
        	'project_id'=>generaKS\Project::all()->random()->id,
        	'partitioning_id'=>generaKS\Partitioning::all()->random()->id,
        	'created_at'=>$now,
        	'updated_at'=>$now,
        ]);
        DB::table('hosts')->insert([
            'name'=>'dicm2esertdme18',
            'device'=>'em1',
            'macAddress'=>'00:AA:bb:cc:33:77',
            'project_id'=>generaKS\Project::all()->random()->id,
            'partitioning_id'=>generaKS\Partitioning::all()->random()->id,
            'created_at'=>$now,
            'updated_at'=>$now,
        ]);
    }
}
