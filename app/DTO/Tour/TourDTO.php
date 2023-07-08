<?php

namespace App\DTO\Tour;

use App\Http\Requests\Tour\TourRequest;

class TourDTO
{
    public function __construct(
        public readonly string $name,
        public readonly string $starting_date,
        public readonly string $ending_date,
        public readonly int $price,
    ) {
    }

    public static function fromRequest(TourRequest $request): self
    {
        return new self(
            name: $request->validated('name'),
            starting_date: $request->validated('starting_date'),
            ending_date: $request->validated('ending_date'),
            price: $request->validated('price'),
        );
    }
}
