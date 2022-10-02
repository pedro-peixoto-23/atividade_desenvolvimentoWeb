<?php

    // Discente: Pedro Peixoto Viana de Oliveira

    $nome = $_GET["nome"];
    $peso = (float) $_GET["peso"];
    $altura = (float) $_GET["altura"];

    $imc = $peso / ($altura * $altura);

    if ($imc >= 40) { // maior ou igual a 40
        $estado = "Obesidade grau III (Mórbida)";
    } else if ($imc >= 35) { // maior ou igual a 35 e menor que 40
        $estado = "Obesidade grau II (Severa)";
    } else if ($imc >= 30) { // maior ou igual a 30 e menor que 35
        $estado = "Obesidade grau I";
    } else if ($imc >= 25) { // maior ou igual a 25 e menor que 30
        $estado = "Levemente acima do peso";
    } else if ($imc >= 18.6) { // maior ou igual a 18.6 e menor que 25
        $estado = "Peso ideal";
    } else { // abaixo de 18.6
        $estado = "Abaixo do peso";
    }

    echo "
    <h4> Tabela de informações </h4>
        <table border '1'>
            <tr>
                <th>Nome</th>
                <th>Peso</th>
                <th>Altura</th>
                <th>IMC</th>
                <th>Estado</th>
            </tr>
            <tr>
                <td>$nome</td>
                <td>$peso</td>
                <td>$altura</td>
                <td>$imc</td>
                <td>$estado</td>
            </tr>
        </table>";

?>
