<?php 
 
$email = $_POST['email'];
$senha = $_POST['senha'];
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,'selecao_educandus');
$query_select = "SELECT email FROM usuarios WHERE email = '$email'";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['email'];
 
  if($email == "" || $email == null || $senha == "" || $senha == null){
    echo"<script language='javascript' type='text/javascript'>alert('Os campos email e senha devem ser preenchidos');window.location.href='telaCadastro.php';</script>";
 
    }else{
      if($logarray == $email){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse email já existe');window.location.href='telaCadastro.php';</script>";
        die();
 
      }else{
          
          $idconta = 1;
        $query = "INSERT INTO usuarios (contas_idcontas,email,senha) VALUES ('$idconta','$email','$senha')";
        $insert = mysqli_query($connect,$query);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.php'</script>";
        }else{
            echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='telaCadastro.php'</script>";
        }
      }
    }
?>

