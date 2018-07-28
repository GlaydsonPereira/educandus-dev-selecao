<?php 

class Conta{
    
    private $id;
    
    private $descricao;
    
    private $limiteMaxConta;
    
    private $limiteMaxArquivo;

    function __construct($descricao, $limiteMaxConta, $limiteMaxArquivo) {
        $this->descricao = $descricao;
        $this->limiteMaxConta = $limiteMaxConta;
        $this->limiteMaxArquivo = $limiteMaxArquivo;
    }
    
    function getId() {
        return $this->id;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getLimiteMaxConta() {
        return $this->limiteMaxConta;
    }

    function getLimiteMaxArquivo() {
        return $this->limiteMaxArquivo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setLimiteMaxConta($limiteMaxConta) {
        $this->limiteMaxConta = $limiteMaxConta;
    }

    function setLimiteMaxArquivo($limiteMaxArquivo) {
        $this->limiteMaxArquivo = $limiteMaxArquivo;
    }
}
?>