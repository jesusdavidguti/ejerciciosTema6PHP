<html>
    <!-- practica61formulario.php -->
<head>
    <meta charset="utf8" />
    <script src="practica61.js"></script>
</head>

<body>

<form>
    <h1>Lista de noticias</h1>

    <label for="selNumNoticias">Número noticias:</label>
    <select name="selNumNoticias" onchange="mostrarNoticia(this.value)">
            <option value="0">Seleccione...</option>
            <option value="1">1</option>
            <option value="2">2</option>                        
            <option value="3">3</option>                                    
    </select>
</form>

    <div id="ficha" style="display: none;">
    <p><strong>Nombre</strong>: <span id="spnTitular"></span></p>
    <p><strong>Descripción</strong>: <span id="spnEntradilla"></span></p>
    <p><strong>Precio</strong>: <span id="spnFecha"></span></p>
    </div>
    </div>

</body>

</html>