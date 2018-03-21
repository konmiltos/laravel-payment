<?php

namespace Miltiadis\Payment;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

class PaymentServiceProvider extends ServiceProvider {
	
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        //
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
	   
    }
    
   
    
}
