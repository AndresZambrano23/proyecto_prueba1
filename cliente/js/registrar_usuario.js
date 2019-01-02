$(document).ready(function(){
	$("#btnregistrar").click(function(){
        
		var varNombre = $("#name").val();
		var varApellido = $("#apellido").val();
		var varTelefono = $("#tel").val();
        alert(varNombre);

		var parametros = {
			'nombre':varNombre,
			'apellido':varApellido,
			'celular':varTelefono,
		};

		$.ajax({
			url:"http://localhost/practicas/proyecto%201/servicios/vistas/registraruser.php",
			type:"POST",
			data:parametros,
			dataType:"json",
			success:function(dato){
				// $("#info").text(dato);
				alert('Registrado Con Exito'+dato);
				console.log(dato);
				self.location.href ='login.php';
				return false;		
			},
			error:function(dato){
				alert('registrado'+dato);
				console.log(dato);
				self.location.href ='login.php';
				return false;
			}
		});
	});

	$("#btnregresar").click(function(){
		alert('regresando');
		self.location.href ='login.php';
		return false;
	});
});
