<?php

namespace Drupal\monotool\Routing;
use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

class RouteSubscriber extends RouteSubscriberBase {
	/**
	* {@inheritdoc}
	*/
	public function alterRoutes(RouteCollection $collection) {
		
		// Change path of monotool to use a hyphen
		if ($route = $collection->get('monotool')) {
			$route->setPath('/mono-tool');
			
		}
	}
}
