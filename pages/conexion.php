<?php

    $server = "localhost";
    $usuario = "root";
    $pass = "";
    $BD = "administracion";
    $conexion = mysqli_connect($server, $usuario, $pass, $BD);

    $tec = mysqli_query($conexion, "SELECT * FROM tecnicatura ORDER BY desctec");
    $fanio = mysqli_query($conexion, "SELECT * FROM anio ORDER BY descanio");
?>
