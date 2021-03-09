function cargar_productos() {
    
    let puntero = document.getElementById("areaDatos");
    let cadena = "";


    fetch('examenServidor.php')        
        .then(function(response) { 
            //alert(response.json());
            return response.json(); // Este devuelve un json
            //return response.text(); // Este response devuelve los datos en crudo.
        })
        .then(function(productos) { // lo recibimos en el parámetro "noticia"

            // Mostrar datos HTML

            cadena = "<ul>";

            array.forEach(productos => {
                cadena += "<li>" + productos.producto + "</li>"
            });

            cadena += "</ul>";

/*             cadena = "<table>";
            cadena += "<th>Id</th><th>Titular</th><th>Entradilla</th><th>Cuerpo</th><th>Fecha</th>";
            noticias.forEach(noticia => {

                cadena += "<tr>";
                cadena += "<td>" + noticia.id + "</td>" + 
                        "<td>" + noticia.titular + "</td>" + 
                        "<td>" + noticia.entradilla + "</td>" + 
                        "<td>" + noticia.cuerpo + "</td>" +
                        "<td>" + noticia.fecha + "</td>" 
                        ;
                cadena += "</tr>";                        

                });
            cadena += "</table>";    
 */            
            puntero.innerHTML = cadena;                                                    
        })
        .catch(err => {
                alert ("Error en la recuperación de datos" + err);
            });

}