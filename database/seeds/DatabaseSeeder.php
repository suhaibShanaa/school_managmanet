<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(AdminUserSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);


    }
}
