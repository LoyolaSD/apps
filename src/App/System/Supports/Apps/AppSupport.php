<?php namespace Loyola\Supports\Apps;
	
/*
 *---------------------------------------------------------
 * ©Colegio Loyola
 * Santo Domingo República Dominicana.
 *---------------------------------------------------------
*/

use Loyola\Supports\Apps\Traits\Bootstrap;

class AppSupport 
{

	use Bootstrap;

	protected $app;
	
	public function __construct($app)
	{
		$this->app = $app;
	}

	public function info()
	{
		return 'AppSupport';
	}

}

/* End of Library AppSupport.php */	