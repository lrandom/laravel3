<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use hisorange\BrowserDetect\Parser as Browser;

class AllowOnlyChrome
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        if (Browser::isChrome()) {
            return $next($request);
        }else{
            return redirect(route('only-chrome'));
        }

    }
}
