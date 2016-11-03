<?php

namespace Drupal\monotool\Routing;
use Symfony\Component\Routing\Route;

class CustomRoutes {
	
	public function routes() {

		$routes = [];

		// Create monotool route programmatically

		$routes['monotool'] = new Route(
			// Path definition
			'monotool',
			
			// Route defaults
			[
				'_controller' => '\Drupal\monotool\Controller\MonotoolController::customPage',
				'_title' => 'My custom page', 
			],
			
			// Route requirements
			[ '_permission' => 'access content', ]
		);
		
		return $routes;
	}

}
