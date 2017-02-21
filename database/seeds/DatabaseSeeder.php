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
        // $this->call(UsersTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(PartitioningsTableSeeder::class);
        $this->call(DiskobjectsTableSeeder::class);
        $this->call(HostsTableSeeder::class);
        $this->call(NetdevicesTableSeeder::class);
    }
}
