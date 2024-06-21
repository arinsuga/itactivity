<?php

use Illuminate\Database\Seeder;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Reset table
        DB::table('education')->delete();

        DB::table('education')->insert([
			//'id' => 1,
			'code' => 'SMA',
			'name' => 'SMA',
			'displayname' => 'SMA',
			'description' => 'Sekolah Menengah Atas',
			'numsort' => 10,
			'status' => 1,
			//'created_at' => null,
			//'updated_at' => null,
        ]);

        DB::table('education')->insert([
			//'id' => 1,
			'code' => 'SMK',
			'name' => 'SMK',
			'displayname' => 'SMK',
			'description' => 'Sekolah Menengah Kejuruan',
			'numsort' => 20,
			'status' => 1,
			//'created_at' => null,
			//'updated_at' => null,
        ]);

        DB::table('education')->insert([
			//'id' => 1,
			'code' => 'D1',
			'name' => 'D1',
			'displayname' => 'D1',
			'description' => 'Ahli Pratama',
			'numsort' => 30,
			'status' => 1,
			//'created_at' => null,
			//'updated_at' => null,
        ]);

        DB::table('education')->insert([
			//'id' => 1,
			'code' => 'D2',
			'name' => 'D2',
			'displayname' => 'D2',
			'description' => 'Ahli Muda',
			'numsort' => 40,
			'status' => 1,
			//'created_at' => null,
			//'updated_at' => null,
        ]);

        DB::table('education')->insert([
			//'id' => 1,
			'code' => 'D3',
			'name' => 'D3',
			'displayname' => 'D3',
			'description' => 'Ahli Madya',
			'numsort' => 50,
			'status' => 1,
			//'created_at' => null,
			//'updated_at' => null,
        ]);

        DB::table('education')->insert([
			//'id' => 1,
			'code' => 'S1',
			'name' => 'S1',
			'displayname' => 'S1',
			'description' => 'Sarjana',
			'numsort' => 60,
			'status' => 1,
			//'created_at' => null,
			//'updated_at' => null,
        ]);

        DB::table('education')->insert([
			//'id' => 1,
			'code' => 'S2',
			'name' => 'S2',
			'displayname' => 'S2',
			'description' => 'Magister',
			'numsort' => 70,
			'status' => 1,
			//'created_at' => null,
			//'updated_at' => null,
        ]);

        DB::table('education')->insert([
			//'id' => 1,
			'code' => 'S3',
			'name' => 'S3',
			'displayname' => 'S3',
			'description' => 'Doctor',
			'numsort' => 80,
			'status' => 1,
			//'created_at' => null,
			//'updated_at' => null,
        ]);

    }
}
