<?php

namespace Tests\Feature\Tour;

use App\Models\Travel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TourTest extends TestCase
{
    use RefreshDatabase;

    private Travel $travel;

    protected function setUp(): void
    {
        parent::setUp();

        $this->travel = $this->createTravel();
    }

    public function test_tours_list_by_travel_slug_returns_data_successfully(): void
    {
        // Arrange
        $this->createTour(
            2,
            ['travel_id' => $this->travel->id]
        );

        // Act
        $response = $this
            ->getJson("{$this->travelURI}/{$this->travel->slug}/tours");

        // Assert
        $response
            ->assertStatus(200)
            ->assertJsonCount(2, 'data');
    }

    public function test_tour_price_is_shown_correctly(): void
    {
        // Arrange
        $this->createTour(
            1,
            [
                'travel_id' => $this->travel->id,
                'price' => 150.80,
            ]
        );

        // Act
        $response = $this
            ->getJson("{$this->travelURI}/{$this->travel->slug}/tours");

        // Assert
        $response
            ->assertStatus(200)
            ->assertJsonCount(1, 'data')
            ->assertJsonFragment(['price' => '150.80']);
    }

    public function test_tours_list_returns_pagination_successfully(): void
    {
        // Arrange
        $this->createTour(
            12,
            [
                'travel_id' => $this->travel->id,
            ]
        );

        // Act
        $response = $this
            ->getJson("{$this->travelURI}/{$this->travel->slug}/tours");

        // Assert
        $response
            ->assertStatus(200)
            ->assertJsonCount(10, 'data');
    }

    public function test_tours_list_sorts_by_starting_date_correctly(): void
    {
        // Arrange
        $newTour = $this->createTour(
            1,
            [
                'travel_id' => $this->travel->id,
                'starting_date' => now(),
                'ending_date' => now()->addDay(1),
            ]
        );

        $olderTour = $this->createTour(
            1,
            [
                'travel_id' => $this->travel->id,
                'starting_date' => now()->addDay(2),
                'ending_date' => now()->addDay(3),
            ]
        );

        // Act
        $response = $this
            ->getJson("{$this->travelURI}/{$this->travel->slug}/tours");

        // Assert
        $response
            ->assertStatus(200)
            ->assertJsonPath('data.0.id', $newTour[0]['id'])
            ->assertJsonPath('data.1.id', $olderTour[0]['id']);
    }

    public function test_tours_list_sorts_by_price_correctly(): void
    {
        // Arrange
        $cheapTour = $this->createTour(
            1,
            [
                'travel_id' => $this->travel->id,
                'price' => 200,
            ]
        );

        $mediumTour = $this->createTour(
            1,
            [
                'travel_id' => $this->travel->id,
                'price' => 500,
            ]
        );

        $expensiveTour = $this->createTour(
            1,
            [
                'travel_id' => $this->travel->id,
                'price' => 1000,
            ]
        );

        // Act
        $response = $this
            ->getJson("{$this->travelURI}/{$this->travel->slug}/tours?sortBy=price&sortOrder=asc");

        // Assert
        $response
            ->assertStatus(200)
            ->assertJsonPath('data.0.id', $cheapTour[0]['id'])
            ->assertJsonPath('data.1.id', $mediumTour[0]['id'])
            ->assertJsonPath('data.2.id', $expensiveTour[0]['id']);
    }

    public function test_tours_list_filters_by_price_correctly(): void
    {
        // Arrange
        $cheapTour = $this->createTour(
            1,
            [
                'travel_id' => $this->travel->id,
                'price' => 100,
            ]
        );

        $mediumTour = $this->createTour(
            1,
            [
                'travel_id' => $this->travel->id,
                'price' => 500,
            ]
        );

        $expensiveTour = $this->createTour(
            1,
            [
                'travel_id' => $this->travel->id,
                'price' => 1700,
            ]
        );

        // Act
        $response = $this
            ->getJson("{$this->travelURI}/{$this->travel->slug}/tours?priceFrom=100&priceTo=500");

        // Assert
        $response
            ->assertStatus(200)
            ->assertJsonCount(2, 'data')
            ->assertJsonFragment(['id' => $cheapTour[0]['id']])
            ->assertJsonFragment(['id' => $mediumTour[0]['id']])
            ->assertJsonMissing(['id' => $expensiveTour[0]['id']]);
    }

    public function test_tours_list_with_incorrect_query_returns_validation_errors(): void
    {
        // Arrange

        // Act
        $response1 = $this
            ->getJson("{$this->travelURI}/{$this->travel->slug}/tours?dateFrom=something&dateTo=wrong");

        $response2 = $this
            ->getJson("{$this->travelURI}/{$this->travel->slug}/tours?priceFrom=something&priceTo=wrong");

        $response3 = $this
            ->getJson("{$this->travelURI}/{$this->travel->slug}/tours?sortBy=something&sortOrder=wrong");

        // Assert
        $response1
            ->assertStatus(422);

        $response2
            ->assertStatus(422);

        $response3
            ->assertStatus(422);
    }
}
