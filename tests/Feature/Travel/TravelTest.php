<?php

namespace Tests\Feature;

use App\Models\Travel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TravelTest extends TestCase
{
    use RefreshDatabase;

    public function test_travels_list_returns_paginated_data_successfully(): void
    {
        // Arrange
        Travel::factory(12)->create(
            [
                'is_public' => true
            ]
        );

        // Act
        $response = $this
            ->getJson("{$this->travelURI}");

        // Assert
        $response
            ->assertStatus(200)
            ->assertJsonCount(10, 'data');
    }

    public function test_travels_list_shows_only_public_records(): void
    {
        // Arrange
        Travel::factory()->create(
            [
                'is_public' => true
            ]
        );

        Travel::factory()->create(
            [
                'is_public' => false
            ]
        );

        // Act
        $response = $this
            ->getJson("{$this->travelURI}");

        // Assert
        $response
            ->assertStatus(200)
            ->assertJsonCount(1, 'data');
    }
}
