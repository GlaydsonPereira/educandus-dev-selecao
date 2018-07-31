<?php
$usuarioComp = $_POST['idUsuarioComp'];
$idAquivoComp = $_POST['idAquivoComp'];
$nomeArquivo = $_POST['nomeArquivo'];

    $connect = mysqli_connect('localhost','root','');
    $db = mysqli_select_db($connect,'selecao_educandus');
    $query = "INSERT INTO compartilhamento (arquivos_idarquivos,usuarios_idusuarios) VALUES ('$idAquivoComp','$usuarioComp')";
    $insert = mysqli_query($connect,$query);

                  if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Compartilhamento cadastrado com sucesso!');window.location.href='../tela/telaCompartilhamento.php?idArquivo=$idAquivoComp&nomeArquivo=$nomeArquivo'</script>";
                  }else{
                     echo"<script language='javascript' type='text/javascript'>alert('Não foi possível compartilhar o arquivo');window.location.href='../tela/telaCompartilhamento.php?idArquivo=$idAquivoComp&nomeArquivo=$nomeArquivo'</script>";
                  }
?>

