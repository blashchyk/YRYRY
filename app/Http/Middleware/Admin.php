<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       /*
         * Если гость, нет доступа
         */
         if (!Auth::check()) {
            return redirect('/');
        }
        /*
         * Если владелец, открытие страницы редактирования
         */
        if (Auth::user()->id != 1) {
            return redirect('/');
        }
        /*
         * Если авторизованный открывает чужой профиль, то просмотр
         */
        return $next($request);
    }
}
