<?php 
namespace Kaankilic\InstaPack\Http\Middleware;
use Illuminate\Support\Facades\Route;

use Closure;
use File;
class SetupHandler{
	/**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /*if (Route::getCurrentRoute()) {
            # code...
        }*/
        if (!file_exists(storage_path().'/app/install.json')) {
            return redirect()->route("instapack::home");
        }
        return $next($request);
    }
}
?>