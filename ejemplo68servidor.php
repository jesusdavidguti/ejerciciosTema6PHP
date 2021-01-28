<?php
    //
    // ejemplo68servidor.php
    //

    $q=$_GET["q"];
    $bd = new PDO('mysql:host=localhost;dbname=usuario;charset=utf8', 'usuario', 'usuario');

    $consulta = $bd->prepare("SELECT cod, nombre_corto, descripcion, PVP FROM producto WHERE cod = :cod");
    $consulta->execute(['cod' => $_GET['q']]);
    if ($producto = $consulta->fetch()) {

        echo json_encode($producto);
    }
?>