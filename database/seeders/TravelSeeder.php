<?php

namespace Database\Seeders;

use App\Models\Travel;
use Illuminate\Database\Seeder;

class TravelSeeder extends Seeder
{
    public function run(): void
    {
        Travel::factory()->create();
    }
}
