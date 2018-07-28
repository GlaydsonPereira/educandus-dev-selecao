<?php 

class ArquivoRepositorio{
    
    private $db;

    private $localhost = 'localhost';
    
    private $root = 'root';
    
    private $banco = "selecao_educandus";
            
    function __construct() {
        $this->db = new mysqli($this->localhost,$this->root,'',$this->banco ) or die (mysql_error());
    }
    
    function inserir($conta) {
        $sql = "";        
        mysqli_query($this->db, $sql);
    }
    
    /**
     * Este método irá consultar todos os arquivos do ususário e quantidade de compartilhamentos
     * @param type $idUsuario
     * @return Array com todos os arquivos do usuario 
     */
    function consultarTodosMeusArquivos($idUsuario) {
        
        $sql = "SELECT arquivosCompartilhados.idusuario qtdCompartilhamentos, arq.* FROM arquivos arq, ";
        $sql += " (SELECT arq2.idarquivos, COUNT(comp.usuarios_idusuarios) idusuario ";
        $sql += "   FROM arquivos arq2 LEFT JOIN compartilhamento comp on (arq2.idarquivos = comp.arquivos_idarquivos) ";
        $sql += "   WHERE arq2.usuarios_idusuarios = $idUsuario GROUP BY arq2.idarquivos) arquivosCompartilhados";        
        $sql += " WHERE arq.usuarios_idusuarios = $idUsuario AND arquivosCompartilhados.idarquivos = arq.idarquivos";
        
        $query = $this->db->query($sql);
        return mysqli_fetch_all($query);
    }
    
    /**
     * Este método retorna o limite permitido para upload do arquivo
     * @param type $idUsuario
     * @return limite que ainda pode subir arquivos
     */
    function consultarLimiteUploadArquivoPorConta($idUsuario) {
        
        $sql = " SELECT con.limite_max_arquivo ";
        $sql += " INNER JOIN contas con on (usu.contas_idcontas = con.idcontas) ";
        $sql += " FROM usuarios usu  WHERE usu.idusuarios = $idUsuario ";
        $query = $this->db->query($sql);

        return mysqli_fetch_row($query);
    }
}
?>