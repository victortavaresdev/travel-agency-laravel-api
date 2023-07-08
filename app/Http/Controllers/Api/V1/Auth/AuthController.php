<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\DTO\Auth\LoginDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\Auth\AuthService;

/**
 * @group Auth endpoints
 */
class AuthController extends Controller
{
    public function __construct(protected AuthService $authService)
    {
    }

    /**
     * POST Login
     *
     * Login with the existing user.
     *
     * @response {"accessToken":"1|a9ZcYzIrLURVGx6Xe41HKj1CrNsxRxe4pLA2oISo"}
     * @response 400 {"message": "Invalid credentials"}
     * @response 422 {"message": "Validation errors"}
     */
    public function login(LoginRequest $request)
    {
        $dto = LoginDTO::fromRequest($request);
        $userAgent = $request->userAgent();

        $token = $this->authService->login($dto, $userAgent);

        return response()->json([
            'accessToken' => $token
        ]);
    }
}
