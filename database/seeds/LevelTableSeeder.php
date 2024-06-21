<?php

use Illuminate\Database\Seeder;

class LevelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Table reset
        DB::table("level")->delete();
        DB::table("level")->insert([ "code" => "GOL01", "name" => "Golongan 1", "displayname" => "Golongan 1", "description" => "Golongan 1", "numsort" => 10, "status" => 1, ]); 
        DB::table("level")->insert([ "code" => "GOL02", "name" => "Golongan 2", "displayname" => "Golongan 2", "description" => "Golongan 2", "numsort" => 20, "status" => 1, ]); 
        DB::table("level")->insert([ "code" => "GOL03", "name" => "Golongan 3", "displayname" => "Golongan 3", "description" => "Golongan 3", "numsort" => 30, "status" => 1, ]); 
        DB::table("level")->insert([ "code" => "GOL04", "name" => "Golongan 4", "displayname" => "Golongan 4", "description" => "Golongan 4", "numsort" => 40, "status" => 1, ]); 
        DB::table("level")->insert([ "code" => "GOL05", "name" => "Golongan 5", "displayname" => "Golongan 5", "description" => "Golongan 5", "numsort" => 50, "status" => 1, ]); 
        
    }
}
