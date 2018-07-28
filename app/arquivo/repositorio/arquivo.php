<?php 

class Arquivo{
    
    private $id;
    
    private $usuarioId;
    
    private $nome;
    
    private $path;
    
    private $tamanho;
    
    private $tipoArquivo;
    
    function __construct($usuarioId, $nome, $path, $tamanho, $tipoArquivo) {        
        $this->usuarioId = $usuarioId;
        $this->nome = $nome;
        $this->path = $path;
        $this->tamanho = $tamanho;
        $this->tipoArquivo = $tipoArquivo;
    }

    function getId() {
        return $this->id;
    }

    function getUsuarioId() {
        return $this->usuarioId;
    }

    function getNome() {
        return $this->nome;
    }

    function getPath() {
        return $this->path;
    }

    function getTamanho() {
        return $this->tamanho;
    }

    function getTipoArquivo() {
        return $this->tipoArquivo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsuarioId($usuarioId) {
        $this->usuarioId = $usuarioId;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setPath($path) {
        $this->path = $path;
    }

    function setTamanho($tamanho) {
        $this->tamanho = $tamanho;
    }

    function setTipoArquivo($tipoArquivo) {
        $this->tipoArquivo = $tipoArquivo;
    }
}
?>