<?php

use Illuminate\Database\Seeder;

class Tasksubtype2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Table reset
        DB::table("tasksubtype2")->delete();
        DB::table("tasksubtype2")->insert([ "id" => 1, "activitytype_id" => 1, "tasktype_id" => 2, "tasksubtype1_id" => 2, "name" => "MS Outlook", "description" => "MS Outlook", "image" => null, "numsort" => 10, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 2, "activitytype_id" => 1, "tasktype_id" => 2, "tasksubtype1_id" => 2, "name" => "Thunderbird", "description" => "Thunderbird", "image" => null, "numsort" => 20, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 3, "activitytype_id" => 1, "tasktype_id" => 2, "tasksubtype1_id" => 2, "name" => "Zimbra", "description" => "Zimbra", "image" => null, "numsort" => 30, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 4, "activitytype_id" => 1, "tasktype_id" => 2, "tasksubtype1_id" => 4, "name" => "Add Email Group", "description" => "Add Email Group", "image" => null, "numsort" => 40, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 5, "activitytype_id" => 1, "tasktype_id" => 2, "tasksubtype1_id" => 4, "name" => "Remove Email Group", "description" => "Remove Email Group", "image" => null, "numsort" => 50, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 6, "activitytype_id" => 1, "tasktype_id" => 3, "tasksubtype1_id" => 7, "name" => "Keyboard", "description" => "Keyboard", "image" => null, "numsort" => 60, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 7, "activitytype_id" => 1, "tasktype_id" => 3, "tasksubtype1_id" => 7, "name" => "Mouse", "description" => "Mouse", "image" => null, "numsort" => 70, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 8, "activitytype_id" => 1, "tasktype_id" => 3, "tasksubtype1_id" => 9, "name" => "Monitor LCD", "description" => "Monitor LCD", "image" => null, "numsort" => 80, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 9, "activitytype_id" => 1, "tasktype_id" => 3, "tasksubtype1_id" => 9, "name" => "Monitor LED", "description" => "Monitor LED", "image" => null, "numsort" => 90, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 10, "activitytype_id" => 1, "tasktype_id" => 3, "tasksubtype1_id" => 9, "name" => "Tube", "description" => "Tube", "image" => null, "numsort" => 100, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 11, "activitytype_id" => 1, "tasktype_id" => 3, "tasksubtype1_id" => 10, "name" => "Motherboard AMD", "description" => "Motherboard AMD", "image" => null, "numsort" => 110, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 12, "activitytype_id" => 1, "tasktype_id" => 3, "tasksubtype1_id" => 10, "name" => "Motherboard Intel", "description" => "Motherboard Intel", "image" => null, "numsort" => 120, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 13, "activitytype_id" => 1, "tasktype_id" => 3, "tasksubtype1_id" => 13, "name" => "Scanner A3", "description" => "Scanner A3", "image" => null, "numsort" => 130, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 14, "activitytype_id" => 1, "tasktype_id" => 3, "tasksubtype1_id" => 13, "name" => "Scanner A4", "description" => "Scanner A4", "image" => null, "numsort" => 140, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 15, "activitytype_id" => 1, "tasktype_id" => 3, "tasksubtype1_id" => 14, "name" => "Ncomputing", "description" => "Ncomputing", "image" => null, "numsort" => 150, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 16, "activitytype_id" => 1, "tasktype_id" => 3, "tasksubtype1_id" => 16, "name" => "Onboard", "description" => "Onboard", "image" => null, "numsort" => 160, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 17, "activitytype_id" => 1, "tasktype_id" => 3, "tasksubtype1_id" => 16, "name" => "PCI Ex", "description" => "PCI Ex", "image" => null, "numsort" => 170, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 18, "activitytype_id" => 1, "tasktype_id" => 4, "tasksubtype1_id" => 18, "name" => "Change Password", "description" => "Change Password", "image" => null, "numsort" => 180, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 19, "activitytype_id" => 1, "tasktype_id" => 4, "tasksubtype1_id" => 18, "name" => "Reset Password", "description" => "Reset Password", "image" => null, "numsort" => 190, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 20, "activitytype_id" => 1, "tasktype_id" => 9, "tasksubtype1_id" => 33, "name" => "Access", "description" => "Access", "image" => null, "numsort" => 200, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 21, "activitytype_id" => 1, "tasktype_id" => 10, "tasksubtype1_id" => 34, "name" => "Fix", "description" => "Fix", "image" => null, "numsort" => 210, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 22, "activitytype_id" => 1, "tasktype_id" => 10, "tasksubtype1_id" => 34, "name" => "Install", "description" => "Install", "image" => null, "numsort" => 220, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 23, "activitytype_id" => 1, "tasktype_id" => 10, "tasksubtype1_id" => 34, "name" => "Uninstall", "description" => "Uninstall", "image" => null, "numsort" => 230, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 24, "activitytype_id" => 1, "tasktype_id" => 10, "tasksubtype1_id" => 34, "name" => "Upgrade", "description" => "Upgrade", "image" => null, "numsort" => 240, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 25, "activitytype_id" => 1, "tasktype_id" => 10, "tasksubtype1_id" => 35, "name" => "Install", "description" => "Install", "image" => null, "numsort" => 250, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 26, "activitytype_id" => 1, "tasktype_id" => 10, "tasksubtype1_id" => 35, "name" => "Uninstall", "description" => "Uninstall", "image" => null, "numsort" => 260, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 27, "activitytype_id" => 1, "tasktype_id" => 10, "tasksubtype1_id" => 36, "name" => "Install", "description" => "Install", "image" => null, "numsort" => 270, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 28, "activitytype_id" => 1, "tasktype_id" => 10, "tasksubtype1_id" => 36, "name" => "Uninstall", "description" => "Uninstall", "image" => null, "numsort" => 280, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 29, "activitytype_id" => 1, "tasktype_id" => 10, "tasksubtype1_id" => 38, "name" => "Install", "description" => "Install", "image" => null, "numsort" => 290, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 30, "activitytype_id" => 1, "tasktype_id" => 10, "tasksubtype1_id" => 38, "name" => "Uninstall", "description" => "Uninstall", "image" => null, "numsort" => 300, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 31, "activitytype_id" => 1, "tasktype_id" => 10, "tasksubtype1_id" => 40, "name" => "Install", "description" => "Install", "image" => null, "numsort" => 310, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 32, "activitytype_id" => 1, "tasktype_id" => 10, "tasksubtype1_id" => 40, "name" => "Uninstall", "description" => "Uninstall", "image" => null, "numsort" => 320, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 33, "activitytype_id" => 1, "tasktype_id" => 10, "tasksubtype1_id" => 40, "name" => "Upgrade", "description" => "Upgrade", "image" => null, "numsort" => 330, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 34, "activitytype_id" => 1, "tasktype_id" => 10, "tasksubtype1_id" => 41, "name" => "Install", "description" => "Install", "image" => null, "numsort" => 340, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 35, "activitytype_id" => 1, "tasktype_id" => 10, "tasksubtype1_id" => 41, "name" => "Uninstall", "description" => "Uninstall", "image" => null, "numsort" => 350, "status" => 1 ]);    
        DB::table("tasksubtype2")->insert([ "id" => 36, "activitytype_id" => 1, "tasktype_id" => 11, "tasksubtype1_id" => 51, "name" => "Login Timesheet", "description" => "Login Timesheet", "image" => null, "numsort" => 360, "status" => 1 ]);    



    }
}
