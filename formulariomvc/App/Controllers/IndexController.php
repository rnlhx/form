<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action {

	public function index() {

		$this->render('index');
	}

	public function cadastrar() {

		$this->render('formulario');
	}


	public function send() {

		$usuario = Container::getModel('Usuario');

		$usuario->__set('nome', $_POST['nome']);
		$usuario->__set('email', $_POST['email']);
		$usuario->__set('end', $_POST['end']);
		$usuario->__set('fone', $_POST['fone']);
		$usuario->__set('cpf', $_POST['cpf']);
		$usuario->__set('identidade', $_POST['identidade']);
		
		$usuario->salvar();

		$this->render('confirmado');

		}
}



?>