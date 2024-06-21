<?php

use Illuminate\Database\Seeder;

class RolesCmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //adm
        DB::table('roles')->insert([
            //'id' => 1,
            'app_id' => 1,
            'code' => 'adm',
            'name' => 'Super Admin',
            'description' => 'Role Super Admin memiliki akses ke semua feature aplikasi.',
        ]);

        //post
        DB::table('roles')->insert([
            //'id' => 2,
            'app_id' => 1,
            'code' => 'post',
            'name' => 'Content Poster Admin',
            'description' => 'Role Content Poster hanya memiliki akses untuk memposting content.',
        ]);

        //rpt
        DB::table('roles')->insert([
            //'id' => 3,
            'app_id' => 1,
            'code' => 'rpt',
            'name' => 'Content Reporter',
            'description' => 'Role Content Reporter hanya memiliki akses untuk membuat laporan.',
        ]);
        
    }
}
