<?php

namespace App\Services;

use App\Http\Requests\Tour\ToursListRequest;
use App\Models\Travel;

class TourService
{
    public function index(Travel $travel, ToursListRequest $request)
    {
        $tours = $travel->tours()
            ->when($request->priceFrom, function ($query) use ($request) {
                $query->where('price', '>=', $request->priceFrom * 100);
            })
            ->when($request->priceTo, function ($query) use ($request) {
                $query->where('price', '<=', $request->priceTo * 100);
            })
            ->when($request->dateFrom, function ($query) use ($request) {
                $query->where('starting_date', '>=', $request->dateFrom);
            })
            ->when($request->dateTo, function ($query) use ($request) {
                $query->where('starting_date', '<=', $request->dateTo);
            })
            ->when($request->sortBy && $request->sortOrder, function ($query) use ($request) {
                $query->orderBy($request->sortBy, $request->sortOrder);
            })
            ->orderBy('starting_date')
            ->paginate(10);

        return $tours;
    }
}
