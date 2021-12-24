<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$H = 1.72;
$W =  80;

$IMC = $W / ($H ** 2);
$IMC = number_format($IMC, 2);

echo "IMC: ".$IMC;
?>
</body>
</html>