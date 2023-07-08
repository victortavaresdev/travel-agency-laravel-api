<?php

namespace Tests;

use App\Models\Tour;
use App\Models\Travel;
use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function createUser()
    {
        return User::factory()->create();
    }

    public function createTravel()
    {
        return Travel::factory()->create();
    }

    public function createTour(int $count = 1, array $attributes = [])
    {
        return Tour::factory($count)->create($attributes);
    }
}
