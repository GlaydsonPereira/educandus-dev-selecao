<?php

include '../repositorio/conta.php';
include '../repositorio/contaRepositorio.php';

$conta = new Conta($_POST['descricaoConta'], $_POST['limiteMaxConta'], $_POST['limiteMaxArquivo']);
$repositorio = new ContaRepositorio();

var_dump($repositorio->consultarTodos());
?>