<?php

use Illuminate\Database\Seeder;

class ActivitystatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Table reset
        DB::table("activitystatus")->delete();
        DB::table("activitystatus")->insert([ "id" => 1, "name" => "Open", "description" => "Open", "image" => null, "numsort" => 10, "status" => 1 ]);  
        DB::table("activitystatus")->insert([ "id" => 2, "name" => "Close", "description" => "Close", "image" => null, "numsort" => 20, "status" => 1 ]);  
        DB::table("activitystatus")->insert([ "id" => 3, "name" => "Pending", "description" => "Pending", "image" => null, "numsort" => 30, "status" => 1 ]);  
        DB::table("activitystatus")->insert([ "id" => 4, "name" => "Cancel", "description" => "Cancel", "image" => null, "numsort" => 40, "status" => 1 ]);  
    }
}
