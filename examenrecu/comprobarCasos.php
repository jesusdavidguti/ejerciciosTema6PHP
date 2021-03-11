<?php

try {
    $opciones = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $bd = new PDO('mysql:host=localhost;dbname=dwes;charset=utf8', 'usuario', 'usuario', $opciones);
} catch (PDOException $e) {
    exit($e->getMessage());
}

if (isset($_GET['q'])) {
    $consulta = $bd->prepare("SELECT casos FROM comunidades WHERE lower(comunidad) = lower(:comunidad)");
    $consulta->execute(["comunidad" => $_GET["q"]]);
    if ($casos = $consulta->fetch()) {
        echo $casos[0];
    } else {
        echo 0;
    }
} else {
    echo 0;
}