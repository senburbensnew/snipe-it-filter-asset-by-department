<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckIfSuperUserForDepartment
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Add headers to the response
        $currentUser = auth()->user();
        $isSuperUser = 0;

        if($currentUser && $currentUser->isSuperUser()){
             $isSuperUser = 1;
        }

        $response->headers->set('is_super_user', "$isSuperUser");

        return $response;
    }
}
