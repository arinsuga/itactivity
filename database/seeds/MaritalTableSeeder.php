<?php

use Illuminate\Database\Seeder;

class MaritalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Table reset
        DB::table("marital")->delete();
        DB::table("marital")->insert([ "code" => "LAJANG", "name" => "Lajang", "displayname" => "Lajang", "description" => "Lajang", "numsort" => 10, "status" => 1, ]); 
        DB::table("marital")->insert([ "code" => "MENIKAH", "name" => "Menikah", "displayname" => "Menikah", "description" => "Menikah", "numsort" => 20, "status" => 1, ]); 
        

    }
}
