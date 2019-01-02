function validarusuario(){
    var varusuario = $("#nombre").val();
        var URL = "http://localhost/practicas/proyecto%201/servicios/vistas/ingresouser.php";
        var request = new XMLHttpRequest();
        request.open('GET', requestURL);
        request.responseType = 'json';
    request.send();
    request.onload = function() {
        var superHeroes = request.response;
        populateHeader(superHeroes);
        showHeroes(superHeroes);
      }
        $.ajax({
            type: "GET",
              dataType: "json",
              async: true,
              url: URL,
              datos: varusuario,
              error: function (e) {
        alert("Error al enviar los datos")
        },
              success: function(data) {
                alert("Bienvenido");
                  }
        
              });

}


  