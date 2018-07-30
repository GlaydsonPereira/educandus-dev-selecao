<?php 

class Usuario{
    
    public $email;
    
    public $senha;
    
    public $idConta;
    
    public $idUsuario;
    
    function __construct($email, $senha, $idConta, $idUsuario) {
        $this->email = $email;
        $this->senha = $senha;
        $this->idConta = $idConta;
        $this->idUsuario = $idUsuario;
    }
}
?>