<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ScopeUserType
{
    public function handle(Request $request, Closure $next, string ...$types): mixed
    {
        $allowedTypes = array_map('intval', $types);

        $request->merge(['allowed_user_types' => $allowedTypes]);

        return $next($request);
    }
}
