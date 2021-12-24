<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 01</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></head>
<body>
<form method="POST">
    Numero: <input type="number" name="input">
    <button type="submit" name="submit">Enviar</button>
</form>

<?php
if(isset($_POST['submit']) && !empty($_POST))
{
    $N = $_POST['input'];
    $B = true;

    for ($i = 2; $i <= $N; $i++){ 
        if ($N % $i == 0){
            $B = ($N != $i) ? false : true;
            break;
        }
    }
    
    if ($B == true){
        echo "<div class='alert alert-success'> $N é primo!</div>";
    } else {
        echo "<div class='alert alert-warning'> $N não é primo!</div>";
    }    
}
?>
</body>
</html>