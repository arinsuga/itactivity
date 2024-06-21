<?php

use Illuminate\Database\Seeder;
use Arins\Facades\ConvertDate as Convert;

class NewssTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Reset table
        DB::table('newss')->delete();

        DB::table('newss')->insert([
            'id' => 1,
            'name' => 'News Title',
            'description' => 'News description',
            'image' => 'news/news.jpeg',
            'link' => '',
            'date' => Convert::strDatetimeToDate('22/01/2021 00:00:00'),
        ]);

    } //end method
} //end class
