<?php

require "Operacao.php";
require "Calculadora.php";

$op = new Operacao('soma',10,20);
$Calculadora = new Calculadora($op);


$Calculadora->acao();

