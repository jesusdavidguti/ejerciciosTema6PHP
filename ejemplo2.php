<?php
//ejemplo2.php
$dwes = new mysqli('localhost', 'usuario', 'usuario', 'usuario');
if ($dwes->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
$dwes->set_charset("utf8");
if (isset($_GET['id'])) {
    $resultado = $dwes->query('SELECT id, provincia FROM provincias WHERE comunidad_id = ' . $_GET['id'] . ' ORDER BY provincia ASC');
    echo '<option value="">Seleccione...</option>';
    while ($provincia = $resultado->fetch_assoc()){
    echo '<option value="' . $provincia['id'] . '">' . $provincia['provincia'] . '</option>';
    }
} else {
    echo "";
}
?>