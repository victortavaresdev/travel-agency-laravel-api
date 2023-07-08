<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tour\ToursListRequest;
use App\Http\Resources\Tour\TourResource;
use App\Models\Travel;
use App\Services\TourService;

/**
 * @group Public endpoints
 */
class TourController extends Controller
{
    public function __construct(protected TourService $tourService)
    {
    }

    /**
     * GET Tours
     *
     * Returns paginated list of tours by travel slug.
     *
     * @urlParam travel_slug string Travel slug. Example: "the-travel"
     * 
     * @queryParam page integer Page number. Example: 1
     *
     * @queryParam priceFrom number. Example: "123.45"
     * @queryParam priceTo number. Example: "234.56"
     * @queryParam dateFrom date. Example: "2023-06-01"
     * @queryParam dateTo date. Example: "2023-07-01"
     * @queryParam sortBy string. Example: "price"
     * @queryParam sortOrder string. Example: "asc" or "desc"
     *
     * @response {"data":[{"id":"9958e389-5edf-48eb-8ecd-e058985cf3ce","name":"The Tour 1","starting_date":"2023-06-11","ending_date":"2023-06-16","price":"99.99"},{"id":"9958e389-5edf-48eb-8ecd-e058985cf3c2","name":"The Tour 2","starting_date":"2023-06-14","ending_date":"2023-06-19","price":"119.99"},{"id":"9958e389-5edf-48eb-8ecd-e058985cf3c1","name":"The Tour 3","starting_date":"2023-06-18","ending_date":"2023-06-23","price":"79.99"}],"links":{"first":"http://travel-api.test/api/v1/travels/first-travel/tours?page=1","last":"http://travel-api.test/api/v1/travels/first-travel/tours?page=1","prev":null,"next":null},"meta":{"current_page":1,"from":1,"last_page":1,"links":[{"url":null,"label":"&laquo; Previous","active":false},{"url":"http://travel-api.test/api/v1/travels/first-travel/tours?page=1","label":"1","active":true},{"url":null,"label":"Next &raquo;","active":false}],"path":"http://travel-api.test/api/v1/travels/first-travel/tours","per_page":15,"to":3,"total":3}}
     * @response 404 {"message":"Travel_Slug Not Found"}
     * @response 422 {"message":"Validation errors"}
     */
    public function index(Travel $travel, ToursListRequest $request)
    {
        $tours = $this->tourService->index($travel, $request);

        return TourResource::collection($tours);
    }
}
