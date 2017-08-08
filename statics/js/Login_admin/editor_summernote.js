
							
$(document).ready(function() {
	$('#summernote').summernote({
		lang : 'es-ES' // default: 'en-US'
	});
});

function get_text() {
	var id_mes = document.getElementById('mes').textContent;
	var id_tema = document.getElementById('id_tema').textContent;
	var titulo = document.getElementById('titulo').value;
	//alert(id_mes);
	var markupStr = $('#summernote').summernote('code');

	// var id = 1;
	// var mes = 7;
	// var titulo = 'Los espermatozoides hacen cálculos matemáticos muy complejos';
	var datos = {
		id_monthly_theme : id_tema,
		mounth : id_mes,
		title : titulo,
		description : markupStr,
	};

	var url_update = base_url + '/Home_admin_c/update_tema';
	$.ajax({
		type : 'post',
		url : url_update,
		data : {
			editor : datos
		},
		datatype : 'json',
		cache : false,
		success : function() {
			alert('OK');
		},
		error : function() {
			alert('failure');
		}
	});
}
