<?php
$bd = new PDO('mysql:host=localhost;dbname=dwes;charset=utf8', 'dwes', 'abc123');
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
// Usuario
/* if (isset($_GET['u'])) {
        $consulta = $bd->prepare("SELECT id FROM users WHERE lower(username) = lower(:username)");
        $consulta->execute(['username' => $_GET['u']]);
        $idBD = $consulta->fetch();    
        if ($idBD != null) {
            echo "El usuario ya existe";
        } else {
            echo "OK";
            }
        } 
        else {
            echo "";
        } */
?>