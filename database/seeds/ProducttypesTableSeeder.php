<?php

use Illuminate\Database\Seeder;

class ProducttypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Reset table
        DB::table('producttypes')->delete();

        DB::table('producttypes')->insert([
            'id' => 1,
            'name' => 'PRODUCT TYPE 1',
            'description' => 'Tipe produk 1',
        ]);

        DB::table('producttypes')->insert([
            'id' => 2,
            'name' => 'PRODUCT TYPE 2',
            'description' => 'Tipe produk 2',
        ]);

        DB::table('producttypes')->insert([
            'id' => 3,
            'name' => 'PRODUCT TYPE 3',
            'description' => 'Tipe produk 3',
        ]);

        DB::table('producttypes')->insert([
            'id' => 4,
            'name' => 'PRODUCT 4',
            'description' => 'Tipe produk 4',
        ]);

    } //end method
} //end class
