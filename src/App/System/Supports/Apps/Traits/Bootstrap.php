<?php namespace Loyola\Supports\Apps\Traits;

/*
 *---------------------------------------------------------
 * ©Colegio Loyola
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

use Illuminate\Foundation\AliasLoader;

trait Bootstrap 
{

	public function loadProviders($providers=[]) {

		if(empty($providers) OR !is_array($providers)) return NULL;

		foreach ($providers as $provider) {
			
			$this->app->register($provider);

		}

	}

	public function loadAlias($alias=[]) {

		if(empty($alias) OR !is_array($alias)) return NULL;

		foreach ($alias as $alia => $class) {
			AliasLoader::getInstance()->alias($alia, $class);
		}

	}
	
	public function core($kernel) {

		/*
		* PROVIDERS */
		$this->loadProviders($kernel::providers());


		/*
		* ALIAS */
		$this->loadAlias($kernel::alias());

		/*
		* HANDLE */
		$kernel::handle($this->app);

	}

}

/* End of Library Bootstrap.php */