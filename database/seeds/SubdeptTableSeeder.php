<?php

use Illuminate\Database\Seeder;

class SubdeptTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Table reset
        DB::table("subdept")->delete();
        DB::table("subdept")->insert([ "id" => 1, "dept_id" => 1, "code" => "MAN", "name" => "Manajemen", "displayname" => "Manajemen", "description" => "Manajemen", "numsort" => 10, "status" => 1, ]); 
        DB::table("subdept")->insert([ "id" => 2, "dept_id" => 2, "code" => "DIR", "name" => "Direksi", "displayname" => "Direksi", "description" => "Direksi", "numsort" => 11, "status" => 1, ]); 
        DB::table("subdept")->insert([ "id" => 3, "dept_id" => 3, "code" => "DNB", "name" => "DNB", "displayname" => "DNB", "description" => "DNB", "numsort" => 12, "status" => 1, ]); 
        DB::table("subdept")->insert([ "id" => 4, "dept_id" => 4, "code" => "ART", "name" => "Artwork", "displayname" => "Artwork", "description" => "Artwork", "numsort" => 13, "status" => 1, ]); 
        DB::table("subdept")->insert([ "id" => 5, "dept_id" => 5, "code" => "PLK", "name" => "Pelaksanaan", "displayname" => "Pelaksanaan", "description" => "Pelaksanaan", "numsort" => 14, "status" => 1, ]); 
        DB::table("subdept")->insert([ "id" => 6, "dept_id" => 6, "code" => "KEU", "name" => "Finance - Accounting", "displayname" => "Finance – Accounting", "description" => "Finance – Accounting", "numsort" => 15, "status" => 1, ]); 
        DB::table("subdept")->insert([ "id" => 7, "dept_id" => 7, "code" => "UMUM", "name" => "UMUM", "displayname" => "UMUM", "description" => "UMUM", "numsort" => 16, "status" => 1, ]); 
        DB::table("subdept")->insert([ "id" => 8, "dept_id" => 8, "code" => "HRD", "name" => "HRD", "displayname" => "HRD", "description" => "HRD", "numsort" => 17, "status" => 1, ]); 
        DB::table("subdept")->insert([ "id" => 9, "dept_id" => 9, "code" => "ARS", "name" => "Perencanaan Arsitek - Landscape", "displayname" => "Perencanaan Arsitek - Landscape", "description" => "Perencanaan Arsitek - Landscape", "numsort" => 18, "status" => 1, ]); 
        DB::table("subdept")->insert([ "id" => 10, "dept_id" => 9, "code" => "INT", "name" => "Perencanaan Interior - Special Lighting", "displayname" => "Perencanaan Interior - Special Lighting", "description" => "Perencanaan Interior - Special Lighting", "numsort" => 19, "status" => 1, ]); 
        //DB::table("subdept")->insert([ "id" => 11, "dept_id" => 9, "code" => "LGH", "name" => "perencanaan Lighting", "displayname" => "perencanaan Lighting", "description" => "perencanaan Lighting", "numsort" => 20, "status" => 1, ]); 
        DB::table("subdept")->insert([ "id" => 12, "dept_id" => 10, "code" => "IT", "name" => "IT", "displayname" => "IT", "description" => "IT", "numsort" => 21, "status" => 1, ]); 
        DB::table("subdept")->insert([ "id" => 13, "dept_id" => 10, "code" => "MKT", "name" => "Marketing", "displayname" => "Marketing", "description" => "Marketing", "numsort" => 22, "status" => 1, ]); 
        DB::table("subdept")->insert([ "id" => 14, "dept_id" => 10, "code" => "LOG", "name" => "Logistik", "displayname" => "Logistik", "description" => "Logistik", "numsort" => 23, "status" => 1, ]); 
        DB::table("subdept")->insert([ "id" => 15, "dept_id" => 10, "code" => "QA", "name" => "QA", "displayname" => "QA", "description" => "QA", "numsort" => 24, "status" => 1, ]); 
                                                        

    }
}
