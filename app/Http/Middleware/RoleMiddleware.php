<?php

namespace App\Http\Middleware;

use Closure;
use App\Exceptions\Custom\ForbiddenException;
use App\Exceptions\Custom\UnauthenticatedException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (!auth()->check()) {
            throw new UnauthenticatedException('Unauthenticated');
        };

        if (!auth()->user()->roles()->where('name', $role)->exists()) {
            throw new ForbiddenException('Forbidden access');
        };

        return $next($request);
    }
}
