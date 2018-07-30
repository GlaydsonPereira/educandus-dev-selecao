<?php

include '../repositorio/arquivo.php';
include '../repositorio/arquivoRepositorio.php';


$repositorio = new ArquivoRepositorio();

var_dump($repositorio->consultarTodosMeus(3));
?>