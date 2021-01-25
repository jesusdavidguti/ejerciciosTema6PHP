<?php
// ejemplo5formulario_jquery.php
$bd = new PDO('mysql:host=localhost;dbname=dwes;charset=utf8', 'usuario', 'usuario');
?>
<html>

<head>
    <meta charset="utf8" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
    <script src="ejemplo5_jquery.js"></script>
</head>

<body>

    <form>
<label for="selPersonaje">Seleccione un usuario:</label>
        <select name="selPersonaje">
            <option value="">Seleccione...</option>
<?php
$resultado = $bd->query('SELECT id, nombre FROM familyguy ORDER BY nombre ASC');
while ($personaje = $resultado->fetch()) {
    echo '<option value="' . $personaje['id'] . '">' . $personaje['nombre'] . '</option>';
}
?>
        </select>
    </form>
    <div id="ficha" style="display: none;">
    <h2><span id="spnNombre"></span> <span id="spnApellido"></span></h2>
    <p><strong>Profesión</strong>: <span id="spnTrabajo"></span></p>
    <p><strong>Edad</strong>: <span id="spnEdad"></span></p>
    <p><strong>Ciudad</strong>: <span id="spnCiudad"></span></p>
    </div>
    </div>

</body>

</html>

