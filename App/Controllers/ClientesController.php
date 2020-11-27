<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

//os models
use App\Models\Cliente;
use App\Models\Produto;

class ClientesController extends Action {

	public function listaClientes() {
		$cliente = Container::getModel('Cliente');
		$clientes = $cliente->getClientes();
		$this->view->dados = $clientes;
		$this->render('listaClientes', 'layout2');
	}

	public function incluirCliente() {
		$this->render('incluirCliente', 'layout2');
	}

	public function salvarCliente() {
		$id = $_POST["id"];
		$nome = $_POST["nome"];
        $email = $_POST["email"];
		$senha = $_POST["senha"];
		$situacao = $_POST["situacao"];
		$cliente = Container::getModel('Cliente');
		$cliente->setId($id);
		$cliente->setNome($nome);
		$cliente->setEmail($email);
		$cliente->setSenha($senha);
		$cliente->setSituacao($situacao);
        $cliente->salvarCliente($cliente); 
		$this->listaClientes();
	}

	public function alterarCliente() {
        $id = $_GET["id"];
		$cliente = Container::getModel('Cliente');
		$clientes = $cliente->itemCliente($id);
		$this->view->dados = $clientes;
		$this->render('alterarCliente', 'layout2');
	}

	public function excluirCliente() {
        $id = $_GET["id"];
		$cliente = Container::getModel('Cliente');
		$clientes = $cliente->excluirCliente($id);
		$this->listaClientes();
	}

	public function loginCliente() {
		$this->render('loginCliente', 'layout2');
	}

	public function validaLogin() {
		$email   = $_POST["email"]; 
		$senha   = $_POST["senha"]; 
		$cliente = Container::getModel('Cliente');
		$cliente->setEmail($email);
		$cliente->setSenha($senha);
		$cliente->validaLogin($cliente);	
	}

	public function cadastrarCliente() {
		$this->render('cadastrarCliente', 'layout2');
	}

	public function novoCadastro() {
		$id = $_POST["id"];
		$nome = $_POST["nome"];
        $email = $_POST["email"];
		$senha = $_POST["senha"];
		$situacao = $_POST["situacao"];
		$cliente = Container::getModel('Cliente');
		$cliente->setId($id);
		$cliente->setNome($nome);
		$cliente->setEmail($email);
		$cliente->setSenha($senha);
		$cliente->setSituacao($situacao);
        $cliente->salvarCliente($cliente); 
		$this->index();
	}
	
	// ENCAMINHA O USUARIO CADASTRADO PARA O INDEX
	public function index() {
		$produto = Container::getModel('Produto');	
		$produtos = $produto->getProdutos();
		$this->view->dados = $produtos;

		$this->render('../index/index', 'layout2');
	}

}