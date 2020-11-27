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
		
		$routes['sobre_nos'] = array(
			'route' => '/sobre_nos',
			'controller' => 'indexController',
			'action' => 'sobreNos'
		);	

		$routes['menuPrincipal'] = array(
			'route' => '/menuPrincipal',
			'controller' => 'indexController',
			'action' => 'menuPrincipal'
		);

// Produtos
		$routes['produtos'] = array(
			'route' => '/produtos',
			'controller' => 'ProdutosController',
			'action' => 'listaProdutos'
		);

		$routes['incluirProduto'] = array(
			'route' => '/incluirProduto',
			'controller' => 'ProdutosController',
			'action' => 'incluirProduto'
		);

		$routes['salvarProduto'] = array(
			'route' => '/salvarProduto',
			'controller' => 'ProdutosController',
			'action' => 'salvarProduto'
		);

		$routes['alterarProduto'] = array(
			'route' => '/alterarProduto',
			'controller' => 'ProdutosController',
			'action' => 'alterarProduto'
		);

		$routes['excluirProduto'] = array(
			'route' => '/excluirProduto',
			'controller' => 'ProdutosController',
			'action' => 'excluirProduto'
		);

// clientes 

		$routes['clientes'] = array(
			'route' => '/clientes',
			'controller' => 'ClientesController',
			'action' => 'listaClientes'
		);

		$routes['incluirCliente'] = array(
			'route' => '/incluirCliente',
			'controller' => 'ClientesController',
			'action' => 'incluirCliente'
		);

		$routes['salvarCliente'] = array(
			'route' => '/salvarCliente',
			'controller' => 'ClientesController',
			'action' => 'salvarCliente'
		);

		$routes['alterarCliente'] = array(
			'route' => '/alterarCliente',
			'controller' => 'ClientesController',
			'action' => 'alterarCliente'
		);

		$routes['excluirCliente'] = array(
			'route' => '/excluirCliente',
			'controller' => 'ClientesController',
			'action' => 'excluirCliente'
		);

		$this->setRoutes($routes);
	}
}
?>
