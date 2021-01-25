// ejemplo4.js
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
                var xmlDoc = this.responseXML;
                document.getElementById("spnNombreCorto").innerHTML=
                xmlDoc.getElementsByTagName("nombre_corto")[0].childNodes[0].nodeValue;
                document.getElementById("spnDescripcion").innerHTML=
                xmlDoc.getElementsByTagName("descripcion")[0].childNodes[0].nodeValue;
                document.getElementById("spnPVP").innerHTML=
                xmlDoc.getElementsByTagName("pvp")[0].childNodes[0].nodeValue;
                document.getElementById("ficha").style.display = "block";                
            }
        };
        xmlhttp.open("GET", "ejemplo65servidor.php?q=" + str, true);
        xmlhttp.send();
    }
}