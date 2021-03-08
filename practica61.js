//
// practica61.js
//
function mostrarNoticia(str) {
    
    let puntero = document.getElementById("areaDatos");
    let cadena = "";

    if (str.length == 0) {
        puntero.innerHTML = cadena;                                                    
    } else {

        fetch('practica61servidor.php?num=' + str)        
            .then(function(response) { 
                //alert(response.json());
                return response.json(); // Este devuelve un json
                //return response.text(); // Este response devuelve los datos en crudo.
            })
            .then(function(noticias) { // lo recibimos en el parámetro "noticia"

                // Insertar tabla            
                cadena = "<table>";
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
                
                puntero.innerHTML = cadena;                                                    
            })
            .catch(err => {
                    alert ("Error en la recuperación de datos" + err);
                });
    }
}