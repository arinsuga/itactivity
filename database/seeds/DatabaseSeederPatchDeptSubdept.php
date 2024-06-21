<?php

use Illuminate\Database\Seeder;

class DatabaseSeederPatchDeptSubdept extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('DeptTableSeeder');
        $this->call('SubdeptTableSeeder');
        
    }
}
