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
        
      if(strlen($email)<8 || strstr($email,'@')==false)
        {
          echo"<script language='javascript' type='text/javascript'>alert('Favor digitar seu email corretamente');window.location.href='telaCadastro.php';</script>";  
        }else{
        
             $len = strlen($senha); 
             if ($len < 8) { // too short 
                    echo"<script language='javascript' type='text/javascript'>alert('Favor digitar no mínimo oito caracteres na senha');window.location.href='telaCadastro.php';</script>";
                 }elseif ( $len > 20) { // too long. 
                         }elseif (!preg_match("/([a-zA-Z0-9])/", $senha)) { // does not have a character 
                             echo"<script language='javascript' type='text/javascript'>alert('Favor não digitar caracteres especiais na senha');window.location.href='telaCadastro.php';</script>";
                         }
                 
             
                 
             
            
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
    }
?>

