<?php

use Illuminate\Database\Seeder;

class DiskobjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('diskobjects')->insert([
        	'device'=>'sda',
        	'devicetype'=>'disk',
        	'created_at'=>$now,
        	'updated_at'=>$now,
            'partitioning_id'=>1,      	
        ]);

        DB::table('diskobjects')->insert([
            'device'=>'/boot',
            'devicetype'=>'part',
            'size' => 1024,
            'fstype' => 'ext3',
            'created_at'=>$now,
            'updated_at'=>$now,
            'partitioning_id'=>1,       
        ]);

        DB::table('diskobjects')->insert([
            'device'=>'vg00',
            'devicetype'=>'vg',
            'size' => '4096',
            'created_at'=>$now,
            'updated_at'=>$now,
            'partitioning_id'=>1,       
        ]);
    }
}
