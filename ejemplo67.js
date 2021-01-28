// ejemplo67.js
function mostrarProducto(str) {
    if (str.length == 0) {
        document.getElementById("spnNombreCorto").innerHTML = "";
        document.getElementById("spnDescripcion").innerHTML = "";
        document.getElementById("spnPVP").innerHTML = "";
        document.getElementById("ficha").style.display = "none";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                producto = JSON.parse(this.responseText);
                document.getElementById("spnNombreCorto").innerHTML=
                producto.nombrecorto;
                document.getElementById("spnDescripcion").innerHTML=
                producto.descripcion;
                document.getElementById("spnPVP").innerHTML=
                producto.pvp;
                document.getElementById("ficha").style.display = "block";                
            }
        };
        xmlhttp.open("GET", "ejemplo67servidor.php?q=" + str, true);
        xmlhttp.send();
    }
}