<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsSubscribed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->user()?->onTrial() && auth()->user()?->subscribed()) {
            // This user is not a paying customer...
            return redirect()->route('free-trial-end');
        }

        return $next($request);
    }
}
