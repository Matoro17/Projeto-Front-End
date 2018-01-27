var n = 1;
$(document).ready(function(){
		
		$("#btndev").click(function(){
			$("#divdodev").append("<input class='form-control' type='text' name='developers"+n+"'></input>");
			n++;
			$("#javu").val(n);
	});
});