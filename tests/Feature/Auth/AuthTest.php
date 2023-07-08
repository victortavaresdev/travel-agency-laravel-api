<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    private User $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = $this->createUser();
    }

    public function test_login_returns_token_with_valid_credentials(): void
    {
        // Arrange

        // Act
        $response = $this
            ->postJson('/api/v1/auth/login', ['email' => $this->user->email, 'password' => 'test_password']);

        // Assert
        $response
            ->assertStatus(200)
            ->assertJsonStructure(['accessToken']);
    }

    public function test_login_returns_error_with_invalid_credentials(): void
    {
        // Arrange

        // Act
        $response = $this
            ->postJson('/api/v1/auth/login', ['email' => 'invalid@gmail.com', 'password' => 'wrond_password']);

        // Assert
        $response
            ->assertStatus(400);
    }
}
