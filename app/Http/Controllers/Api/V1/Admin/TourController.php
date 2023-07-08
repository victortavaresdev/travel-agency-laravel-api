<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Models\Travel;
use App\DTO\Tour\TourDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tour\TourRequest;
use App\Http\Resources\Tour\TourResource;
use App\Services\Admin\TourService;

/**
 * @group Admin endpoints
 */
class TourController extends Controller
{
    public function __construct(protected TourService $tourService)
    {
    }

    /**
     * POST Tour
     *
     * Create a new Tour.
     *
     * @authenticated
     *
     * @response 201 {"data":{"id":"996a381e-64ca-46ba-8b51-f8279d5529ad","name":"New tour","starting_date":"2023-06-15","ending_date":"2023-06-20","price":"99.99"}}
     * @response 401 {"message":"Unauthenticated"}
     * @response 403 {"message":"Forbidden"}
     * @response 404 {"message":"Resource Not Found"}
     * @response 422 {"message":"Validation errors"}
     */
    public function store(Travel $travel, TourRequest $request)
    {
        $dto = TourDTO::fromRequest($request);
        $tour = $this->tourService->store($travel, $dto);

        return new TourResource($tour);
    }
}
