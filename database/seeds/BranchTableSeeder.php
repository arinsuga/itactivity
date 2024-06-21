<?php

use Illuminate\Database\Seeder;

class BranchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Table reset
        DB::table("branch")->delete();
        DB::table("branch")->insert([ "id" => null, "code" => "ACCENT", "name" => "Accent", "displayname" => "Accent", "description" => "Accent", "numsort" => 10, "status" => 1, ]); 
        DB::table("branch")->insert([ "id" => null, "code" => "BALI", "name" => "Bali", "displayname" => "Bali", "description" => "Bali", "numsort" => 20, "status" => 1, ]); 
        DB::table("branch")->insert([ "id" => null, "code" => "GCH", "name" => "Graha Cipta Hadiprana", "displayname" => "Graha Cipta Hadiprana", "description" => "Graha Cipta Hadiprana", "numsort" => 30, "status" => 1, ]); 
                                

    }
}
