<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\support\facades\Route;

class EnsureUserRoleIsAllowedToAccess
{
    //the pages of the app which are 
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        try {
            $userRole = auth()->user()->role;
            $currentRouteName = Route::currentRouteName();

            if (in_array($currentRouteName, $this->UserAccessRole()[$userRole])) {
                return $next($request);
            } else {
                abort(403, 'unauthorized action');
            }
            //code...
        } catch (\Throwable $th) {
            abort(403, 'You are not allowed to view page');
        }
    }

    /**temporary list of routes to be moved to database 
     *
     * @return void 
     */
    private function UserAccessRole()
    {
        return [
            'user' => [
                'dashboard',
            ],
            'admin' => [
                'pages',
                'navigation-menus',

            ],
        ];
    }
}
