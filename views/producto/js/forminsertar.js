$(document).ready(function(){
//	alert('forminsertar.JS');
	
	$('#btnRegistrar').click(function(){
//		alert('hola');
		var productCode = $('#productCode').val();
		var productName = $('#productName').val();
		var productLine = $('#productLine').val();
		var productScale = $('#productScale').val();
		var productVendor = $('#productVendor').val();
		var productDescription = $('#productDescription').val();
		var quantityInStock = $('#quantityInStock').val();
		var buyPrice = $('#buyPrice').val();
		var MSRP = $('#MSRP').val();		
		
		$('p').hide();
		if(productCode == ''){
			$('#productCode').parent().append("<p style='color:red'>Debe ingresar codigo</p>" );
			alert('Ingrese productCode');
		}else if (productName == ''){
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
		
		}else if (buyPrice == ''){
			alert('Ingrese buyPrice');
		
		}else if (MSRP == ''){
			alert('Ingrese MSRP');
		} else {
			$.post('../producto/insertar',{
				productCode : productCode,
				productName : productName,
				productLine : productLine,
				productScale : productScale,
				productVendor : productVendor,
				productDescription : productDescription,
				quantityInStock : quantityInStock,
				buyPrice : buyPrice,
				MSRP : MSRP
			},function(respuesta,status){
				alert(respuesta);
				alert(status);
				if(respuesta == 'OK'){  
					$('#zonaRespuesta').html('<p style="color:green">se grabo</p>');
				}else {
					$('#zonaRespuesta').html('<p style="color:red">no se grabo</p>');
				}
			});
		}
    });
});