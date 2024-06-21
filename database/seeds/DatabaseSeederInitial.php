<?php

use Illuminate\Database\Seeder;

class DatabaseSeederInitial extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

		// $this->call('UsersTableSeeder');
        // factory(App\User::class, 5)->create();

        $this->call('UsersTableSeeder');
        $this->call('AppsTableSeeder');
        $this->call('AppUserTableSeeder');
        $this->call('RolesTableSeeder');
        $this->call('RoleUserTableSeeder');

        $this->call('ActivitytypeTableSeeder');
        $this->call('ActivitysubtypeTableSeeder');
        $this->call('ActivitystatusTableSeeder');

        $this->call('TasktypeTableSeeder');
        $this->call('Tasksubtype1TableSeeder');
        $this->call('Tasksubtype2TableSeeder');

        $this->call('EmpstatusTableSeeder');
        $this->call('EmptypeTableSeeder');
        $this->call('InactivetypeTableSeeder');
        $this->call('JobTableSeeder');
        $this->call('SuperiorTableSeeder');
        $this->call('BranchTableSeeder');
        $this->call('DeptTableSeeder');
        $this->call('SubdeptTableSeeder');
        $this->call('BizunitTableSeeder');
        $this->call('LevelTableSeeder');
        
        $this->call('GenderTableSeeder');
        $this->call('BloodtypeTableSeeder');
        $this->call('ReligionTableSeeder');
        $this->call('NationalityTableSeeder');
        $this->call('EducationTableSeeder');
        
        // $this->call('ProducttypesTableSeeder');
        // $this->call('ProductsTableSeeder');
        // $this->call('EventsTableSeeder');
        // $this->call('NewssTableSeeder');

   }
}
