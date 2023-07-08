<?php

namespace App\Http\Resources\Tour;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin \App\Models\Tour
 */
class TourResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'starting_date' => $this->starting_date,
            'ending_date' => $this->ending_date,
            'price' => number_format($this->price, 2),
        ];
    }
}
