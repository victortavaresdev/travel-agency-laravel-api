<?php

namespace Database\Seeders;

use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create(['id' => '7fb0b924-0f00-4cc6-bc4f-b7907fa5229f', 'name' => 'admin']);
        Role::create(['id' => '76d1e59e-a4a5-4cc9-86cb-72ab24573442', 'name' => 'editor']);
    }
}
