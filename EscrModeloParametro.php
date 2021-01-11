<?php
$numero = 10;
$soma = 0;

function retornaBooleanDivisores($pNumero) {
    if (gettype($pNumero / 3) == "integer" || gettype($pNumero / 5) == "integer") {
        return true;
    } else {
        return false;
    }
}


    if (!is_int($numero)) {
        print("ERRO: Parametro não inteiro. Informe um numero inteiro positivo!!");
		die;
    }

    if ($numero <= 0) {
        print("Informe um numero inteiro positivo!!");
		die;
    }

    for ($i = $numero - 1; $i > 0; $i--) {
        if (retornaBooleanDivisores($i)) {
            $soma += $i;
        }
    }
    print "O resultado da soma é : <b>$soma</b>";