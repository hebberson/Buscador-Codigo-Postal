$(document).ready(function() {	

	obtenerProvincias();

	obtenerMunicipios();

	obtenerCP();

	/*if ($('#provincies select').val() == "") {
		$('#resposta').html("Escull una provincia");
	}*/
});

function obtenerProvincias(){
	$.ajax({
		url : 'php/provincies.php',
		type : 'POST',
		dataType : 'json',
		success : function(respuesta) {
			$('.prov').append(respuesta);
		}
    });
}

function obtenerMunicipios(){
	$(".prov").change(function() {
		var codigopro = $(".prov option:selected").val();
  		//alert(codigopro);
  		$.ajax({
		url : 'php/municipis.php',
		data : {codpro : codigopro},
		type : 'POST',
		dataType : 'json',
			success : function(msn) {
				$(".muni").empty();
				$(".muni").append(msn);
			}
    	});
	});
	/*final onchange*/
}

function obtenerCP(){
	$(".muni").change(function(){
		var municipio = $(".muni option:selected").val();
		$.ajax({
		url : 'php/postal.php',
		data : {muni : municipio},
		type : 'POST',
		dataType : 'json',
			success : function(msn) {
				$("#resposta").append(msn);
				//$(".muni").empty();
				//alert(msn);
			}
    	});
	});
}