<?php
namespace App\Models;
class Produto {

	protected $id; 
	protected $nome;
    protected $descricao; 
	protected $preco; 
	protected $img; 

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
    public function setNome($nome) {
    	$this->nome = $nome; 
    }
    public function getDescricao() {
    	return $this->descricao; 
    }
    public function setDescricao($descricao) {
    	$this->descricao = $descricao; 
    }
    public function setPreco($preco) {
    	$this->preco = $preco; 
    }
    public function getPreco() {
    	return $this->preco;
	}
	
	public function setImg($img) {
    	$this->img = $img; 
    }
    public function getImg() {
    	return $this->img;
    }

	public function getProdutos() {
		$query = "select id, nome, descricao, preco, img from tb_produtos";
		return $this->db->query($query)->fetchAll();
	}

	public function itemProdutos($id) {
		
		$query = "select id, nome, descricao, preco, img from tb_produtos where id =".$id;
		return $this->db->query($query)->fetchAll();
	}

	public function salvarProduto($produto) {
       if ($this->getId()==0) {
		   $query = "INSERT INTO tb_produtos (nome, descricao, preco, img) VALUES ('".$produto->getNome()."','".$produto->getDescricao()."','".$produto->getPreco()."','".$produto->getImg()."')";
	    }
	    else  {
		   $query = "UPDATE tb_produtos SET nome = '".$produto->getNome()."', descricao = '".$produto->getDescricao()."', preco = '".$produto->getPreco()."', img = '".$produto->getImg()."' WHERE id = ".$produto->getId();
	    } 
		return $this->db->query($query)->fetchAll();
	}

	public function excluirProduto($id) {
	   $query = "delete from tb_produtos where id = ".$id;
		return $this->db->query($query)->fetchAll();
	}
}
?>