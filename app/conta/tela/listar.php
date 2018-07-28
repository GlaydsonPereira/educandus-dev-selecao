<!DOCTYPE html>
<html lang="pt-br" class="color-blue with-lwbar-both media-desk-lg">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Listagem de tipo conta</title>
      <link rel="stylesheet" type="text/css" href="../../recursos/css/bootstrap.css">
      <link href="../../recursos/css/folha_estilo.css" media="all" rel="stylesheet" type="text/css">
   </head>
   <body style="">
      <div id="lwbar-header">
      </div>
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
                         <form role="form" method="POST" action="./cadastro.php">
                           <fieldset>
                                <legend>Listagem de tipo de conta</legend>                              
                                <button onclick="return false" class="btn btn-danger">Deletar</button>
                                <button class="btn btn-info">Novo</button>
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