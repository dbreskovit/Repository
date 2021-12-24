<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 04</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></head>
<body>
<form method="POST">
    Numero: <input type="number" name="input">
    <button type="submit" name="submit">Enviar</button>
</form>

<?php
if(isset($_POST['submit']) && !empty($_POST['input']))
{
    $N = $_POST['input'];
    $F = $N;
    
    for ($i= 1; $F > 1; $F--)
    {$i = $i * $F;}

     $F = $i;

    if ($N < 0) {
        echo "<div class='alert alert-danger'>Só aceitamos valores maiores que 0</div>";
    } else {
        echo "<div class='alert alert-info'>$N! = $F</div>";
    }
}
?>
</body>
</html>