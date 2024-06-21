<?php

use Illuminate\Database\Seeder;
use Arins\Facades\ConvertDate as Convert;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Reset table
        DB::table('events')->delete();

        DB::table('events')->insert([
            'id' => 1,
            'name' => 'New Year 2021',
            'description' => 'Events description',
            'image' => 'events/event1.png',
            'link' => '#',
            'date' => Convert::strDatetimeToDate('01/01/2021 00:00:01'),
        ]);


    } //end method
} //end class
