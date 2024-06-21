<?php

use Illuminate\Database\Seeder;

class Tasksubtype1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Table reset
        DB::table("tasksubtype1")->delete();
        DB::table("tasksubtype1")->insert([ "id" => 1, "activitytype_id" => 1, "tasktype_id" => 2, "name" => "Add Email", "description" => "Add Email", "image" => null, "numsort" => 10, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 2, "activitytype_id" => 1, "tasktype_id" => 2, "name" => "Email Client", "description" => "Email Client", "image" => null, "numsort" => 20, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 3, "activitytype_id" => 1, "tasktype_id" => 2, "name" => "Email Client Setting", "description" => "Email Client Setting", "image" => null, "numsort" => 30, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 4, "activitytype_id" => 1, "tasktype_id" => 2, "name" => "Email Group", "description" => "Email Group", "image" => null, "numsort" => 40, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 5, "activitytype_id" => 1, "tasktype_id" => 2, "name" => "Webmail", "description" => "Webmail", "image" => null, "numsort" => 50, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 6, "activitytype_id" => 1, "tasktype_id" => 3, "name" => "harddisk", "description" => "harddisk", "image" => null, "numsort" => 60, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 7, "activitytype_id" => 1, "tasktype_id" => 3, "name" => "I/O Device", "description" => "I/O Device", "image" => null, "numsort" => 70, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 8, "activitytype_id" => 1, "tasktype_id" => 3, "name" => "Memory", "description" => "Memory", "image" => null, "numsort" => 80, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 9, "activitytype_id" => 1, "tasktype_id" => 3, "name" => "Monitor", "description" => "Monitor", "image" => null, "numsort" => 90, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 10, "activitytype_id" => 1, "tasktype_id" => 3, "name" => "Motherboard", "description" => "Motherboard", "image" => null, "numsort" => 100, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 11, "activitytype_id" => 1, "tasktype_id" => 3, "name" => "Power Suplay", "description" => "Power Suplay", "image" => null, "numsort" => 110, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 12, "activitytype_id" => 1, "tasktype_id" => 3, "name" => "Processor", "description" => "Processor", "image" => null, "numsort" => 120, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 13, "activitytype_id" => 1, "tasktype_id" => 3, "name" => "Scanner", "description" => "Scanner", "image" => null, "numsort" => 130, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 14, "activitytype_id" => 1, "tasktype_id" => 3, "name" => "ThinClient", "description" => "ThinClient", "image" => null, "numsort" => 140, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 15, "activitytype_id" => 1, "tasktype_id" => 3, "name" => "UPS", "description" => "UPS", "image" => null, "numsort" => 150, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 16, "activitytype_id" => 1, "tasktype_id" => 3, "name" => "VGA", "description" => "VGA", "image" => null, "numsort" => 160, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 17, "activitytype_id" => 1, "tasktype_id" => 4, "name" => "Login User", "description" => "Login User", "image" => null, "numsort" => 170, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 18, "activitytype_id" => 1, "tasktype_id" => 4, "name" => "Password", "description" => "Password", "image" => null, "numsort" => 180, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 19, "activitytype_id" => 1, "tasktype_id" => 5, "name" => "DHCP", "description" => "DHCP", "image" => null, "numsort" => 190, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 20, "activitytype_id" => 1, "tasktype_id" => 5, "name" => "Firewall", "description" => "Firewall", "image" => null, "numsort" => 200, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 21, "activitytype_id" => 1, "tasktype_id" => 5, "name" => "Internet", "description" => "Internet", "image" => null, "numsort" => 210, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 22, "activitytype_id" => 1, "tasktype_id" => 5, "name" => "LAN", "description" => "LAN", "image" => null, "numsort" => 220, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 23, "activitytype_id" => 1, "tasktype_id" => 5, "name" => "WAN", "description" => "WAN", "image" => null, "numsort" => 230, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 24, "activitytype_id" => 1, "tasktype_id" => 5, "name" => "Wireless", "description" => "Wireless", "image" => null, "numsort" => 240, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 25, "activitytype_id" => 1, "tasktype_id" => 7, "name" => "Plotter", "description" => "Plotter", "image" => null, "numsort" => 250, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 26, "activitytype_id" => 1, "tasktype_id" => 7, "name" => "Print Quality", "description" => "Print Quality", "image" => null, "numsort" => 260, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 27, "activitytype_id" => 1, "tasktype_id" => 7, "name" => "Printer Driver / Software", "description" => "Printer Driver / Software", "image" => null, "numsort" => 270, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 28, "activitytype_id" => 1, "tasktype_id" => 7, "name" => "Printer Setting", "description" => "Printer Setting", "image" => null, "numsort" => 280, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 29, "activitytype_id" => 1, "tasktype_id" => 7, "name" => "Toner / Cartridge", "description" => "Toner / Cartridge", "image" => null, "numsort" => 290, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 30, "activitytype_id" => 1, "tasktype_id" => 8, "name" => "MS Project", "description" => "MS Project", "image" => null, "numsort" => 300, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 31, "activitytype_id" => 1, "tasktype_id" => 8, "name" => "PWA", "description" => "PWA", "image" => null, "numsort" => 310, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 32, "activitytype_id" => 1, "tasktype_id" => 9, "name" => "Cloud Server", "description" => "Cloud Server", "image" => null, "numsort" => 320, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 33, "activitytype_id" => 1, "tasktype_id" => 9, "name" => "File Server", "description" => "File Server", "image" => null, "numsort" => 330, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 34, "activitytype_id" => 1, "tasktype_id" => 10, "name" => "3D Max", "description" => "3D Max", "image" => null, "numsort" => 340, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 35, "activitytype_id" => 1, "tasktype_id" => 10, "name" => "Adobe Reader", "description" => "Adobe Reader", "image" => null, "numsort" => 350, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 36, "activitytype_id" => 1, "tasktype_id" => 10, "name" => "Antivirus", "description" => "Antivirus", "image" => null, "numsort" => 360, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 37, "activitytype_id" => 1, "tasktype_id" => 10, "name" => "Autocad", "description" => "Autocad", "image" => null, "numsort" => 370, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 38, "activitytype_id" => 1, "tasktype_id" => 10, "name" => "Browser", "description" => "Browser", "image" => null, "numsort" => 380, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 39, "activitytype_id" => 1, "tasktype_id" => 10, "name" => "GstarCad", "description" => "GstarCad", "image" => null, "numsort" => 390, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 40, "activitytype_id" => 1, "tasktype_id" => 10, "name" => "MS Office", "description" => "MS Office", "image" => null, "numsort" => 400, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 41, "activitytype_id" => 1, "tasktype_id" => 10, "name" => "MSSQL Server", "description" => "MSSQL Server", "image" => null, "numsort" => 410, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 42, "activitytype_id" => 1, "tasktype_id" => 10, "name" => "Operating System", "description" => "Operating System", "image" => null, "numsort" => 420, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 43, "activitytype_id" => 1, "tasktype_id" => 10, "name" => "Other", "description" => "Other", "image" => null, "numsort" => 430, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 44, "activitytype_id" => 1, "tasktype_id" => 10, "name" => "PDF", "description" => "PDF", "image" => null, "numsort" => 440, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 45, "activitytype_id" => 1, "tasktype_id" => 10, "name" => "Photoshop", "description" => "Photoshop", "image" => null, "numsort" => 450, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 46, "activitytype_id" => 1, "tasktype_id" => 10, "name" => "Remote Server", "description" => "Remote Server", "image" => null, "numsort" => 460, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 47, "activitytype_id" => 1, "tasktype_id" => 10, "name" => "ServiceDesk Plus", "description" => "ServiceDesk Plus", "image" => null, "numsort" => 470, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 48, "activitytype_id" => 1, "tasktype_id" => 10, "name" => "Sketchup", "description" => "Sketchup", "image" => null, "numsort" => 480, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 49, "activitytype_id" => 1, "tasktype_id" => 10, "name" => "Virtual Memory", "description" => "Virtual Memory", "image" => null, "numsort" => 490, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 50, "activitytype_id" => 1, "tasktype_id" => 10, "name" => "VRAY", "description" => "VRAY", "image" => null, "numsort" => 500, "status" => 1 ]);    
        DB::table("tasksubtype1")->insert([ "id" => 51, "activitytype_id" => 1, "tasktype_id" => 11, "name" => "Akses Timesheet", "description" => "Akses Timesheet", "image" => null, "numsort" => 510, "status" => 1 ]);    
        
    }
}
