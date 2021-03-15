//
// ejemplo68.js
//
function mostrarProducto(str) {
    
    if (str.length == 0) {
        document.getElementById("spnNombreCorto").innerHTML = "";
        document.getElementById("spnDescripcion").innerHTML = "";
        document.getElementById("spnPVP").innerHTML = "";
        document.getElementById("ficha").style.display = "none";
        return;
    } else {

        fetch('ejemplo68servidor.php?q=' + str)
            .then(function(response) { 
                return response.json(); // Este devuelve un json
                //return response.text(); // Este response devuelve los datos en crudo.
            })
            .then(function(producto) { // lo recibimos en el parámetro "persona"
                document.getElementById("spnNombreCorto").innerHTML=
                producto.nombre_corto;
                document.getElementById("spnDescripcion").innerHTML=
                producto.descripcion;
                document.getElementById("spnPVP").innerHTML=
                producto.PVP;
                document.getElementById("ficha").style.display = "block";                
            })
            .catch();
    }
}