$(document).ready(function(){
	$('#btnGuardar').click(function(){
		alert('hola');
		var productCode = $('#productCode').val();
		var productName = $('#productName').val();
		var productLine = $('#productLine').val();
		var productScale = $('#productScale').val();
		var productVendor = $('#productVendor').val();
		var productDescription = $('#productDescription').val();
		var quantityInStock = $('#quantityInStock').val();
		var buyPrice = $('#buyPrice').val();
		var MSRP = $('#MSRP').val();
		
		if(productCode == ''){
			alert('Ingrese productCode');
		} else if (productName == ''){
			alert('Ingrese productName');
		} else if (productLine == ''){
			alert('Ingrese productLine');
		
		} else if (productScale == ''){
			alert('Ingrese productScale');
		
		} else if (productVendor == ''){
			alert('Ingrese productVendor');
		
		}else if (productDescription == ''){
			alert('Ingrese productDescription');
		
		} else if (quantityInStock == ''){
			alert('Ingrese quantityInStock');
		
		} else if (MSRP == ''){
			alert('Ingrese MSRP');
		} else {
//			$('#btnRegistrar').submit();
//			$.POST(URL,data,function(data,status,xhr),dataType)
			$.post('../../producto/editar',{
				productCode : productCode,
				productName : productName,
				productLine : productLine,
				productScale : productScale,
				productVendor : productVendor,
				productDescription : productDescription,
				quantityInStock : quantityInStock,
				buyPrice : buyPrice,
				MSRP : MSRP
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
	});
});