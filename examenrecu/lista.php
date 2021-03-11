<?php
try {
    $opciones = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $bd = new PDO('mysql:host=localhost;dbname=dwes;charset=utf8', 'usuario', 'usuario', $opciones);
} catch (PDOException $e) {
    exit($e->getMessage());
}

    $resultado = $bd->query("SELECT id, comunidad FROM comunidades");
while ($registro = $resultado->fetch()) {
    echo '<option value="' . $registro['id'] . '">' . $registro['comunidad'] . '</option>';
}
