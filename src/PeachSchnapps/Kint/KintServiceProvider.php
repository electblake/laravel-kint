<?php namespace PeachSchnapps\Kint;

use Illuminate\Support\ServiceProvider;

class KintServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	public function boot() {
		$this->package('peach-schnapps/kint');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{

    // Shortcut so developers don't need to add an Alias in app/config/app.php
    $this->app->booting(function()
    {
      $loader = \Illuminate\Foundation\AliasLoader::getInstance();
      $loader->alias('Kint', '\Raveren\Kint');
    });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('kint');
	}

}