<?php
/**
* @file
* Contains \Drupal\monotool\Controller\MonotoolController class.
*/
namespace Drupal\monotool\Controller;
use Drupal\Core\Controller\ControllerBase;
/**
* Returns responses for My Module module.
*/
class MonotoolController extends ControllerBase {
	/**
	* Returns markup for our custom page.
	*/
	public function customPage() {
		return [ '#markup' => t('Welcome to my custom page'), ];
	}
}
