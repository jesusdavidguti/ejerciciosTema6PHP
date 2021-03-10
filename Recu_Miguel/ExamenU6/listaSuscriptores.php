<?php
try {
    $opciones = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $bd = new PDO('mysql:host=localhost;dbname=examenu6;charset=utf8', 'usuario', 'usuario', $opciones);
} catch (PDOException $e) {
    exit($e->getMessage());
}

    $resultado = $bd->query("SELECT nombre, email FROM suscriptores");
while ($registro = $resultado->fetch()) {
    echo "<li>".$registro['nombre'].": ".$registro['email']."</li>";
}
