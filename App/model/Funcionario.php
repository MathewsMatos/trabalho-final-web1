<?php
require_once "../core/Conexao.php";

class Funcionario extends Conexao{
    private $id;
    private $nome;
    private $registro;
    private $telefone;
    private $email;
    private $senha;

    //Metodos Set
    public function setNome($string){
        $this->nome = $string;
    }
    public function setRegistro($string){
        $this->registro = $string;
    }
    public function setEmail($string){
        $this->email = $string;
    }
    public function setSenha($string){
        $this->senha = $string;
    }

    //Metodos Get
    public function getNome(){
        return $this->nome;
    }
    public function getRegistro(){
        return $this->sobrenome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return $this->senha;
    }

    public function logar(){
        return $this->login($this->getEmail(),$this->getSenha());
    }
}



?>