<?php
// ejemplo67formulario.php
$bd = new PDO('mysql:host=localhost;dbname=usuario;charset=utf8', 'usuario', 'usuario');
?>
<html>

<head>
    <meta charset="utf8" />
    <script src="ejemplo65.js"></script>
</head>

<body>

<form>
    <label for="selProducto">Seleccione un producto:</label>
    <select name="selProducto" onchange="mostrarProducto(this.value)">
            <option value="">Seleccione...</option>
<?php
$resultado = $bd->query('SELECT cod, nombre_corto, descripcion, PVP FROM producto ORDER BY nombre_corto ASC');
while ($producto = $resultado->fetch()) {
    echo '<option value="' . $producto['cod'] . '">' . $producto['nombre_corto'] . '</option>';
}
?>
    </select>
</form>
    <div id="ficha" style="display: none;">
    <!-- <h2><span id="spnNombreCorto"></span> <span id="spnDescripcion"></span><span id="spnPVP"></span></h2> -->
    <p><strong>Nombre</strong>: <span id="spnNombreCorto"></span></p>
    <p><strong>Descripción</strong>: <span id="spnDescripcion"></span></p>
    <p><strong>Precio</strong>: <span id="spnPVP"></span></p>
    </div>
    </div>

</body>

</html>