function cargar_subtema () {
	var tema = document.getElementById('tema').value;
	var subtema = document.getElementById('subtema');
	var url_subtema = base_url + 'Admin_evaluation_c/subtema';
	
	if (tema == 0) {
		subtema.disabled = true;
		$('#subtema').empty();
		var option = document.createElement('option');
		option.text = 'Subtema';
		option.value = 0;
		subtema.appendChild(option);
	} else {
		$('#subtema').empty();
		subtema.disabled = false;
		
		var datos = {'tema':tema};
		
		$.ajax({
			type:'post',
			url: url_subtema,
			data: {datos:datos},
			datatype: 'json',
			cache: false,
			success: function(respuesta) {
				var lista_subtema = JSON.parse(respuesta);
				for (var i=0; i < lista_subtema.length; i++) {
					var option = document.createElement('option');
					option.innerHTML = lista_subtema[i];
					option.text = lista_subtema[i]['subtopic'];
					option.value = lista_subtema[i]['id_subtopic'];
					subtema.appendChild(option);
				};
			},
			error: function() {
				alert('failure');
			}
		});
	};
}

function cargar_evaluaciones () {
	var subtema = document.getElementById('subtema').value;
	var url_evaluacion = base_url + 'Admin_evaluation_c/evaluacion';
	
	var datos = {'subtema':subtema};
	
	$.ajax({
		type:'post',
		url: url_evaluacion,
		data: {datos:datos},
		datatype: 'json',
		cache: false,
		success: function(respuesta) {
			
			var lista_evaluacion = JSON.parse(respuesta);
			
			var tabla =	'<div class="table-responsive">'+
							  '<table class="table">' +
							    '<thead>' +
							      '<tr>' +
							        '<th></th>' +
							        '<th>Pregunta</th>' +
							        '<th>Puntos</th>' +
							        '<th>Editar</th>' +
							      '</tr>' +
							    '</thead>' +
							    '<tbody>';
							    for (var i=0; i < lista_evaluacion.length; i++) {
							    	tabla += '<tr>';
							    	tabla += '<td><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></td>';
							    	tabla += '<td>'+lista_evaluacion[i]['question']+'</td>';
							    	tabla += '<td>'+lista_evaluacion[i]['points']+'</td>';
							    	tabla += '<td><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>';
							    	tabla += '</tr>';
							    };

					tabla +=		   '</tbody>' +
							  '</table>' +
							  '</div>';
			
			document.getElementById("admin_tabla").innerHTML = tabla;
			
			
		},
		error: function() {
			alert('failure');
		}
	});
}