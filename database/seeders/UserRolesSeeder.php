<?php

namespace Database\Seeders;

use App\Models\UserRoles;
use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserRoles::create([
            'role' => 'Manager'
        ]);
        UserRoles::create([
            'role' => 'User'
        ]);
    }
}
