<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Reset table
        DB::table('role_user')->delete();
        //app->cms
        $this->call('RoleUserCmsTableSeeder');

    } //end method
} //end class
