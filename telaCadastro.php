<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form id="formulario" action="cadastrar.php" method="POST">
        <fieldset>

        <legend>Cadastro</legend>
        
        <p>
            <label for="email">Email:</label>
            <input name="email" id="email" type="text" />
        </p>
        
        <p>
            <label for="senha">Senha:</label>
            <input name="senha" id="senha" type="text" />
        </p>

        </fieldset>

        <p>
        <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
         </p>

        </form>
        <?php
        
        ?>
    </body>
</html>
