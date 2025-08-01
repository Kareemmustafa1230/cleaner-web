<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ApiCheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        $user = Auth::guard('sanctum')->user();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'غير مصرح لك بالوصول. يرجى تسجيل الدخول أولاً.'
            ], 401);
        }

        // التحقق من دور المستخدم
        if ($user->role !== $role && $user->role !== 'admin') {
            return response()->json([
                'success' => false,
                'message' => 'ليس لديك صلاحية للوصول لهذا المورد.'
            ], 403);
        }

        return $next($request);
    }
}
