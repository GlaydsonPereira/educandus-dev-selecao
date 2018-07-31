<a href="../../arquivo/tela/telaArquivos.php">VOLTAR PARA TELA PRINCIPAL</a>
<?php
session_start();
$idAquivo = $_GET['idArquivo']; 
$nomeArquivo = $_GET['nomeArquivo']; 
echo "<br><br>Arquivo:$nomeArquivo<br><br>Compartilhado com:<br>";
$con = new mysqli('localhost','root','','selecao_educandus' ) or die (mysql_error()); 
$query = $con->query("SELECT * FROM compartilhamento");   
while($reg = $query->fetch_array()){
    if($reg["arquivos_idarquivos"] == $idAquivo){
        //echo $reg["usuarios_idusuarios"];
        $idUsuario = $reg["usuarios_idusuarios"];
        $connect = mysqli_connect('localhost','root','');
        $db = mysqli_select_db($connect,'selecao_educandus');
        $query_select = "SELECT email FROM usuarios WHERE idusuarios = '$idUsuario'";
        $select = mysqli_query($connect,$query_select);
        $array = mysqli_fetch_array($select);
        $logarray = $array['email'];
        echo "$logarray<br>";
    }
}

?>
        <form enctype="multipart/form-data" action="../repositorio/updateCompartilhamento.php?" method="POST">
                <INPUT TYPE="hidden" NAME="idAquivoComp" VALUE="<?php echo $idAquivo?>"/>
                <INPUT TYPE="hidden" NAME="nomeArquivo" VALUE="<?php echo $nomeArquivo?>"/>
            <?php
                
                 echo "<br>Adicionar usuario ao compartilhamento:<br>";        
                 $query = $con->query("SELECT * FROM usuarios");?>   
                 <select name="idUsuarioComp">
                 <?php while($reg = $query->fetch_array()) {?>
                 <option value="<?php echo $reg["idusuarios"]?>"><?php echo $reg["email"]?></option>   
                <?php }?>
                 <input  type="submit" value="adicionar" /> 
        </form>         

