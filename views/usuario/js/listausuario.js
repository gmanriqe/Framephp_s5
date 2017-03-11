if(jQuery != 'undefined'){
	$(document).ready(inicializadora);
	
	function inicializadora(){
		$('#dataTables-usuarios').dataTable();
	}
}else {
	alert('No cargo jQuery');
}