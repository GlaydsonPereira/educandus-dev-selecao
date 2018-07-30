<?php 
session_start();
include_once '../repositorio/usuario.php';

  $email = $_POST['email'];
  $entrar = $_POST['entrar'];
  $senha = $_POST['senha'];
  $connect = mysqli_connect('localhost','root','');
  $db = mysqli_select_db($connect,'selecao_educandus');
    if (isset($entrar)) {
             
      $verifica = mysqli_query($connect,"SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysqli_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Email e/ou senha incorretos');window.location.href='../view/index.html';</script>";
          die();
        }else{
          setcookie("email",$email);
          $usuario = mysqli_fetch_array($verifica);
          $_SESSION['usuarioLogado'] = $usuario;
          header("Location:../../arquivo/tela/telaArquivos.php");
        }
    }
?>
