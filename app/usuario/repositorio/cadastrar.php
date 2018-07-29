<?php  

$tipoConta = $_POST['tipoConta'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,'selecao_educandus');
$query_select = "SELECT email FROM usuarios WHERE email = '$email'";
$select = mysqli_query($connect,$query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['email'];
 
  if($email == "" || $email == null || $senha == "" || $senha == null){
    echo"<script language='javascript' type='text/javascript'>alert('Os campos email e senha devem ser preenchidos');window.location.href='../tela/telaCadastro.php';</script>";
 
    }else{
        
      if(strstr($email,'@')==false)
        {
          echo"<script language='javascript' type='text/javascript'>alert('Favor digitar seu email corretamente');window.location.href='../tela/telaCadastro.php';</script>";  
        }else{
        
             $len = strlen($senha); 
             if ($len < 8) { 
                    echo"<script language='javascript' type='text/javascript'>alert('Favor digitar no mínimo oito caracteres na senha');window.location.href='../tela/telaCadastro.php';</script>";
                 }
                 
             
                 
             
            
            if($logarray == $email){

              echo"<script language='javascript' type='text/javascript'>alert('Esse email já existe');window.location.href='../tela/telaCadastro.php';</script>";
              die();

            }else{

                $idconta = $tipoConta;
              $query = "INSERT INTO usuarios (contas_idcontas,email,senha) VALUES ('$idconta','$email','$senha')";
              $insert = mysqli_query($connect,$query);

              if($insert){
                echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='../../login/view/index.html'</script>";
              }else{
                  echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='../tela/telaCadastro.php'</script>";
              }
            }
        }
    }
?>

