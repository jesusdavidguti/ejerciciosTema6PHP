<?php
    // ejemplo65servidor.php
    header('Content-Type: text/xml'); // Esta línea indica que la respuesta es XML
    header("Cache-Control: no-cache, must-revalidate"); // Esta línea ayuda a que la respuesta no se incluya en caché
    // Fecha caducada
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Esta línea ayuda a que la respuesta no se incluya en caché

    $q=$_GET["q"];
    $bd = new PDO('mysql:host=localhost;dbname=usuario;charset=utf8', 'usuario', 'usuario');
    echo '<?xml version="1.0" encoding="ISO-8859-1"?>
    <producto>';
    $consulta = $bd->prepare("SELECT cod, nombre_corto, descripcion, PVP FROM producto WHERE cod = :cod");
    $consulta->execute(['cod' => $_GET['q']]);
    if ($producto = $consulta->fetch()) {
        echo "<cod>" . $producto['cod'] . "</cod>";
        echo "<nombre_corto>" . $producto['nombre_corto'] . "</nombre_corto>";
        echo "<descripcion>" . $producto['descripcion'] . "</descripcion>";
        echo "<pvp>" . $producto['PVP'] . "</pvp>";

    }
    echo "</producto>";
?>