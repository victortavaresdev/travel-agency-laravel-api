<?php

namespace Tests\Feature\Admin;

use App\Models\Role;
use App\Models\Tour;
use App\Models\Travel;
use App\Models\User;
use Database\Seeders\RoleSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminTest extends TestCase
{
    use RefreshDatabase;

    private User $user;
    private Travel $travel;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = $this->createUser();
        $this->travel = $this->createTravel();
        $this->seed(RoleSeeder::class);
    }

    public function test_admin_user_can_create_travel_successfully(): void
    {
        // Arrange
        $this->user->roles()->attach(Role::where('name', 'admin')->value('id'));

        $travel = Travel::factory()->raw();

        // Act
        $response = $this
            ->actingAs($this->user)
            ->postJson("{$this->adminURI}/travels", $travel);

        // Assert
        $response
            ->assertStatus(201)
            ->assertJsonCount(6, 'data');
    }

    public function test_admin_user_can_create_tour_successfully(): void
    {
        // Arrange
        $this->user->roles()->attach(Role::where('name', 'admin')->value('id'));

        $tour = Tour::factory()->raw();

        // Act
        $response = $this
            ->actingAs($this->user)
            ->postJson("{$this->adminURI}/travels/{$this->travel->id}/tours", $tour);

        // Assert
        $response
            ->assertStatus(201)
            ->assertJsonCount(5, 'data');
    }

    public function test_admin_user_can_update_travel_successfully(): void
    {
        // Arrange
        $this->user->roles()->attach(Role::where('name', 'admin')->value('id'));

        $updatedTravel = Travel::factory()->raw();

        // Act
        $response = $this
            ->actingAs($this->user)
            ->putJson("{$this->adminURI}/travels/{$this->travel->id}/update", $updatedTravel);

        // Assert
        $response
            ->assertStatus(200)
            ->assertJsonCount(6, 'data');
    }

    public function test_editor_user_can_update_travel_successfully(): void
    {
        // Arrange
        $this->user->roles()->attach(Role::where('name', 'editor')->value('id'));

        $updatedTravel = Travel::factory()->raw();

        // Act
        $response = $this
            ->actingAs($this->user)
            ->putJson("{$this->adminURI}/travels/{$this->travel->id}/update", $updatedTravel);

        // Assert
        $response
            ->assertStatus(200)
            ->assertJsonCount(6, 'data');
    }

    public function test_admin_user_can_delete_travel_successfully(): void
    {
        // Arrange
        $this->user->roles()->attach(Role::where('name', 'admin')->value('id'));

        // Act
        $response = $this
            ->actingAs($this->user)
            ->deleteJson("{$this->adminURI}/travels/{$this->travel->id}/delete");

        // Assert
        $response
            ->assertStatus(200);

        $this
            ->assertDatabaseEmpty('travels');
    }

    public function test_non_admin_user_cannot_create_travel(): void
    {
        // Arrange
        $this->user->roles()->attach(Role::where('name', 'editor')->value('id'));

        // Act
        $response = $this
            ->actingAs($this->user)
            ->postJson("{$this->adminURI}/travels");

        // Assert
        $response
            ->assertStatus(403);
    }

    public function test_non_admin_user_cannot_create_tour(): void
    {
        // Arrange
        $this->user->roles()->attach(Role::where('name', 'editor')->value('id'));

        $tour = Tour::factory()->raw();

        // Act
        $response = $this
            ->actingAs($this->user)
            ->postJson("{$this->adminURI}/travels/{$this->travel->id}/tours", $tour);

        // Assert
        $response
            ->assertStatus(403);
    }

    public function test_non_admin_user_cannot_delete_travel(): void
    {
        // Arrange
        $this->user->roles()->attach(Role::where('name', 'editor')->value('id'));

        // Act
        $response = $this
            ->actingAs($this->user)
            ->deleteJson("{$this->adminURI}/travels/{$this->travel->id}/delete");

        // Assert
        $response
            ->assertStatus(403);
    }

    public function test_public_user_cannot_access_travel_admin_endpoint(): void
    {
        // Arrange

        // Act
        $response = $this
            ->postJson("{$this->adminURI}/travels");

        // Assert
        $response
            ->assertStatus(401);
    }

    public function test_public_user_cannot_access_tour_admin_endpoint(): void
    {
        // Arrange

        // Act
        $response = $this
            ->postJson("{$this->adminURI}/travels/{$this->travel->id}/tours");

        // Assert
        $response
            ->assertStatus(401);
    }
}
