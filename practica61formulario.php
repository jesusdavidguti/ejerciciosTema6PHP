<html>
    <!-- practica61formulario.php -->
<head>
    <meta charset="utf8" />
    <script src="practica61.js"></script>
<style>
    table, th, td {
     border: 1px solid black;   
     border-collapse: collapse;
    }
</style>
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
            <option value="4">4</option>                                    
            <option value="5">5</option>                                                            
    </select>
</form>

    <div id="areaDatos"></div>

</body>

</html>