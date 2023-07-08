<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Travel\TravelResource;
use App\Services\TravelService;

/**
 * @group Public endpoints
 */
class TravelController extends Controller
{
    public function __construct(protected TravelService $travelService)
    {
    }

    /**
     * GET Travels
     *
     * Returns paginated list of travels.
     *
     * @queryParam page integer Page number. Example: 1
     *
     * @response {"data":[{"id":"9958e389-5edf-48eb-8ecd-e058985cf3ce","name":"First travel","slug":"first-travel","description":"Great offer!","number_of_days":5,"number_of_nights":4},{"id":"99643482-4ea8-435e-b7da-e18cbde3d3c7","name":"New travel","slug":"new-travel","description":"The best journey ever!","number_of_days":3,"number_of_nights":2}],"links":{"first":"http://travel-api.test/api/v1/travels?page=1","last":"http://travel-api.test/api/v1/travels?page=1","prev":null,"next":null},"meta":{"current_page":1,"from":1,"last_page":1,"links":[{"url":null,"label":"&laquo; Previous","active":false},{"url":"http://travel-api.test/api/v1/travels?page=1","label":"1","active":true},{"url":null,"label":"Next &raquo;","active":false}],"path":"http://travel-api.test/api/v1/travels","per_page":15,"to":6,"total":6}}
     */
    public function index()
    {
        $travels = $this->travelService->index();

        return TravelResource::collection($travels);
    }
}
