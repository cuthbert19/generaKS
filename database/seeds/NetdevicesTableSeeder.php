<?php

use Illuminate\Database\Seeder;

class NetdevicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('netdevices')->insert([
            'name'=>'bond0',
            'pcislot'=>'none',
            'linkstatus'=>true,
            'isbondmaster'=>true,
            'bondslave'=>0,
            'host_id'=>'1',
            // 'host_id'=>generaKS\Host::all()->random()->id,
            'created_at'=>$now,
            'updated_at'=>$now,
            ]);

        DB::table('netdevices')->insert([
        	'name'=>'eth0',
        	'pcislot'=>'0000:01:00.0',
        	'linkstatus'=>true,
        	'isbondmaster'=>false,
        	'bondslave'=> 1,
        	// 'host_id'=>generaKS\Host::all()->random()->id,
            'host_id'=>'1',
        	'created_at'=>$now,
        	'updated_at'=>$now,
            ]);

        DB::table('netdevices')->insert([
            'name'=>'eth1',
            'pcislot'=>'0000:01:00.1',
            'linkstatus'=>false,
            'isbondmaster'=>false,
            'bondslave'=> 0,
            // 'host_id'=>generaKS\Host::all()->random()->id,
            'host_id'=>'1',
            'created_at'=>$now,
            'updated_at'=>$now,
            ]);
    }
}
