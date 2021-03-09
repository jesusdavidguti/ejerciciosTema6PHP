function buscaProducto(str) {
    
    let puntero = document.getElementById("areaMensaje");
    let cadena = "";

    if (str.length == 0) {
        document.getElementById("areaMensaje").innerHTML = "";
        return;
    } else {

        fetch('busquedaServidor.php?q=' + str)
            .then(function(response) { 
                return response.json(); // Este devuelve un json
                //return response.text(); // Este response devuelve los datos en crudo.
            })
            .then(function(producto) { // lo recibimos en el parámetro "producto"

                if (producto.length > 0){
                    cadena = "Producto existe con id = " + producto[0].id
                }
                else{
                    cadena = "";
                }

                puntero.innerHTML = cadena;

                /* document.getElementById("spnNombreCorto").innerHTML=
                producto.nombre_corto;
                document.getElementById("spnDescripcion").innerHTML=
                producto.descripcion;
                document.getElementById("spnPVP").innerHTML=
                producto.PVP;
                document.getElementById("ficha").style.display = "block";  */               
            })
            .catch();
    }
}

function cargarProductos() {
    
    let puntero = document.getElementById("areaDatos");
    let cadena = "";


    fetch('examenServidor.php')        
        .then(function(response) { 
            //alert(response.json());
            return response.json(); // Este devuelve un json
            //return response.text(); // Este response devuelve los datos en crudo.
        })
        .then(function(productos) { // lo recibimos en el parámetro "productos"

            // Mostrar datos HTML

            cadena = "<ul>";

            productos.forEach(producto => {
                cadena += "<li>" + producto.producto + "</li>"
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