<?php
// ejemplo5servidor.php
header('Content-Type: application/json'); // Esta línea indica que la respuesta es JSON
header("Cache-Control: no-cache, must-revalidate"); // Esta línea ayuda a que la respuesta no se incluya en caché
// Fecha caducada
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Esta línea ayuda a que la respuesta no se incluya en caché

$q=$_GET["q"];
$bd = new PDO('mysql:host=localhost;dbname=dwes;charset=utf8', 'usuario', 'usuario');

$consulta = $bd->prepare("SELECT nombre, apellido, edad, ciudad, trabajo FROM familyguy WHERE id = :id");
$consulta->execute(['id' => $_GET['q']]);
if ($persona = $consulta->fetch()) {
    echo json_encode($persona);
}