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

        $students = collect([
            [
                'nisn' => '0040192309',
                'nis' => '389283',
                'nama' => 'Herwindo Satrio'
            ],
            [
                'nisn' => '0041234529',
                'nis' => '389282',
                'nama' => 'David Pambudi'
            ]
        ]);

        foreach ($students as $student) {
            Student::create($student);
        }
    }
}
