<?php

namespace App\Services\Admin;

use App\DTO\Tour\TourDTO;
use App\Models\Tour;
use App\Models\Travel;

class TourService
{
    public function store(Travel $travel, TourDTO $dto): Tour
    {
        $tour = $travel->tours()->create((array)$dto);

        return $tour;
    }
}
