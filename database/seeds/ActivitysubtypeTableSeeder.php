<?php

use Illuminate\Database\Seeder;

class ActivitysubtypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Table reset
        DB::table("activitysubtype")->delete();
        DB::table("activitysubtype")->insert([ "id" => 1, "activitytype_id" => 1, "name" => "Request", "description" => "Request", "image" => null, "numsort" => 10, "status" => 1 ]);   
        DB::table("activitysubtype")->insert([ "id" => 2, "activitytype_id" => 1, "name" => "Incident", "description" => "Incident", "image" => null, "numsort" => 20, "status" => 1 ]);   
        DB::table("activitysubtype")->insert([ "id" => 3, "activitytype_id" => 2, "name" => "Reguler", "description" => "Reguler", "image" => null, "numsort" => 30, "status" => 1 ]);   
        DB::table("activitysubtype")->insert([ "id" => 4, "activitytype_id" => 2, "name" => "Request", "description" => "Request", "image" => null, "numsort" => 40, "status" => 1 ]);   
        DB::table("activitysubtype")->insert([ "id" => 5, "activitytype_id" => 2, "name" => "Incident", "description" => "Incident", "image" => null, "numsort" => 50, "status" => 1 ]);   
                

    }
}
