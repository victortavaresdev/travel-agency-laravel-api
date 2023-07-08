<?php

namespace App\DTO\Auth;

use App\Http\Requests\Auth\LoginRequest;

class LoginDTO
{
    public function __construct(
        public readonly string $email,
        public readonly string $password,
    ) {
    }

    public static function fromRequest(LoginRequest $request): self
    {
        return new self(
            email: $request->validated('email'),
            password: $request->validated('password')
        );
    }
}
