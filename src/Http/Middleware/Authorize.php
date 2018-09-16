<?php

namespace Jam0r85\NovaNexmo\Http\Middleware;

use Jam0r85\NovaNexmo\NovaNexmo;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(NovaNexmo::class)->authorize($request) ? $next($request) : abort(403);
    }
}
