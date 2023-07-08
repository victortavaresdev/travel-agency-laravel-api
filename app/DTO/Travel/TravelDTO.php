<?php

namespace App\DTO\Travel;

use App\Http\Requests\Travel\TravelRequest;

class TravelDTO
{
    public function __construct(
        public readonly bool $is_public,
        public readonly string $name,
        public readonly string $description,
        public readonly int $number_of_days,
    ) {
    }

    public static function fromRequest(TravelRequest $request): self
    {
        return new self(
            is_public: $request->validated('is_public'),
            name: $request->validated('name'),
            description: $request->validated('description'),
            number_of_days: $request->validated('number_of_days'),
        );
    }
}
