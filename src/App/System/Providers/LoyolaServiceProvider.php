<?php namespace Loyola\Providers;

/*
 *---------------------------------------------------------
 * ©Colegio Loyola
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

use Illuminate\Support\ServiceProvider;
use Loyola\Supports\Apps\Apps;

class LoyolaServiceProvider extends ServiceProvider 
{

	public function boot() {

	}

	public function register() {


		$this->app->bind("Apps", function($app) {

			return new \Loyola\Supports\Apps\AppSupport($app);

		});


		/*
		* LOYOLA CORE */
		
		Apps::core(\Loyola\Kernel::class);


	}

}


/* End of providers LoyolaServiceProvider.php */