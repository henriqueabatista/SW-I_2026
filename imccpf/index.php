<?php
require_once 'bibliotecalocall/autoload.php';
$imc = new imc();
$cpf = new cpf();

echo $imc->calcularimc(60,170);
echo "<br><br>";

echo $cpf->validarCPF(42570520829);
echo "<br><br>";
