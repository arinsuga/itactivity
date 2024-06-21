<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Reset table
        DB::table('products')->delete();

        DB::table('products')->insert([
            'id' => 1,
            'producttype_id' => 1,
            'name' => 'PRODUCT 1',
            'description' => 'Deskripsi product 1',
            'image' => 'products/product1.jpg',
        ]);

        DB::table('products')->insert([
            'id' => 2,
            'producttype_id' => 1,
            'name' => 'PRODUCT 2',
            'description' => 'Deskripsi product 2',
            'image' => 'products/product2.jpg',
        ]);


        DB::table('products')->insert([
            'id' => 3,
            'producttype_id' => 2,
            'name' => 'PRODUCT 3',
            'description' => 'Deskripsi product 3',
            'image' => 'products/product3.jpg',
        ]);

        DB::table('products')->insert([
            'id' => 4,
            'producttype_id' => 2,
            'name' => 'PRODUCT 4',
            'description' => 'Deskripsi product 4',
            'image' => 'products/product4.jpg',
        ]);

        DB::table('products')->insert([
            'id' => 5,
            'producttype_id' => 3,
            'name' => 'PRODUCT 5',
            'description' => 'Deskripsi product 5',
            'image' => 'products/product5.png',
        ]);

        DB::table('products')->insert([
            'id' => 6,
            'producttype_id' => 3,
            'name' => 'PRODUCT 6',
            'description' => 'Deskripsi product 6',
            'image' => 'products/product6.png',
        ]);

        
    } //end method
} //end class
