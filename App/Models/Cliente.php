<?php
namespace App\Models;
class Cliente {

    protected $id; 
    protected $nome;
    protected $email;
    protected $senha;
    protected $situacao = 0;
    protected $texto;

    protected $db;

	public function __construct(\PDO $db) {
		$this->db = $db;
	}

    public function getId() {
    	return $this->id; 
    }
    public function setId($id) {
    	$this->id = $id; 
    }

    public function getNome() {
    	return $this->nome; 
    }
    public function setNome($nome) { //VERIFICA SE FICA $id mesmo
    	$this->nome = $nome; 
    }

    public function getEmail() {
    	return $this->email; 
    }
    public function setEmail($email) {
    	$this->email = $email; 
    }

    public function getSenha() {
    	return $this->senha; 
    }
    public function setSenha($senha) {
    	$this->senha = $senha; 
    }

    public function getSituacao() {
    	return $this->situacao; 
    }
    public function setSituacao($situacao) {
    	$this->situacao = $situacao; 
    }

    public function getTexto() {
    	return $this->texto; 
    }
    public function setTexto($texto) {
    	$this->texto = $texto; 
    }

    public function getClientes() {
        $query = "SELECT id, nome, email, senha, situacao FROM tb_clientes";
		return $this->db->query($query)->fetchAll();
    }

    public function itemCliente($id) {
		
		$query = "SELECT id, nome, email, senha, situacao FROM tb_clientes WHERE id =".$id;
		return $this->db->query($query)->fetchAll();
	}

	public function salvarCliente($cliente) {
        if ($this->getId()==0) {
		   $query = "INSERT INTO tb_clientes (nome, email, senha, situacao) VALUES ('".$cliente->getNome()."','".$cliente->getEmail()."','".$cliente->getSenha()."','".$cliente->getSituacao()."')";
	    }
	    else  {
		   $query = "UPDATE tb_clientes SET nome = '".$cliente->getNome()."', email = '".$cliente->getEmail()."', senha = '".$cliente->getSenha()."', situacao = '".$cliente->getSituacao()."' WHERE id = ".$cliente->getId();
        } 
		return $this->db->query($query)->fetchAll();
    }
    
    public function excluirCliente($id) {
        $query = "DELETE FROM tb_clientes WHERE id = ".$id;
        return $this->db->query($query)->fetchAll();
    }

    /*METODO DE VALIDA LOGIN*/
    public function validarUsuario($cliente) {
        $query = "SELECT email, senha FROM tb_clientes WHERE email = '".$cliente->getEmail()."' AND senha = '".$cliente->getSenha()."'";
        return $this->db->query($query)->fetchAll();

    }

    /*METODO SALVAR MENSAGEM*/
    public function getMensagem() {
        $query = "SELECT id, texto, email FROM tb_mensagem";
		return $this->db->query($query)->fetchAll();
    }

    public function salvarMensagem($mensagem) {
        $query = "INSERT INTO tb_mensagem (texto, email) VALUES ('".$mensagem->getTexto()."','".$mensagem->getEmail()."')";
        return $this->db->query($query)->fetchAll();
    }

}

?>