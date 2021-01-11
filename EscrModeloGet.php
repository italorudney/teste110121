<?php
$dados = filter_input_array(INPUT_GET, FILTER_VALIDATE_INT);
$soma = 0;

function retornaBooleanDivisores($pNumero) {
    if (gettype($pNumero / 3) == "integer" || gettype($pNumero / 5) == "integer") {
        return true;
    } else {
        return false;
    }
}

try {
    if (!isset($dados["numero"])) {
        throw new Exception("ERRO: Informe o parametro via GET com nome 'numero'.");
    }
    if ($dados["numero"] == '') {
        throw new Exception("ERRO: Parametro não inteiro. Informe um numero inteiro positivo!!");
    }

    if ($dados["numero"] <= 0) {
        throw new Exception("Informe um numero inteiro positivo!!");
    }

    for ($i = $dados["numero"] - 1; $i > 0; $i--) {
        if (retornaBooleanDivisores($i)) {
            $soma += $i;
        }
    }
    print "O resultado da soma é : <b>$soma</b>";
} catch (Exception $exc) {
    print $exc->getMessage();
}


