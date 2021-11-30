<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
