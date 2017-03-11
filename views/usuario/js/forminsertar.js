if(jQuery != 'undefinded'){
	$(document).ready(inicializadora);
	
	function inicializadora(){
		$('#btnRegistrar').click(validacion);
		alert('hola forminsertar');
	}
	
	function validacion(){
		var idusuario = $('#idusuario').val();
		var nombre = $('#nombre').val();
		var clave1 = $('#clave1').val();
		var clave2 = $('#clave2').val();
		var email = $('#email').val();
		var rol = $('#rol').val();
		
		if(idusuario == ''){
			alert('Ingrese NOMBRE');
		} else if (nombre == ''){
			alert('Ingrese NOMBRE');
		} else if (clave1 == ''){
			alert('Ingrese CONTRASEÑA');
		
		} else if (clave2 == ''){
			alert('Ingrese REPETIR CONTRASEÑA');
		
		} else if (email == ''){
			alert('Ingrese EMAIL');
		
		} else if (clave1 != clave2){
			alert('Las contraseñas no coinciden');
		} else {
//			$('#btnRegistrar').submit();
//			$.POST(URL,data,function(data,status,xhr),dataType)
			$.post('../usuario/insertar',{
				idusuario : idusuario,
				nombre : nombre,
				email : email,
				clave1 : clave1,
				rol : rol
			},function(data,status){ //callback originado si hay exito
				console.log(data); //ok
				console.log(status); //Contiene el estado de la solicitud
				 if(data == 'OK'){
					 $('#zonaRespuesta').html('<p style="color:green">se grabo</p>');
				 }else {
					 $('#zonaRespuesta').html('<p style="color:red">no se grabo</p>');
				 }
			});
		}
	}
}else {
	alert('No se cargo jQuery');
}

