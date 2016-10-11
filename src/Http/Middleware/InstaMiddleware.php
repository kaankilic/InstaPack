<?php 
namespace Kaankilic\InstaPack\Http\Middleware;

use Closure;
use Storage;
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
        if (Storage::disk('local')->exists('instapack.json')) {
            app()->abort(404);
        }
        return $next($request);
    }
}
?>