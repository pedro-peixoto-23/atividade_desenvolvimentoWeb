<?php

    // Discente: Pedro Peixoto Viana de Oliveira

    $codigo_produto = (int) $_POST["codigo"];
    $quantidade_produto = (int) $_POST["quantidade"];

    if ($codigo_produto >= 1 && $codigo_produto <= 10) {
        $preco_produto = 10.0;
        $preco_total = $quantidade_produto * $preco_produto;
    } else if ($codigo_produto >=  11 && $codigo_produto <= 20) {
        $preco_produto = 15.0;
        $preco_total = $quantidade_produto * $preco_produto;
    } else if ($codigo_produto >= 21 && $codigo_produto <= 30) {
        $preco_produto = 20.0;
        $preco_total = $quantidade_produto * $preco_produto;
    } else if ($codigo_produto >= 31 && $codigo_produto <= 40) {
        $preco_produto = 30.0;
        $preco_total = $quantidade_produto * $preco_produto;
    } else {
        echo "Você inseriu um código inválido, tente novamente!";
    }

    if ($preco_total >= 500) { // maior ou igual a 500
        $valor_desconto = "15%";
        $preco_total_desconto = $preco_total * 0.85; // desconto de 15% 
    } else if ($preco_total > 250) { // maior que 250 e menor que 500
        $valor_desconto = "10%";
        $preco_total_desconto = $preco_total * 0.90; // desconto de 10%
    } else { // menor ou igual a 250
        $valor_desconto = "5%";
        $preco_total_desconto = $preco_total * 0.95; // desconto de 5% 
    }

    echo "
    <h4>Informações da compra</h4>
        <table border '1'>
            <tr>
                <th>Codigo</th>
                <th>Valor Unidade</th>
                <th>Quantidade</th>
                <th>Preço bruto</th>
                <th>Desconto</th>
                <th>Preço final com desconto</th>
            </tr>
            <tr>
                <td>$codigo_produto</td>
                <td>$preco_produto</td>
                <td>$quantidade_produto</td>
                <td>$preco_total</td>
                <td>$valor_desconto</td>
                <td>$preco_total_desconto</td>
            </tr>
        </table>";

?>
