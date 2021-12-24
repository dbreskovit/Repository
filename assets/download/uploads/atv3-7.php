<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wiDh=device-wiDh, initial-scale=1.0">
    <title>Atividade 07</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></head>
<body>
<form method="POST">
Valor: <input  type="number" name="input">
Parcelas: <select  name="select">
            <option value="6">06 meses - taxa 1,2%/m</option>
            <option value="12">12 meses - taxa 1,8%/m</option>
            <option value="24">24 meses - taxa 2,0%/m</option>
            <option value="36">36 meses - taxa 2,5%/m</option>
            <option value="48">48 meses - taxa 2,8%/m</option>
        </select>
    <button type="submit" name="submit">Enviar</button>
</form>

<?php
if(isset($_POST['submit']) && !empty($_POST['input']))
{
    $V = $_POST['input'];
    $QP = $_POST['select'];
    $D = date_create(date('Y/m/d'));

    switch ($QP) 
    {
        case 6: $T = 0.012;
        break;

        case 12: $T = 0.018;
        break;
        
        case 24: $T = 0.02;
        break;
        
        case 36: $T = 0.025;
        break;
        
        case 48: $T = 0.028;
        break;
    }

    $CF = ($T/(1 - (1/pow(1+$T,$QP))));
    $P = $V * $CF;
    $M = $P * $QP;
    $J = $M - $V; 

    echo "<table class='table table-striped'><thead><tr><th scope='col'>Numero de parcelas</th>
                <th scope='col'>Data</th><th scope='col'>Parcela</th><th scope='col'>Juros</th><th scope='col'>Valor da parcela</th>
                </tr></thead><tbody>";

    for ($i = 1; $i <= $QP; $i++){   
      date_add($D, date_interval_create_from_date_string("+1 month"));
      
      echo "<tr>
                <th scope='row'>".$i."</th>
                <td>".date_format($D, 'd/m/Y')."</td>
                <td>R$ ".number_format($V/$QP,2,',','.')."</td>
                <td>".number_format($J/$QP,2,',','.')."</td>
                <td>R$ ".number_format($P,2,',','.')."</td>
            </tr>
      ";
    }

    echo "<tr>
            <th scope='row' colspan='4'>Total de Juros:</th>
            <th colspan='1'>R$ ".number_format($J,2,',','.')."</th>
            </tr><tr>
            <th scope='row' colspan='4'>Montante:</th>
            <th colspan='1'>R$ ".number_format($M,2,',','.')."</th>
           </tr></tbody></table>";
}
?>
</body>
</html>