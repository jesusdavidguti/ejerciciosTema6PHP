<?php
    //
    // busquedaServidor.php
    //

    $q=$_GET["q"];
    $bd = new PDO('mysql:host=localhost;dbname=usuario;charset=utf8', 'usuario', 'usuario');

    $consulta = $bd->prepare("SELECT id, producto, cantidad FROM compra WHERE id = :cod");
    $consulta->execute(['cod' => $_GET['q']]);
    if ($producto = $consulta->fetch()) {

        echo json_encode($producto);
    }
?>