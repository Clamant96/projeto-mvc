<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

//os models
use App\Models\Login;
use App\Models\Produto;
use App\Models\Cliente;

class LoginController extends Action {

    public function logar() {
        $this->render('login', 'layout2');

	}

    public function validaLogin() {
        $email = $_POST["email"]; 
        $senha = $_POST["senha"]; 
        $login = Container::getModel('Login');
        
        //echo "Registrou os dados de email". $email ." e senha". $senha;
        if($login->login($email, $senha) == true) {
            if(isset($_SESSION['idUser'])){
                //echo "Usuario logado";
                return $this->validaLogeed();

            }else{
                echo "Usuario nao localizado";
    
            }

        }else{
            echo "Nao foi possivel acessar a classe Login";
            return $this->index();
        }
    }

    public function validaLogeed() {
        if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])){
            $login = Container::getModel('Login');
            $listLogged = $login->logged($_SESSION['idUser']);
            $nomeUser = $listLogged['nome'];

            $this->index();
        
        }else{
            header("Location: /logar");
        
        }
    }

    public function logout() {
        session_start();
        unset($_SESSION['idUser']);

        $this->index();

    }
    
    public function index() {
		$login = Container::getModel('Login');	
		$logins = $login->getLogin();
        $this->view->dados = $logins;
        
        $produto = Container::getModel('Produto');	
        $produtos = $produto->getProdutos();
        $this->view->dados = $produtos;

		$this->render('../index/index', 'layout1');
    }

}