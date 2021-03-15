<?php
//ejemplo2servidor.php
    $bd = new PDO('mysql:host=localhost;dbname=dwes;charset=utf8', 'usuario', 'usuario');

if (isset($_GET['id'])) {
    echo '<option value="">Seleccione...</option>'; // Imprimimos opción vacía

    $consulta = $bd->prepare("SELECT id, provincia FROM provincias WHERE comunidad_id = :id");
    $consulta->execute(['id' => $_GET['id']]);
    while ($provincia = $consulta->fetch()) {
        echo '<option value="' . $provincia['id'] . '">' . $provincia['provincia'] . '</option>';
    }
} else {
    echo "";
}

if (isset($_GET['idProvincia'])) {
    echo '<option value="">Seleccione...</option>'; // Imprimimos opción vacía

    $consulta = $bd->prepare("SELECT id, municipio  FROM municipios WHERE provincia_id = :id");
    $consulta->execute(['id' => $_GET['idProvincia']]);
    while ($municipio = $consulta->fetch()) {
        echo '<option value="' . $municipio['id'] . '">' . $municipio['municipio'] . '</option>';
    }
} else {
    echo "";
}

?>