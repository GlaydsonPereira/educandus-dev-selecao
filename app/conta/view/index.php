<!DOCTYPE html>
<html lang="pt-br" class="color-blue with-lwbar-both media-desk-lg">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Cadastro tipo conta</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black-translucid">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <link rel="stylesheet" type="text/css" href="../../recursos/css/bootstrap.css">
      <link href="../../recursos/css/folha_estilo.css" media="all" rel="stylesheet" type="text/css">
   </head>
   <body style="">
      <div id="lwbar-header">
      </div>
      <header class="header" role="banner">
         <div class="container">
            <h1 class="project-name"<?php echo $_SESSION['emailUsuario']; ?></h1>
         </div>
      </header>
      <main class="main">
         <span class="bg-shortcut-workaround" style="height: 367px;"></span>
         <div class="container">
            <div class="row">
               <div class="col-md-12 content" role="main">
                  <div class="panel-collapse in" style="height: auto;">
                     <div class="panel-body">
                        <form role="form" action="../controller/contaController.php">
                           <fieldset>
                              <legend>Cadastro de tipo de conta</legend>
                              <div class="row">
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
                              <button type="submit" class="btn btn-default">Enviar</button>
                              <button class="btn btn-warning">Limpar</button>
							  <button class="btn btn-danger">Deletar</button>
                           </fieldset>
                        </form>
                     </div>
                  </div>

                  <table class="table ls-table" id="tabContas">
                     <thead>
                        <tr>
                           <th class="txt-center"><input type="checkbox"></th>
                           <th>Descrição</th>
                           <th>Tamanho limite da conta</th>
                           <th>Tamanho limite do arquivo</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <td class="txt-center"><input type="checkbox"></td>
                           <td><a href="http://opensource.locaweb.com.br/locawebstyle-v2/manual/exemplos/uma-coluna/" title="">Mensagem Teste Locastyle 0</a></td>
                           <td class="hidden-xs">Campanha 0</td>
                           <td>Enviada</td>
                        </tr>
                        <tr>
                           <td class="txt-center"><input type="checkbox"></td>
                           <td><a href="http://opensource.locaweb.com.br/locawebstyle-v2/manual/exemplos/uma-coluna/" title="">Mensagem Teste Locastyle 1</a></td>
                           <td class="hidden-xs">Campanha 1</td>
                           <td>Enviada</td>
                        </tr>
                        <tr>
                           <td class="txt-center"><input type="checkbox"></td>
                           <td><a href="http://opensource.locaweb.com.br/locawebstyle-v2/manual/exemplos/uma-coluna/" title="">Mensagem Teste Locastyle 2</a></td>
                           <td class="hidden-xs">Campanha 2</td>
                           <td>Enviada</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </main>
   </body>
</html>