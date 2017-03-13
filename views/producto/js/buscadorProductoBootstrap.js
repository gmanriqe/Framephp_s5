if(jQuery != 'undefined'){
	$(document).ready(function(){
		$('#dataTables-producto').dataTable();
		
	})
}else {
	alert('No cargo jQuery');
}