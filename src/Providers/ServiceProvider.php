<?php 
namespace Kaankilic\PortableInvoice;
use Illuminate\Support\ServiceProvider;
use Libs\Invoice;
class PortableInvoiceServiceProvider extends ServiceProvider {
  
   /**
     * Bootstrap the application services.
     *
     * @return void
    */
  public function boot(){
    $this->app['PortableInvoice'] = $this->app->share(function($app){
      return new Invoice('A4','$',$this->app->getLocale());
    });
  }
 
  /**
    * Register the application services.
    *
    * @return void
  */
  public function register(){
    return array('PortableInvoice');
  }
 
}