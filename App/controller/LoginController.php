<?php
require_once "../model/funcionario.php";
session_start();

class Login {
    private $funcionario;
    
    public function __construct(){
        $this->funcionario = new Funcionario();
        $this->funcionario->setEmail($_POST['email']);
        $this->funcionario->setSenha($_POST['senha']);
        $this->acessar();
    }

    private function acessar(){
        $resultado=$this->funcionario->logar();
        $email=$this->funcionario->getEmail();
        if($resultado){
            $_SESSION['email']=$email;
            header("location:../view/index.php");
        } else{
            session_destroy();
            echo "<h1>Usuário ou senha incorretos.</h1>";
        }
    }
}
?>