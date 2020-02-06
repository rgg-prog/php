<?php
    $sumando1 = $_GET ["sumando1"];
    $sumando2 = $_GET ["sumando2"];
    $resultado = $_GET ["resultado"];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Sumando ...</title>
</head>

<body>
    <?php
        if ($sumando1 + $sumando2 == $resultado) {
            echo ("<H1>Es Correcto</H1>");
        } else {
            echo ("<H1>No sabes sumar</H1>");
        }
    ?>

</body>

</html>