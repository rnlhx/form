<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['send'] = array(
			'route' => '/send',
			'controller' => 'indexController',
			'action' => 'send'
		);

		$routes['cadastrar'] = array(
			'route' => '/cadastrar',
			'controller' => 'indexController',
			'action' => 'cadastrar'
		);

		$routes['informacoes'] = array(
			'route' => '/informacoes',
			'controller' => 'AppController',
			'action' => 'informacoes'
		);

		$this->setRoutes($routes);

	}

}

?>