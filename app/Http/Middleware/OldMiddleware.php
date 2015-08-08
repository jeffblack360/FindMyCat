<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class OldMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
            $response = $next($request);
            
            $age = $request->input('age');
            
            Log::debug('age -> '. $age);
            
            $rjb = $request->header('rjb','bar');
            
            $response->headers->set('foo', $rjb);
            
            return $response;
        }

}
