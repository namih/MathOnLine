function cargar_subtema () {
	var tema = document.getElementById('tema').value;
	var subtema = document.getElementById('subtema');
	var url_subtema = base_url + 'Admin_evaluation_c/subtema';
	
	if (tema == 0) {
		subtema.disabled = true;
		$('#subtema').empty();
		var option = document.createElement('option');
		option.text = 'Seleccione un subtema';
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
				
				var option0 = document.createElement('option');
				option0.text = 'Seleccione un subtema...';
				option0.value = 0;
				subtema.appendChild(option0);
				
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
						
			var tabla =	'<div>'+
							  '<table id="evaluation" class="table table-striped" width="100%" cellspacing="0">' +
							    '<thead>' +
							      '<tr>' +
							        '<th>Borrar</th>' +
							        '<th>Pregunta</th>' +
							        '<th>Puntos</th>' +
							        '<th>Editar</th>' +
							      '</tr>' +
							    '</thead>' +
							    '<tbody>';
							    for (var i=0; i < lista_evaluacion.length; i++) {
							    	tabla += '<tr>';
							    	tabla += '<td><span onclick="confirmar('+ lista_evaluacion[i]['id_evaluation']+')" style="color:red" class="glyphicon glyphicon-trash red" aria-hidden="true"></span></td>';
							    	tabla += '<td>'+lista_evaluacion[i]['question']+'</td>';
							    	tabla += '<td>'+lista_evaluacion[i]['points']+'</td>';
							    	tabla += '<td> <a href="'+base_url+'Admin_evaluation_c/editor_evaluacion/'+lista_evaluacion[i]['id_evaluation']+'"><span id="edit_link" class="glyphicon glyphicon-edit" aria-hidden="true"></span> </a> </td>';
							    	tabla += '</tr>';
							    };

					tabla +=		   '</tbody>' +
							  '</table>' +
							  '</div>';
			
			document.getElementById("admin_tabla").innerHTML = tabla;
			$('#evaluation').DataTable( {
				"drawCallback": function( settings ) {
					MathJax.Hub.Queue(["Typeset",MathJax.Hub]); 
				},
				"pageLength": 20,
				"lengthMenu": [[20, 50, 100, -1], [20, 50, 100, "Todas"]],
		        "language": {
		        	"search": "Buscar:",
		            "lengthMenu": "Mostrar _MENU_ entradas",
		            "zeroRecords": "Nada encontrado",
		            "info": "Mostrando página _PAGE_ de _PAGES_",
		            "infoEmpty": "No hay registros disponibles",
		            "infoFiltered": "(Filtrado de _MAX_ registros totales)"
		        }
		    } );
		},
		error: function() {
			alert('failure');
		}
	});
}

function confirmar (id_evaluation) {
	var boton = '<button onclick="eliminar('+id_evaluation+')" type="button" class="btn btn-warning" data-dismiss="modal">Eliminar</button>';
	boton += '<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>';
	document.getElementById("modal_boton").innerHTML = boton;
	
	$("#confirmacion").modal();
}

function eliminar (id_evaluacion) {
	var url_borrado = base_url + 'Admin_evaluation_c/borrar_evaluacion';
	
	$.ajax({
		type:'post',
		url: url_borrado,
		data: {id:id_evaluacion},
		datatype: 'json',
		cache: false,
		success: function(respuesta) {
			alert(respuesta);
		},
		error: function() {
			alert('failure');
		}
	});
}