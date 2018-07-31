<?php
$idAquivo = $_GET['idAquivo'];
$nomeArquivo = $_GET['nomeArquivo'];
$idUsuarioComp = $_GET['idUsuarioComp'];

$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,'selecao_educandus');
$query = "DELETE FROM compartilhamento WHERE arquivos_idarquivos = '$idAquivo' AND usuarios_idusuarios = '$idUsuarioComp'";
$delete = mysqli_query($connect,$query);

if($delete){
    echo"<script language='javascript' type='text/javascript'>alert('Compartilhamento excluido com sucesso!');window.location.href='../tela/telaCompartilhamento.php?idArquivo=$idAquivo&nomeArquivo=$nomeArquivo'</script>";
}else{
    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível excluir o compartilhamento');window.location.href='../tela/telaCompartilhamento.php?idArquivo=$idAquivo&nomeArquivo=$nomeArquivo'</script>";
}
?>

