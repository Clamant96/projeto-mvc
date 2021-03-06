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

		$routes['exibirProduto'] = array(
			'route' => '/exibirProduto',
			'controller' => 'ProdutosController',
			'action' => 'exibirProduto'
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

		$routes['loginCliente'] = array(
			'route' => '/loginCliente',
			'controller' => 'ClientesController',
			'action' => 'loginCliente'
		);

		$routes['validaLogin'] = array(
			'route' => '/validaLogin',
			'controller' => 'ClientesController',
			'action' => 'validaLogin'
		);

		//CADASTRO CLIENTE
		$routes['cadastrarCliente'] = array(
			'route' => '/cadastrarCliente',
			'controller' => 'ClientesController',
			'action' => 'cadastrarCliente'
		);

		$routes['novoCadastro'] = array(
			'route' => '/novoCadastro',
			'controller' => 'ClientesController',
			'action' => 'novoCadastro'
		);

		$routes['autenticacao'] = array(
			'route' => '/autenticacao',
			'controller' => 'ClientesController',
			'action' => 'novoLogin'
		);

		//MENSAGEM
		$routes['mensagens'] = array(
			'route' => '/mensagens',
			'controller' => 'ClientesController',
			'action' => 'listaMensagens'
		);

		$routes['mensagem'] = array(
			'route' => '/mensagem',
			'controller' => 'ClientesController',
			'action' => 'mensagem'
		);

		/*LOGIN*/
		$routes['logar'] = array(
			'route' => '/logar',
			'controller' => 'LoginController',
			'action' => 'logar'
		);

		$routes['login'] = array(
			'route' => '/login',
			'controller' => 'LoginController',
			'action' => 'validaLogin'
		);

		$routes['verificaSituacao'] = array(
			'route' => '/verificaSituacao',
			'controller' => 'LoginController',
			'action' => 'validaLogeed'
		);

		$routes['logout'] = array(
			'route' => '/logout',
			'controller' => 'LoginController',
			'action' => 'logout'
		);

		$routes['index'] = array(
			'route' => '/index',
			'controller' => 'LoginController',
			'action' => 'index'
		);

		$this->setRoutes($routes);
	}
}
?>
