<!DOCTYPE html>
<html lang="pt-br" class="color-blue with-lwbar-both media-desk-lg">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Cadastro tipo conta</title>
      <link rel="stylesheet" type="text/css" href="../../recursos/css/bootstrap.css">
      <link href="../../recursos/css/folha_estilo.css" media="all" rel="stylesheet" type="text/css">
      <script src="../js/conta.js" type="text/javascript"></script>
   </head>
   <body style="">
      <header class="header" role="banner">
         <div class="container">
            <h1 class="project-name">Nome Usuario</h1>
         </div>
      </header>
      <main class="main">
         <span class="bg-shortcut-workaround" style="height: 367px;"></span>
         <div class="container">
            <div class="row">
               <div class="col-md-12 content" role="main">
                  <div class="panel-collapse in" style="height: auto;">
                     <div class="panel-body">
                         <form id="formTipoConta" role="form" method="POST">
                           <fieldset>
                              <legend>Cadastro de tipo de conta</legend>
                              <div class="row">
                                  <input type="hidden" name="idConta" value="<?php echo $_GET['idConta'];?>"/>
                                 <div class="form-group col-lg-4">
                                    <label for="descricaoConta">Descrição da conta</label>
                                    <input type="text" class="form-control" name="descricaoConta" id="descricaoConta" placeholder="Insira a descrição da conta">
                                 </div>
                                 <div class="form-group col-lg-4">
                                    <label for="limiteMaxConta">Limite máximo da conta</label>
                                    <input type="text" class="form-control" name="limiteMaxConta" id="limiteMaxConta" placeholder="Insira o limite máxima para tamanho da conta em MB">
                                 </div>
                                 <div class="form-group col-lg-4">
                                    <label for="limiteMaxArquivo">Limite máximo do arquivo</label>
                                    <input type="text" class="form-control" name="limiteMaxArquivo" id="limiteMaxArquivo" placeholder="Insira o limite máxima para tamanho do arquivo em MB">
                                 </div>
                              </div>
                              <button onclick="validarCamposMandatorios();" class="btn btn-default">Enviar</button>
                              <button onclick="return false;" class="btn btn-warning">Limpar</button>			
                           </fieldset>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
   </body>   
</html>
