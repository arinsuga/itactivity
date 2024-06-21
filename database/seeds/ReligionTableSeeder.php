<?php

use Illuminate\Database\Seeder;

class ReligionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Reset table
        DB::table("religion")->delete();

        DB::table("religion")->insert([ "code" => "ISL", "name" => "Islam", "displayname" => "Islam", "description" => "Islam", "numsort" => 10, "status" => 1, ]); 
        DB::table("religion")->insert([ "code" => "KRI", "name" => "Kristen", "displayname" => "Kristen", "description" => "Kristen", "numsort" => 20, "status" => 1, ]); 
        DB::table("religion")->insert([ "code" => "KAT", "name" => "Katolik", "displayname" => "Katolik", "description" => "Katolik", "numsort" => 30, "status" => 1, ]); 
        DB::table("religion")->insert([ "code" => "HIN", "name" => "Hindu", "displayname" => "Hindu", "description" => "Hindu", "numsort" => 40, "status" => 1, ]); 
        DB::table("religion")->insert([ "code" => "BUD", "name" => "Buddha", "displayname" => "Buddha", "description" => "Buddha", "numsort" => 50, "status" => 1, ]); 
        DB::table("religion")->insert([ "code" => "KHO", "name" => "Khonghucu", "displayname" => "Khonghucu", "description" => "Khonghucu", "numsort" => 60, "status" => 1, ]); 
        DB::table("religion")->insert([ "code" => "SHI", "name" => "Shinto", "displayname" => "Shinto", "description" => "Shinto", "numsort" => 70, "status" => 1, ]); 
        
    }
}
