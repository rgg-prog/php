<?php
    $pEsp = $_GET ["pEsp"];
    $pEsp = strtolower ($pEsp);
    $pEng = $_GET ["pEng"];
    $pEng = strtolower ($pEng);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Traduciendo ...</title>

</head>

<body>
    <?php
        if ($pEsp == "perro" && $pEng == "dog") {
            echo ("<H1>Es Correcto</H1>");
        } else if ($pEsp == "gato" && $pEng == "cat") {
            echo ("<H1>Es Correcto</H1>");
        } else if ($pEsp == "patata" && $pEng == "potatoe") {
            echo ("<H1>Es Correcto</H1>");
        } else {
            echo ("<H1>No es Correcto</H1>");
        }
    ?>

</body>

</html>