<?php

function calcularimc($peso, $altura)
{
    return $peso / ($altura * $altura);
}

function classificacaoIMC($imc) {
    if ($imc < 18.5) {
        return "abaixo do peso";
    }
    if ($imc < 25) {
        return "peso normal";
    }
    if ($imc < 30) {
        return "sobrepeso";
    }
      if ($imc < 35) {
        return "obesidade";
    }
      if ($imc < 40) {
        return "obesidade grave";
    }
}