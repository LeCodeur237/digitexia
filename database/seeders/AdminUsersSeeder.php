<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUsersSeeder extends Seeder
{
    public function run(): void
    {
        $admins = [
            [
                'name' => 'DigiTexia Admin 1',
                'email' => 'admin1@digitexia.com',
                'phone' => '+237699249894',
            ],
            [
                'name' => 'DigiTexia Admin 2',
                'email' => 'admin2@digitexia.com',
                'phone' => '+237695789726',
            ],
        ];

        foreach ($admins as $admin) {
            User::updateOrCreate(
                ['phone' => $admin['phone']],
                [
                    'name' => $admin['name'],
                    'email' => $admin['email'],
                    'password' => 'digitexia@2026',
                    'email_verified_at' => now(),
                ]
            );
        }
    }
}
