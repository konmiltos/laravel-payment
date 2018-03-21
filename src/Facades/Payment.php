<?php

namespace Miltiadis\Payment\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Miltiadis\Payment\PaymentManager
 */
class Payment extends Facade {
	
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'Miltiadis\Payment\Contracts\Factory';
    }
    
}
