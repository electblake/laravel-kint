<?php
namespace PeachSchnapps\Kint\Facades;
use Illuminate\Support\Facades\Facade;

class Kint extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
    	return 'kint';
    }

}