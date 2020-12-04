<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
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
        User::factory(1)->create([
            "name"  =>"Marco Perafan",
            "email" => "marcoperafan@gmail.com",
            "password" => bcrypt("12345678")
        ]);
        User::factory(5)->create();
        Project ::factory(40)->create();
    }
}