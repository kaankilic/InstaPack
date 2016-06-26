<?php 
namespace Kaankilic\InstaPack\Providers;
use Illuminate\Support\ServiceProvider;
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
  }
  public function registerForcer(){
    //dd($this->app('router')->middlewareGroups());
  }
 
}