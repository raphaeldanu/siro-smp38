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
                'password' => bcrypt('123456789')
            ],
        ]);

        foreach ($users as $user ) {
            User::create($user);
        }
    }
}
