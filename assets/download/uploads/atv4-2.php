<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 02</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></head>
</head>

<body>

<form method="POST">
Função: <select  name="select">
            <option selected disabled>Selecione uma função</option>
            <option value="1">array_rand</option>
            <option value="2">array_sum</option>
            <option value="3">in_array</option>
            <option value="4">sort</option>
        </select>
<button type="submit" name="submit">Enviar</button>
</form>

<?php

if(isset($_POST['submit']) && !empty($_POST['select']))
{

    $option = $_POST['select'];

    switch($option)
    {
        case 1:
            $planets = array("Mercúrio","Vênus","Terra","Marte","Júpiter","Saturno","Urano","Netuno");
            $key = array_rand($planets ,1);

            echo"<div class='card bg-light mb-3' style='max-width: 30rem;'><div class='card-header'>array_rand</div><div class='card-body'>
                <h5 class='card-title'>Descrição:</h5>
                <p class='card-text text-justify'>Escolhe aleatóriamente um ou mais itens de um array, e retorna a chave (ou chaves) do item selecionado.</p>
                <h5>Sintaxe:</h5>
                <p class='card-text'>array_rand(array \$array, int \$num = 1): mixed</p>
                <hr>
                <h5 class='card-title'>Exemplo:</h5>
                <p class='card-text'><strong>Array(\$planets)</strong></p><p class='card-text'>";
            print_r(array_values($planets));
            echo "</p><p class='card-text'><strong>Item Randômico(\$key)</strong></p>";
            print_r("[".$key."] ".$planets[$key]);
            echo"</div>";
            break;

        case 2:
            $num = array(2,4,6,8);
            $sum = array_sum($num);

            echo"<div class='card bg-light mb-3' style='max-width: 30rem;'><div class='card-header'>array_sum</div><div class='card-body'>
                <h5 class='card-title'>Descrição:</h5>
                <p class='card-text text-justify'>Retorna a soma de valores como um inteiro ou float.</p>
                <h5>Sintaxe:</h5>
                <p class='card-text'>array_sum(array \$array): number</p>
                <hr>
                <h5 class='card-title'>Exemplo:</h5>
                <p class='card-text'><strong>Array(\$num)</strong></p><p class='card-text'>";
            print_r(array_values($num));
            echo "</p><p class='card-text'><strong>Soma(\$sum)</strong></p>";
            print_r($sum);
            echo"</div>";
            break;

        case 3:
            $colors = array("White","Black","Yellow","Blue","Gray","Purple","Green","Red","Violet");
           

            echo"<div class='card bg-light mb-3' style='max-width: 30rem;'><div class='card-header'>in_array</div><div class='card-body'>
                <h5 class='card-title'>Descrição:</h5>
                <p class='card-text text-justify'>Checa se um valor existe em um array (caso for uma string, a comparação é feita diferenciando caracteres maiúsculos e minúsculos).</p>
                <h5>Sintaxe:</h5>
                <p class='card-text'>array_sum(array \$array): number</p>
                <hr>
                <h5 class='card-title'>Exemplo:</h5>
                <p class='card-text'><strong>Array(\$colors)</strong></p><p class='card-text'>";
            print_r(array_values($colors));
                echo"<p class='card-text'><strong>Verificar se \"White\" está no array</strong></p><p class='card-text'>";
            
            if (in_array("White", $colors)) { 
                echo "<p style='color:green;'>Tem White";
            } else echo "<p style='color:red;'>Não tem";
          
            echo"</div>";
            break;

        case 4:
            $num = array(25,5,8,17,1);

            echo"<div class='card bg-light mb-3' style='max-width: 30rem;'><div class='card-header'>sort</div><div class='card-body'>
                <h5 class='card-title'>Descrição:</h5>
                <p class='card-text text-justify'>Essa função ordena um array. Os elementos serão ordenados do menor para o maior ao final da execução dessa função.</p>
                <h5>Sintaxe:</h5>
                <p class='card-text'>sort(array &\$array, int \$sort_flags = SORT_REGULAR): bool</p>
                <hr>
                <h5 class='card-title'>Exemplo:</h5>
                <p class='card-text'><strong>Array desordenada(\$num)</strong></p><p class='card-text'><p>";
            print_r($num);
            echo"</p><p class='card-text'><strong>Array Ordenada(\$num)</strong></p><p class='card-text'><p>";
            sort($num);
            print_r($num);
            echo"</p></div>";
            break;
    }
}

?>

</body>
</html>