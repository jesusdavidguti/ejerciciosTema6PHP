<?php
$bd = new PDO('mysql:host=localhost;dbname=dwes;charset=utf8', 'usuario', 'usuario');
// Mail
if (isset($_GET['q'])) {
    $consulta = $bd->prepare("SELECT id FROM users WHERE lower(email) = lower(:email)");
    $consulta->execute(['email' => $_GET['q']]);
    if ($idBD = $consulta->fetch()) {
        echo "El correo ya existe";
    } else {
        echo "OK";
        }
    } 
    else {
        echo "";
    }
?>