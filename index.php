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
        <form id="formulario" action="login.php" method="POST">
        <fieldset>

        <legend>Login</legend>
        
        <p>
            <label for="email">Email:</label>
            <input name="email" id="email" type="text" />
        </p>
        
        <p>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" type="text" />
        </p>

        </fieldset>

        <p>
        <input type="submit" value="Entrar" id="entrar" name="entrar">
        <a href="telaCadastro.php">Cadastre-se</a>
         </p>

        </form>
        <?php
        
        ?>
    </body>
</html>
