<?php

use Illuminate\Database\Seeder;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Table reset
        DB::table("gender")->delete();
        DB::table("gender")->insert([ "code" => "LAKI-LAKI", "name" => "Laki-laki", "displayname" => "Laki-laki", "description" => "Laki-laki", "numsort" => 10, "status" => 1, ]); 
        DB::table("gender")->insert([ "code" => "PEREMPUAN", "name" => "Perempuan", "displayname" => "Perempuan", "description" => "Perempuan", "numsort" => 20, "status" => 1, ]); 
        
    }
}
