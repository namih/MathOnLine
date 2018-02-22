function cargar_usuarios () {
	var type_user = document.getElementById('usuarios').value;
	var url_usuarios = base_url + 'User_manager_c/usuarios';
	
	var datos = {'type_user':type_user};
	
	$.ajax({
		type:'post',
		url: url_usuarios,
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