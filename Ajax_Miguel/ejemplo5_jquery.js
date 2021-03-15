// ejemplo5_jquery.js

$( document ).ready(function() {
  // El código se ejecuta cuando la página esté cargada.
  // De lo contrario, puede que intentemos enlazar con selPersonaje cuando
  // todavía no se haya interpretado el HTML.
  $("#selPersonaje").change(function() {
    if ($(this).val().length == 0) {
      $("#spnNombre").html("");
      $("#spnApellido").html("");
      $("#spnTrabajo").html("");
      $("#spnEdad").html("");
      $("#spnCiudad").html("");
      $("#ficha").hide();
      return;
    } else {
      $.ajax({
        type: "GET",
        url: "ejemplo5servidor.php?q=" + $(this).val(),
        success: function(persona) {
          $("#spnNombre").html(persona.nombre);
          $("#spnApellido").html(persona.apellido);
          $("#spnTrabajo").html(persona["trabajo"]); // Podemos usar también este formato
          $("#spnEdad").html(persona["edad"]); // Podemos usar también este formato
          $("#spnCiudad").html(persona.ciudad);
          $("#ficha").show();
        }
      });
      return;
    }
  });
});
