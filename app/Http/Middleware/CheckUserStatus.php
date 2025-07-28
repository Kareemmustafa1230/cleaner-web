<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Setting;
use Illuminate\Http\Request;

class CheckUserStatus
{
    public function handle(Request $request, Closure $next) {
        if (auth('web')->check()) {
            $user = auth('web')->user();

            if (!$user->status) {
                auth('web')->logout();
                session()->flash('error', __('messages.blockedaccount'));
                return redirect()->route('login');
            }
        }

        return $next($request);
    }
}