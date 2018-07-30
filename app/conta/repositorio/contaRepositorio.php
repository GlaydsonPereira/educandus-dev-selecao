<?php 

class ContaRepositorio{
    
    private $db;

    private $localhost = 'localhost';
    
    private $root = 'root';
    
    private $banco = "selecao_educandus";
            
    function __construct() {
        $this->db = new mysqli($this->localhost,$this->root,'',$this->banco ) or die (mysql_error());
    }
    
    function inserir($conta) {
        $sql = "INSERT INTO contas (idcontas, descricao, limite_max_conta, limite_max_arquivo) "
                . " values (".$conta->getId.",'".$conta->getDescricao."',".$conta->getLimiteMaxConta().", ".$conta->getLimiteMaxArquivo().")";        
        mysqli_query($this->db, $sql);
    }
    
    function consultarTodos() {
        $sql = "SELECT * FROM contas";
        $query = $this->db->query($sql);
        return mysqli_fetch_all($query);
    }

    /**
     * Este método calculará os limite de MB ainda disponíveis para o usuário 
     * de acordo com a conta do mesmo.
     * @param type $idUsuario
     * @return Array com o id do usuario e limite que ainda pode subir arquivos
     */
    function consultarLimiteUploadPorTipoConta($idUsuario) {
        
        $sql = "SELECT arq.usuarios_idusuarios, ";
        $sql .= "(CASE WHEN (con.limite_max_conta - agrupamento.somaArquivos) > 0 ";
        $sql .= "   THEN (con.limite_max_conta - agrupamento.somaArquivos) ELSE 0 END) diferenca ";
        $sql .= "FROM arquivos arq INNER JOIN usuarios usu on (arq.idarquivos = usu.idusuarios) ";
	$sql .= "   INNER JOIN  contas con on (usu.contas_idcontas = con.idcontas), ";
	$sql .= "(SELECT arq2.usuarios_idusuarios, SUM(arq2.tamanho) somaArquivos ";
        $sql .= "   FROM arquivos arq2 WHERE arq2.usuarios_idusuarios = $idUsuario GROUP BY arq2.usuarios_idusuarios) agrupamento ";
        $sql .= "WHERE arq.usuarios_idusuarios = $idUsuario and arq.usuarios_idusuarios = agrupamento.usuarios_idusuarios ";
        $sql .= "GROUP BY arq.usuarios_idusuarios";
        $query = $this->db->query($sql);

        return $this->db->query($sql);
    }    
}
?>