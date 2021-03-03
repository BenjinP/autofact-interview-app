<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        $this->call(RoleTableSeeder::class); //Adding Admin and User roles to the database
        $this->call(UserTableSeeder::class); //Adding some test users
    }
}
