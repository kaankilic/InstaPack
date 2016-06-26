<?php 
namespace Kaankilic\InstaPack\Http\Middleware;

use Closure;
class InstaMiddleware{
	/**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (file_exists(storage_path().'/app/install.json')) {
            app()->abort(404);
        }
        return $next($request);
    }
}
?>