<?php

namespace App\Services;

use App\Models\Travel;

class TravelService
{
    public function index()
    {
        $travels = Travel::where('is_public', true)->paginate(10);

        return $travels;
    }
}
