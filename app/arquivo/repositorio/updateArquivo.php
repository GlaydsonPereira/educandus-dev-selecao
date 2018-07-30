<?php
$tipoArquivo = $_POST['tipoArquivo'];
$idusuarios = $_POST[$usuario['idusuarios']];

$cBytes = $_FILES['userfile']['size'];
$nBytes = ($cBytes / 1048576);

$nomeArquivo= $_FILES['userfile']['name'];

$filename = $nomeArquivo;
$destination = "../arquivosUpload";
move_uploaded_file($filename, $destination);

//echo $tipoArquivo; 
//echo $nBytes; 
//echo $nomeArquivo;
echo $idusuarios;


?>


