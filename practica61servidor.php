<?php
    //
    // Práctica 6.1: HackBlog Widget
    // A partir de la pŕatica del HackBlog de la UT 3, crea un script que devuelva (en JSON o XML) 
    // una lista de las últimas noticias añadidas al hacer una petición GET, 
    // con un parámetro llamado num que indicará el número de noticias que se quiere 
    // obtener (si num es 5, devolverá las 5 últimas noticias).
    //

    header('Content-Type: application/json'); // Esta línea indica que la respuesta es JSON
    header("Cache-Control: no-cache, must-revalidate"); // Esta línea ayuda a que la respuesta no se incluya en caché
    // Fecha caducada
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Esta línea ayuda a que la respuesta no se incluya en caché

    $num=$_GET["num"];

    try{
        $bd = new PDO('mysql:host=localhost;dbname=hackBlog;charset=utf8', 'usuario', 'usuario');
    }
    catch (PDOException $e){
        echo $e->getMessage(); 
    }

    $q = "SELECT id, titular, entradilla, cuerpo, fecha FROM noticias LIMIT ".$num;
    $consulta = $bd->query($q); 
    $noticias = $consulta->fetchAll();
    
    echo json_encode($noticias);
        
?>