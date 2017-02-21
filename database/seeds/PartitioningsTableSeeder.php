<?php

use Illuminate\Database\Seeder;

class PartitioningsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('partitionings')->insert([
        	'name'=>'ICD-Partitioning',
        	'created_at'=>$now,
        	'updated_at'=>$now,        	
        ]);

        DB::table('partitionings')->insert([
            'name'=>'DWHT-Partitions',
            'created_at'=>$now,
            'updated_at'=>$now,         
        ]);
    }
}
