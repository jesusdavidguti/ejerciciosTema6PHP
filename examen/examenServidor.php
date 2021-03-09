<?php
    //
    // Examen
    //

    header('Content-Type: application/json'); // Esta línea indica que la respuesta es JSON
    header("Cache-Control: no-cache, must-revalidate"); // Esta línea ayuda a que la respuesta no se incluya en caché
    // Fecha caducada
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Esta línea ayuda a que la respuesta no se incluya en caché

    try{
        $bd = new PDO('mysql:host=localhost;dbname=usuario;charset=utf8', 'usuario', 'usuario');
    }
    catch (PDOException $e){
        echo $e->getMessage(); 
    }

    $q = "SELECT id, producto, cantidad FROM compra";
    $consulta = $bd->query($q); 
    $productos = $consulta->fetchAll();
    
    echo json_encode($productos);
        
?>