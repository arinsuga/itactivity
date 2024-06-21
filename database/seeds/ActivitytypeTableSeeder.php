<?php

use Illuminate\Database\Seeder;

class ActivitytypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Table reset
        DB::table("activitytype")->delete();
        DB::table("activitytype")->insert([ "id" => 1, "name" => "SUPPORT", "description" => "Support Hardware, Software/Aplikasi, Jaringan, Troubleshoot, Request User", "image" => null, "numsort" => 10, "status" => 1 ]);  
        DB::table("activitytype")->insert([ "id" => 2, "name" => "MAINTENANCE ", "description" => "Perawatan Hardware, Software/Aplikasi dan Jaringan", "image" => null, "numsort" => 20, "status" => 1 ]);  
        DB::table("activitytype")->insert([ "id" => 3, "name" => "PROJECT ", "description" => "Project Hardware, Software/Aplikasi dan Networking", "image" => null, "numsort" => 30, "status" => 1 ]);  

    } //end method
} //end class
