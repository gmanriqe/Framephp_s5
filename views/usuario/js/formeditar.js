if(jQuery != 'undefined'){
	$(document).ready(inicializadora);
	
	function inicializadora(){
		$('#btnGuardar').click(validar);
		alert('hola formeditar');
	}
	
	function validar(){
		var idusuario = $('#idusuario').val();
		var nombre = $('#nombre').val();
		var email = $('#email').val();
		var rol = $('#rol').val();
		
		if(nombre == ''){
			alert('Ingrese nombre');
		}else if(email == ''){
			alert('Ingrese email');
		}else {
			$('#usuarioEditar').submit();
		}
	}
}else {
	alert('No cargo jQuery');
}