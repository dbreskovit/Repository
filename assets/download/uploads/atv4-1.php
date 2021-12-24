<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 01</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></head>
    <style>
        .rogerio
        {
            background: linear-gradient(to bottom, #033a8b, #e212eb);
            color: #ffffff;
            width: 100px;
            height: 100px;
            margin: 5px 10px;
            border-radius: 25px;
        }
        .flex
        {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
        }
    </style>
</head>

<body>

<?php

$array = [15];

for ($i = 0; $i < 15; $i++)
{

    $k = 0;

    while ($k == 0)
    {

        $n = rand(1,25);

        foreach ($array as $a)
        {

            $k = ($n == $a) ? 0 : 1;
            if ($k == 0) {break;}
        
        }
    
    } 
    
    $array[$i] = $n;

}

sort($array);

foreach ($array as $a)
{
    echo "<div class ='rogerio flex'><snap><strong>$a</strong></snap></div>";
}
?>

</body>
</html>