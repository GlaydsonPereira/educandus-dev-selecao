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
        <form id="formulario" action="../repositorio/cadastrar.php" method="POST">
        <fieldset>

        <legend>Cadastro</legend>
        
        <p>
            <label for="email">Email:</label>
            <input name="email" id="email" type="text" />
        </p>
        
        <p>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" type="text" size="20" required/>
        </p>
        <?php
         $con = new mysqli('localhost','root','','selecao_educandus' ) or die (mysql_error());         
        $query = $con->query("SELECT * FROM contas");?>   
        <select name="tipoConta">
            <?php while($reg = $query->fetch_array()) {?>
                <option value="<?php echo $reg["idcontas"]?>"><?php echo $reg["descricao"]?></option>   
            <?php }?>
        </select>
        </fieldset>

        <p>
        <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
         </p>

        </form>     
   
    </body>
</html>
