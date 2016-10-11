<?php 
namespace Kaankilic\InstaPack\Providers;
use Illuminate\Support\ServiceProvider;
use Config;
class InstaPackServiceProvider extends ServiceProvider {
  protected $defer = false;

   /**
     * Bootstrap the application services.
     *
     * @return void
    */
  public function boot(\Illuminate\Routing\Router $router){
        $router->middleware('instaPack', 'Kaankilic\InstaPack\Http\Middleware\InstaMiddleware');
        $router->middlewareGroup('web',['Kaankilic\InstaPack\Http\Middleware\SetupHandler']);
        $this->publishes([
           __DIR__.'/../../config/instapack.php' => base_path('config/instapack.php'),
        ]);
  }
 
  /**
    * Register the application services.
    *
    * @return void
  */
  public function register(){
    $this->registerInstaPack();
    $this->registerForcer();
  }
  public function registerInstaPack(){
    include __DIR__ . '/../Http/routes.php';
    $this->loadViewsFrom(__DIR__.'/../Views/', 'instapack');
    $this->loadViewsFrom(__DIR__.'/../Views/', 'instapack');
    $this->mergeConfigFrom( __DIR__.'/../../config/instapack.php', 'instapack');
  }
  public function registerForcer(){
    //dd($this->app('router')->middlewareGroups());
  }
 
}