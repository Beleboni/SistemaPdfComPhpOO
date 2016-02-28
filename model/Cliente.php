<?php

include_once './abstract/Abstrata.php';
include_once './iCRUD/iCRUD.php';

class Cliente extends Abstrata implements iCRUD {
    //CRIANDO OS ATRUBUTOS
    private $idCliente;
    private $nome;
    private $email;
    private $idade;
    
    function getIdCliente() {
        return $this->idCliente;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getIdade() {
        return $this->idade;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }
    
        
    public function alterar() {
        
    }

    public function cadastrar() {
        $pdo = parent::getDB();
        
        try {
            $cadastrar = $pdo->prepare("INSERT INTO clientes(nome, email, idade) VALUES(?,?,?)");
            $cadastrar->bindParam(1, $this->getNome());
            $cadastrar->bindParam(2, $this->getEmail());
            $cadastrar->bindParam(3, $this->getIdade());
            
            $cadastrar->execute();
            
        } catch (PDOException $e) {
            echo $e->getMessage();
        } 
            
    }
    
    public function deletar() {
        parent::deletar();
    }
    
    public function listar() {
        parent::$tabela = "clientes";
        return parent::listar();
    }

    
}