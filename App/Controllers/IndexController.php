<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

//os models
use App\Models\Produto;
use App\Models\Cliente;
use App\Models\Login;

class IndexController extends Action {

	public function index() {
		$produto = Container::getModel('Produto');	
		$produtos = $produto->getProdutos();
		$this->view->dados = $produtos;

		$this->render('index', 'layout1');
	}


	public function menuPrincipal() {

		$this->render('menuPrincipal', 'layout1');
	}


	public function sobreNos() {
		$produto = Container::getModel('Produto');	
		$produtos = $produto->getProdutos();
		$this->view->dados = $produtos;

		$cliente = Container::getModel('Cliente');	
		$clientes = $cliente->getClientes();
		$this->view->dados = $clientes;

		$login = Container::getModel('Login');	
		$logins = $login->getLogin();
		$this->view->dados = $logins;

		$this->render('sobreNos', 'layout1');
	}

}


?>