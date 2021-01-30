<?php
    //
    // Práctica 6.1: HackBlog Widget
    // A partir de la pŕatica del HackBlog de la UT 3, crea un script que devuelva (en JSON o XML) 
    // una lista de las últimas noticias añadidas al hacer una petición GET, 
    // con un parámetro llamado num que indicará el número de noticias que se quiere 
    // obtener (si num es 5, devolverá las 5 últimas noticias).
    //

    $num=$_GET["num"];
    $contRegistros = 0;

    $bd = new PDO('mysql:host=localhost;dbname=hackBlog;charset=utf8', 'usuario', 'usuario');

    $consulta = $bd->query("SELECT id, titular, entradilla, cuerpo, fecha FROM noticia");
    while (($noticia =  $consulta->fetch()) && ($contRegistros < $num)){
        echo json_encode($noticia);
        $contRegistros++;
    }

?>