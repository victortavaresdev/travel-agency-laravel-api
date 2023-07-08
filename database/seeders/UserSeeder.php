<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create()->roles()->attach('7fb0b924-0f00-4cc6-bc4f-b7907fa5229f');
        User::factory()->create()->roles()->attach('76d1e59e-a4a5-4cc9-86cb-72ab24573442');
    }
}
