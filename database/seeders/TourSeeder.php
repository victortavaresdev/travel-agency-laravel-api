<?php

namespace Database\Seeders;

use App\Models\Tour;
use App\Models\Travel;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    public function run(): void
    {
        Tour::factory(12)->create([
            'travel_id' =>  Travel::factory()->create(['is_public' => true])->id
        ]);
    }
}
