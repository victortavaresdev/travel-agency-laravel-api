<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_returns_token_with_valid_credentials(): void
    {
        // Arrange
        $user = $this->createUser();

        // Act
        $response = $this
            ->postJson("{$this->authURI}/login", ['email' => $user->email, 'password' => 'test_password']);

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
            ->postJson("{$this->authURI}/login", ['email' => 'invalid@gmail.com', 'password' => 'wrond_password']);

        // Assert
        $response
            ->assertStatus(400);
    }
}
