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

        //Reset table
        DB::table('roles')->delete();
        //app->cms->1
        $this->call('RolesCmsTableSeeder');
        
    } //end method
} //end class
