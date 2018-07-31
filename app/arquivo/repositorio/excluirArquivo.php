<?php
$idAquivo = $_GET['idArquivo']; 
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,'selecao_educandus');

$query1 = "DELETE FROM compartilhamento WHERE arquivos_idarquivos = '$idAquivo'";
$query2 = "DELETE FROM arquivos WHERE idarquivos = '$idAquivo'";

$delete1 = mysqli_query($connect,$query1);
$delete2 = mysqli_query($connect,$query2);
if($delete2){
    echo"<script language='javascript' type='text/javascript'>alert('Arquivo excluido com sucesso!');window.location.href='../tela/telaArquivos.php'</script>";
}else{
    //echo 'nao excluido';
    echo"<script language='javascript' type='text/javascript'>alert('Arquivo não excluido!');window.location.href='../tela/telaArquivos.php'</script>";
}
?>
