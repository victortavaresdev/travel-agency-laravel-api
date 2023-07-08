<?php

namespace App\Services\Admin;

use App\Models\Travel;
use App\DTO\Travel\TravelDTO;

class TravelService
{
    public function store(TravelDTO $dto): Travel
    {
        $travel = Travel::create((array)$dto);

        return $travel;
    }

    public function update(Travel $travel, TravelDTO $dto): void
    {
        $travel->update((array)$dto);
    }

    public function destroy(Travel $travel): void
    {
        $travel->delete();
    }
}
