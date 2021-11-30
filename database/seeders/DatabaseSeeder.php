<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
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
        // \App\Models\User::factory(10)->create();
        $users = collect([
            [
                'username' => 'admin2',
                'name' => "Raphael Adhimas",
                'password' => bcrypt('20331871')
            ],
            [
                'username' => 'admin',
                'name' => "Pak Yogi",
                'password' => bcrypt('20331871')
            ],
        ]);

        foreach ($users as $user ) {
            User::create($user);
        }

    }
}
