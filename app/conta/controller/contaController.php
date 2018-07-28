<?php

include '../model/conta.php';
include '../model/contaRepositorio.php';

$conta = new Conta($_POST['descricaoConta'], $_POST['limiteMaxConta'], $_POST['limiteMaxArquivo']);


$repositorio = new ContaRepositorio();

?>