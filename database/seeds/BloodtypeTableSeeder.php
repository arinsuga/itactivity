<?php

use Illuminate\Database\Seeder;

class BloodtypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Table reset
        DB::table("bloodtype")->delete();

        DB::table("bloodtype")->insert([ "code" => "A", "name" => "A", "displayname" => "A", "description" => "A", "numsort" => 10, "status" => 1, ]); 
        DB::table("bloodtype")->insert([ "code" => "B", "name" => "B", "displayname" => "B", "description" => "B", "numsort" => 20, "status" => 1, ]); 
        DB::table("bloodtype")->insert([ "code" => "AB", "name" => "AB", "displayname" => "AB", "description" => "AB", "numsort" => 30, "status" => 1, ]); 
        DB::table("bloodtype")->insert([ "code" => "O", "name" => "O", "displayname" => "O", "description" => "O", "numsort" => 40, "status" => 1, ]); 
        
    }
}
