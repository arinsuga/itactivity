<?php

use Illuminate\Database\Seeder;

class AppUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Reset table
        DB::table('app_user')->delete();

        /** user(superadmin@mail.com) */
        //app(cms)->user(superadmin@mail.com)
        DB::table('app_user')->insert([
            'app_id' => 1,  //app(tsk)
            'user_id' => 1, //user(superadmin@mail.com)
        ]);

        /** user(postadmin@mail.com) */
        //app(cms)->user(postadmin@mail.com)
        DB::table('app_user')->insert([
            'app_id' => 1,  //app(tsk)
            'user_id' => 2, //user(postadmin@mail.com)
        ]);

        /** user(reportadmin@mail.com) */
        //app(cms)->user(reportadmin@mail.com)
        DB::table('app_user')->insert([
            'app_id' => 1,  //app(tsk)
            'user_id' => 3, //user(reportadmin@mail.com)
        ]);

    } //end method
} //end class
