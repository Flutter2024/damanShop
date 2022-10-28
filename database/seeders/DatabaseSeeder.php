<?php

namespace Database\Seeders;


use App\Models\Manager;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $managers = [
            [
                'name' => "Manager 1", // Michael Smith
                'email' => "manager@demo.com",
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
                'avatar_url' => 'manager_avatars/1.jpeg',
                'mobile'=>"+918469435337",
                "mobile_verified"=>true
            ],
         
        ];

    }
}
