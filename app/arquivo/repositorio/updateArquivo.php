<?php
session_start();
$usuario = $_SESSION['usuarioLogado'];
$tipoArquivo = $_POST['tipoArquivo'];
$idusuario = $usuario['idusuarios'];

$cBytes = $_FILES['userfile']['size'];
$nBytes = ($cBytes / 1048576);

$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,'selecao_educandus');

$con = new mysqli('localhost','root','','selecao_educandus' ) or die (mysql_error());
$query1 = $con->query ("SELECT * FROM arquivos WHERE usuarios_idusuarios = '$idusuario'");

$espacoOculpado =0;
while ($reg1 = $query1->fetch_array()){
   $espacoArquivo = $reg1['tamanho'];
   $espacoOculpado = $espacoOculpado + $espacoArquivo;
}
echo $espacoOculpado;

$query2 = $con->query ("SELECT * FROM usuarios WHERE idusuarios = '$idusuario'");
$reg2 = $query2->fetch_array();
$idTipoConta = $reg2['contas_idcontas'];
//echo ($idTipoConta);

$query3 = $con->query ("SELECT * FROM contas WHERE idcontas = '$idTipoConta'");
$reg3 = $query3->fetch_array();
$limiteConta = $reg3['limite_max_conta'];
$limiteArquivo = $reg3['limite_max_arquivo'];
//echo ($limiteConta ."-". $limiteArquivo);

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
}elseif($nBytes > $limiteArquivo){
    echo "<script language='javascript' type='text/javascript'>alert('Arquivo maior que o limite de " . $limiteArquivo . "MB');window.location.href='../tela/telaArquivos.php'</script>";
}elseif ($nBytes + $espacoOculpado > $limiteConta) {
    echo "<script language='javascript' type='text/javascript'>alert('Arquivo ultrapassa o limite da conta de " . $limiteConta . "MB');window.location.href='../tela/telaArquivos.php'</script>";
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


