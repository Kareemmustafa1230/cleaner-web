<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ApiAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::guard('sanctum')->check()) {
            return response()->json([
                'success' => false,
                'message' => 'غير مصرح لك بالوصول. يرجى تسجيل الدخول أولاً.'
            ], 401);
        }

        $user = Auth::guard('sanctum')->user();

        // التحقق من حالة المستخدم
        if (!$user->is_active) {
            return response()->json([
                'success' => false,
                'message' => 'حسابك معطل. يرجى التواصل مع الإدارة.'
            ], 403);
        }

        return $next($request);
    }
}
