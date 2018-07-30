<?php 
session_start();
if($_SESSION['usuarioLogado'] == null){
    header("Location:../../login/tela/index.html");
}
include_once '../repositorio/arquivoRepositorio.php';            
$usuario = $_SESSION['usuarioLogado'];
$repositorio = new ArquivoRepositorio();
?>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
        <title>Compartilhamento</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucid">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
        <link rel="stylesheet" type="text/css" href="../../recursos/css/bootstrap.css">
        <link href="../../recursos/css/folha_estilo.css" media="screen" rel="stylesheet" type="text/css">
    </head>
    <body>
        <form enctype="multipart/form-data" action="updateArquivo.php" method="POST">
            <div style="float: top; clear: both; margin-left: 5%; margin-right: 5%;">
                <label>Enviar esse arquivo: </label><br/>
                <input name="userfile" type="file" />
                <input type="submit" value="enviar" />
            </div>
            
            <div style="float: top; clear: both; margin-left: 5%; margin-right: 5%;">
                <div style="width: 40%; float: left;">
                    <table class="table ls-table">
                        <thead>
                            <tr>
                                <th>Meus arquivos</th>
                                <th>Numero de Compartilhamentos</th>
                                <th>Excluir arquivo</th>
                            </tr>                    
                        </thead>
                        <tbody>
                            <?php                                         
                            $arrayMeusArquivos = $repositorio->consultarTodosMeusArquivos($usuario['idusuarios']);
                            if(!empty($arrayMeusArquivos)){
                                while ($reg = $arrayMeusArquivos->fetch_array()){
                                    $linha = "<tr>";
                                    $linha .= "<td>".$reg['nome']."</td>";
                                    $linha .= "<td><center><a href=''>".$reg['qtdCompartilhamentos']."</a></center></td>";
                                    $linha .= "<td><a href=''>Excluir</a></td>";
                                    $linha .= "<tr>";
                                    echo $linha;
                                }
                            } ?>
                        </tbody>
                    </table>
                </div>
                <div style="width: 40%; float: right;">
                    <table class="table ls-table">
                        <thead>
                            <tr>
                                <th>Compartilhados comigo</th>
                            </tr>                    
                        </thead>
                        <tbody>
                            <?php                                         
                            $arrayCompartilhados = $repositorio->consultarTodosArquivosCompartilhadosComigo($usuario['idusuarios']);
                            if(!empty($arrayCompartilhados)){
                                while ($reg = $arrayCompartilhados->fetch_array()){
                                    $linha = "<tr>";
                                    $linha .= "<td>".$reg['nome']."</td>";
                                    $linha .= "<tr>";
                                    echo $linha;
                                }
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </form>
    </body>
</html>