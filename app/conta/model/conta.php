<?php 

class Conta{
    
    private $descricao;
    
    private $limiteMaxConta;
    
    private $limiteMaxArquivo;

    function __construct($descricao, $limiteMaxConta, $limiteMaxArquivo) {
        $this->descricao = $descricao;
        $this->limiteMaxConta = $limiteMaxConta;
        $this->limiteMaxArquivo = $limiteMaxArquivo;
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
       
    function getDescricao() {
        return $this->descricao;
    }

    function getLimiteMaxConta() {
        return $this->limiteMaxConta;
    }

    function getLimiteMaxArquivo() {
        return $this->limiteMaxArquivo;
    }
}
?>