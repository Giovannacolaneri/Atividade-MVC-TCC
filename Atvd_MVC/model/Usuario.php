<?php

class Usuario {
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $tipo;

    public function __construct($id, $nome, $email, $senha, $tipo) {
        $this->id= $id;
        $this->nome= $nome;
        $this->email= $email;
        $this->senha= $senha;
        $this->tipo= $tipo;
    }

    public function cadastrar(){

    }


    public function getId(){
        return $this->id;

    }

    public function getNome(){
        $this->nome;
    }

    public function getEmail(){
        $this->email;
        
    }

    public function getSenha(){
        $this->senha;
        
    }

    public function getTipo(){
        $this->tipo;
        
        
    }
}