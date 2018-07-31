<?php
session_start();
$usuario = $_SESSION['usuarioLogado'];
$tipoArquivo = $_POST['tipoArquivo'];
$idusuario = $usuario['idusuarios'];

$cBytes = $_FILES['userfile']['size'];
$nBytes = ($cBytes / 1048576);

$nomeArquivo= $_FILES['userfile']['name'];
$filename = $nomeArquivo;
$destination = "../arquivosUpload/".$filename;
move_uploaded_file($filename, $destination);

//echo $tipoArquivo; 
//echo $nBytes; 
//echo $nomeArquivo;
//echo $idusuario;
if($nomeArquivo == null){
    echo"<script language='javascript' type='text/javascript'>alert('Selecione o Arquivo');window.location.href='../tela/telaArquivos.php';</script>";
}else{
    $connect = mysqli_connect('localhost','root','');
    $db = mysqli_select_db($connect,'selecao_educandus');
    $query = "INSERT INTO arquivos (usuarios_idusuarios,nome,path,tamanho,tipo_arquivo_idtipo_arquivo) VALUES ('$idusuario','$nomeArquivo','$destination','$nBytes','$tipoArquivo')";
    $insert = mysqli_query($connect,$query);

                  if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Arquivo cadastrado com sucesso!');window.location.href='../tela/telaArquivos.php'</script>";
                  }else{
                      echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar o arquivo');window.location.href='../tela/telaArquivos.php'</script>";
                  }
}

?>


