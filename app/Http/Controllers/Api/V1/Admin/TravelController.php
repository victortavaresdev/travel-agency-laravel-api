<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Models\Travel;
use App\DTO\Travel\TravelDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Travel\TravelRequest;
use App\Http\Resources\Travel\TravelResource;
use App\Services\Admin\TravelService;

/**
 * @group Admin endpoints
 */
class TravelController extends Controller
{
    public function __construct(protected TravelService $travelService)
    {
    }

    /**
     * POST Travel
     *
     * Create a new Travel.
     *
     * @authenticated
     *
     * @response 201 {"data":{"id":"996a36ca-2693-4901-9c55-7136e68d81d5","name":"New travel","slug":"new-travel","description":"The best travel ever!","number_of_days":"7","number_of_nights":6}}
     * @response 401 {"message":"Unauthenticated"}
     * @response 403 {"message":"Forbidden"}
     * @response 422 {"message":"Validation errors"}
     */
    public function store(TravelRequest $request)
    {
        $dto = TravelDTO::fromRequest($request);
        $travel = $this->travelService->store($dto);

        return new TravelResource($travel);
    }

    /**
     * PUT Travel
     *
     * Updates new Travel.
     *
     * @authenticated
     *
     * @response {"data":{"id":"996a36ca-2693-4901-9c55-7136e68d81d5","name":"New travel updated","slug":"new-travel-updated","description":"The best travel ever!","number_of_days":"7","number_of_nights":6}}
     * @response 401 {"message":"Unauthenticated"}
     * @response 403 {"message":"Forbidden"}
     * @response 404 {"message":"Travel Not Found"}
     * @response 422 {"message":"Validation errors"}
     */
    public function update(Travel $travel, TravelRequest $request)
    {
        $dto = TravelDTO::fromRequest($request);
        $this->travelService->update($travel, $dto);

        return new TravelResource($travel);
    }

    /**
     * DELETE Travel
     *
     * Deletes new Travel.
     *
     * @authenticated
     *
     * @response {}
     * @response 401 {"message":"Unauthenticated"}
     * @response 403 {"message":"Forbidden"}
     * @response 404 {"message":"Travel Not Found"}
     */
    public function destroy(Travel $travel)
    {
        $this->travelService->destroy($travel);
    }
}
