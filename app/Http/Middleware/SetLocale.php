<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        // التحقق من وجود لغة محفوظة في الجلسة
        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        } else {
            // تعيين اللغة الافتراضية (العربية)
            App::setLocale('ar');
            Session::put('locale', 'ar');
        }

        return $next($request);
    }
}
