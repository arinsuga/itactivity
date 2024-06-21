<?php

use Illuminate\Database\Seeder;

class RoleUserCmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /* superadmin@mail.com  */
        //app(cms)->role(cms-adm)->user(superadmin@mail.com)
        DB::table('role_user')->insert([
            'app_id' => 1, //app(cms)
            'role_id' => 1, //role(cms-adm)
            'user_id' => 1, //user(superadmin@mail.com)
        ]);

        /* postadmin@mail.com  */
        //app(cms)->role(cms-post)->user(postadmin@mail.com)
        DB::table('role_user')->insert([
            'app_id' => 1, //app(cms)
            'role_id' => 2, //role(cms-post)
            'user_id' => 2, //user(postadmin@mail.com)
        ]);

        /* repostadmin@mail.com  */
        //app(cms)->role(cms-rpt)->user(reportadmin@mail.com)
        DB::table('role_user')->insert([
            'app_id' => 1, //app(cms)
            'role_id' => 3, //role(cms-rpt)
            'user_id' => 3, //user(reportadmin@mail.com)
        ]);

    }
}
