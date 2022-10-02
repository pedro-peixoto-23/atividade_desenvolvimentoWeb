<?php

    // Discente: Pedro Peixoto Viana de Oliveira

    $opcao_usuario = (int) $_POST["opcao_usuario"];
    $salario_usuario = (float) $_POST["salario_usuario"];

    switch ($opcao_usuario) {

        case 1:
            echo "<b>Dados sobre o imposto do seu salário</b><br><br>";

            if ($salario_usuario > 850) { // maior que 800
                echo "- Salário maior que 850 reais, imposto: 15%;<br>";
                $imposto = $salario_usuario * 0.15;
            } else if ($salario_usuario >= 500) { // entre 500 e 850
                echo "- Salário entre 500 (inclusive) e 800 (inclusive) reais, imposto: 10%;<br>";
                $imposto = $salario_usuario * 0.10;
            } else { // sobra apenas menor que 500
                echo "- Salário menor que 500 reais, imposto: 5%;<br>";
                $imposto = $salario_usuario * 0.05;
            }
            $salario_imposto = $salario_usuario - $imposto;
            
            echo "- Salário total: $salario_usuario reais;<br>";
            echo "- Imposto: $imposto reais;<br>";
            echo "- Salário descontado: $salario_imposto reais.";

            break;
        
        case 2:
            echo "<b>Dados sobre o seu novo salário</b><br><br>";

            if ($salario_usuario > 1500) { // maior que 1500
                echo "- Aumento para salários acima de 1500 reais: R$25,00;<br>";
                $novo_salario = $salario_usuario + 25;
            } else if ($salario_usuario >= 750) { // menor que 1500 e maior ou igual a 750
                echo "- Aumento para salários entre 750 (inclusive) e 1500 (inclusive) reais: R$50,00;<br>";
                $novo_salario = $salario_usuario + 50;
            } else if ($salario_usuario >= 450) { // menor que 750 e maior ou igual a 450
                echo "- Aumento para salários entre 450 (inclusive) e 749 (inclusive) reais: R$75,00;<br>";
                $novo_salario = $salario_usuario + 75;
            } else { // menor que 450
                echo "- Aumento para salários menores que 450 reais: R$100,00;<br>";
                $novo_salario = $salario_usuario + 100;
            }

            echo "- Antigo salário: $salario_usuario reais;<br>";
            echo "- Novo salário: $novo_salario reais;<br>";

            break;
        
        case 3: 
            echo "<b>Dados sobre a sua classificação</b><br><br>";
            echo "- Seu salário: $salario_usuario reais;<br>";

            if ($salario_usuario > 700) { // maior que 700
                echo "- Salário maior que 700 reais: bem remunerado.";
            } else { // menor ou igual a 700
                echo "- Salário menor ou igual a 700 reais: mal remunerado.";
            }

            break;

        default:
            echo "<h1>Opção inválida, tente novamente!</h1>";
            break;
    }

?>
