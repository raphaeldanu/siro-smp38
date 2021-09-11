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
                'username' => 'admin',
                'name' => "Raphael Adhimas",
                'password' => bcrypt('12345')
            ],
            [
                'username' => 'admin2',
                'name' => "Pak Yogi",
                'password' => bcrypt('12345')
            ],
        ]);

        foreach ($users as $user ) {
            User::create($user);
        }
    }
}
