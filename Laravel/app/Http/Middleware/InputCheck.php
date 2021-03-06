<?php

namespace App\Http\Middleware;

use Closure;

class InputCheck
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
        
        
        
        $request->validate([
            'title' => 'required',
            'details' => 'required',
            'image' => 'image|mimes:png|max:2048'
        ]);
        

        return $next($request);
    }
}
