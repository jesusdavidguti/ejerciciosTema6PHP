//
// practica61.js
//
function mostrarNoticia(str) {
    
    if (str.length == 0) {
        document.getElementById("spnTitular").innerHTML = "";
        document.getElementById("spnEntradilla").innerHTML = "";
        document.getElementById("spnFecha").innerHTML = "";
        document.getElementById("ficha").style.display = "none";
        return;
    } else {

        fetch('practica61servidor.php?num=' + str)        
            .then(function(response) { 
                return response.json(); // Este devuelve un json
                //return response.text(); // Este response devuelve los datos en crudo.
            })
            .then(function(noticias) { // lo recibimos en el parámetro "noticia"

                noticias.forEach(noticia => {

                    let puntero = document.getElementById("areaDatos");

                    // Insertar tabla



                    document.getElementById("spnId").innerHTML=
                    noticia.id;                    
                    document.getElementById("spnTitular").innerHTML=
                    noticia.titular;
                    document.getElementById("spnEntradilla").innerHTML=
                    noticia.entradilla;
                    document.getElementById("spnFecha").innerHTML=
                    noticia.fecha;    
                    
                    
                });
                document.getElementById("ficha").style.display = "block";                
            })
            .catch(err => {
                    alert ("Error en la recuperación de datos" + err);
                });
    }
}