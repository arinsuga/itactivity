<?php

use Illuminate\Database\Seeder;

class TasktypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Table reset
        DB::table("tasktype")->delete();
        DB::table("tasktype")->insert([ "id" => 1, "activitytype_id" => 1, "name" => "Domain", "description" => "Domain", "image" => null, "numsort" => 10, "status" => 1 ]); 
        DB::table("tasktype")->insert([ "id" => 2, "activitytype_id" => 1, "name" => "Email", "description" => "Email", "image" => null, "numsort" => 20, "status" => 1 ]); 
        DB::table("tasktype")->insert([ "id" => 3, "activitytype_id" => 1, "name" => "Hardware", "description" => "Hardware", "image" => null, "numsort" => 30, "status" => 1 ]); 
        DB::table("tasktype")->insert([ "id" => 4, "activitytype_id" => 1, "name" => "Login", "description" => "Login", "image" => null, "numsort" => 40, "status" => 1 ]); 
        DB::table("tasktype")->insert([ "id" => 5, "activitytype_id" => 1, "name" => "Network", "description" => "Network", "image" => null, "numsort" => 50, "status" => 1 ]); 
        DB::table("tasktype")->insert([ "id" => 6, "activitytype_id" => 1, "name" => "Others", "description" => "Others", "image" => null, "numsort" => 60, "status" => 1 ]); 
        DB::table("tasktype")->insert([ "id" => 7, "activitytype_id" => 1, "name" => "Printers", "description" => "Printers", "image" => null, "numsort" => 70, "status" => 1 ]); 
        DB::table("tasktype")->insert([ "id" => 8, "activitytype_id" => 1, "name" => "Project Server", "description" => "Project Server", "image" => null, "numsort" => 80, "status" => 1 ]); 
        DB::table("tasktype")->insert([ "id" => 9, "activitytype_id" => 1, "name" => "Server", "description" => "Server", "image" => null, "numsort" => 90, "status" => 1 ]); 
        DB::table("tasktype")->insert([ "id" => 10, "activitytype_id" => 1, "name" => "Software", "description" => "Software", "image" => null, "numsort" => 100, "status" => 1 ]); 
        DB::table("tasktype")->insert([ "id" => 11, "activitytype_id" => 1, "name" => "Timsheet", "description" => "Timsheet", "image" => null, "numsort" => 110, "status" => 1 ]); 
        DB::table("tasktype")->insert([ "id" => 12, "activitytype_id" => 2, "name" => "Server", "description" => "Server", "image" => null, "numsort" => 120, "status" => 1 ]); 
        DB::table("tasktype")->insert([ "id" => 13, "activitytype_id" => 2, "name" => "PC", "description" => "PC", "image" => null, "numsort" => 130, "status" => 1 ]); 
        DB::table("tasktype")->insert([ "id" => 14, "activitytype_id" => 2, "name" => "Printer/Plotter", "description" => "Printer/Plotter", "image" => null, "numsort" => 140, "status" => 1 ]); 
        DB::table("tasktype")->insert([ "id" => 15, "activitytype_id" => 2, "name" => "Networking", "description" => "Networking", "image" => null, "numsort" => 150, "status" => 1 ]); 
        DB::table("tasktype")->insert([ "id" => 16, "activitytype_id" => 3, "name" => "Hardware", "description" => "Hardware", "image" => null, "numsort" => 160, "status" => 1 ]); 
        DB::table("tasktype")->insert([ "id" => 17, "activitytype_id" => 3, "name" => "Software", "description" => "Software", "image" => null, "numsort" => 170, "status" => 1 ]); 
        DB::table("tasktype")->insert([ "id" => 18, "activitytype_id" => 3, "name" => "Network", "description" => "Network", "image" => null, "numsort" => 180, "status" => 1 ]); 
        DB::table("tasktype")->insert([ "id" => 19, "activitytype_id" => 3, "name" => "Arsitek", "description" => "Arsitek", "image" => null, "numsort" => 190, "status" => 1 ]); 
        DB::table("tasktype")->insert([ "id" => 20, "activitytype_id" => 3, "name" => "Interior", "description" => "Interior", "image" => null, "numsort" => 200, "status" => 1 ]); 
        DB::table("tasktype")->insert([ "id" => 21, "activitytype_id" => 3, "name" => "Pelaksana", "description" => "Pelaksana", "image" => null, "numsort" => 210, "status" => 1 ]); 
        DB::table("tasktype")->insert([ "id" => 22, "activitytype_id" => 3, "name" => "DnB", "description" => "DnB", "image" => null, "numsort" => 220, "status" => 1 ]); 
                     
        
    }
}
