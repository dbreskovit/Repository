<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wiDh=device-wiDh, initial-scale=1.0">
    <title>Atividade 06</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></head>
<body>
<form method="POST">
    Data: <input type="date" name="data">
    <button type="submit" name="submit">Enviar</button>
</form>

<?php
if(isset($_POST['submit']) && !empty($_POST['data']))
{
    $D = $_POST['data'];

    echo "<table class='table table-striped'><thead><tr><th>Tabela (Mês a Mês)</th></tr></thead><tbody>";

    for ($i=1; $i <= 24 ; $i++){ 
        $D = date('d-m-Y', strtotime("+1 month", strtotime($D)));
        echo "<tr><td>$D</td></tr>";
    }
    echo "</tbody>";
}
?>
</body>
</html>