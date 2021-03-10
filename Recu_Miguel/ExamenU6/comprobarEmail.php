<?php

try {
    $opciones = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $bd = new PDO('mysql:host=localhost;dbname=examenu6;charset=utf8', 'root', 'usuario', $opciones);
} catch (PDOException $e) {
    exit($e->getMessage());
}

if (isset($_GET['q'])) {
    $consulta = $bd->prepare("SELECT id FROM suscriptores WHERE lower(email) = lower(:email)");
    $consulta->execute(["email" => $_GET["q"]]);
    if ($usuario = $consulta->fetch()) {
        echo "El email insertado ya está en la BD";
    } else {
        echo "Email no registrado en la BD";
    }
} else {
    echo "";
}