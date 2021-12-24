<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 05</title>
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

    echo "<table class='table table-striped'><thead><tr><th>Tabuada do $N</th></tr></thead><tbody>";

    for ($i = 1; $i <= 10 ; $i++){
    echo "<tr><td>$N x $i = ".$N * $i."</tr></td>";
    }
    echo "</tbody>";
}
?>
</body>
</html>