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
			
			var lista_usuarios = JSON.parse(respuesta);
			var tabla =	'<div>'+
							  '<table id="table_users" class="table table-striped" width="100%" cellspacing="0">' +
							    '<thead>' +
							      '<tr>' +
							        '<th>ID Usuario</th>' +
							        '<th>Nombre de usuario</th>' +
							        '<th>Email</th>' +
							        '<th>Fecha de registro</th>' +
							        '<th>Estatus</th>' +
							      '</tr>' +
							    '</thead>' +
							    '<tbody>';
							    for (var i=0; i < lista_usuarios.length; i++) {
							    	tabla += '<tr>';
							    	tabla += '<td>'+lista_usuarios[i]['id_user']+'</td>';
							    	tabla += '<td>'+lista_usuarios[i]['user_name']+'</td>';
							    	tabla += '<td>'+lista_usuarios[i]['email']+'</td>';
							    	
							    	var fecha = lista_usuarios[i]['registration_date'].split(" ");
							    	
							    	tabla += '<td>'+fecha[0]+'</td>';
							    	
							    	if (lista_usuarios[i]['status']==0) {
							    		tabla += '<td><span onclick="confirmar_activacion('+ lista_usuarios[i]['id_user']+')" style="color:red" class="glyphicon glyphicon-off" aria-hidden="true"></span></td>';
							    	} else{
							    		tabla += '<td><span onclick="confirmar_desactivacion('+ lista_usuarios[i]['id_user']+')" style="color:green" class="glyphicon glyphicon-off" aria-hidden="true"></span></td>';
							    	};
							    	tabla += '</tr>';
							    };

					tabla +=		   '</tbody>' +
							  '</table>' +
							  '</div>';
			
			document.getElementById("admin_tabla").innerHTML = tabla;
			$('#table_users').DataTable( {
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

function confirmar_activacion(id_user) {
	var boton = '<button onclick="activacion('+id_user+')" type="button" class="btn btn-warning" data-dismiss="modal">Activar</button>';
	boton += '<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>';
	document.getElementById("modal_boton_activacion").innerHTML = boton;
	
	$("#confirmar_activacion").modal();
}

function activacion (id_user) {
	var url_activacion = base_url + 'User_manager_c/activar_usuario';
	var datos = {'id_user':id_user};
	
	$.ajax({
		type:'post',
		url: url_activacion,
		data: {datos:datos},
		datatype: 'json',
		cache: false,
		success: function(respuesta) {
			cargar_usuarios();
		},
		error: function() {
			alert('failure');
		}
	});
}

function confirmar_desactivacion(id_user) {
	var boton = '<button onclick="desactivacion('+id_user+')" type="button" class="btn btn-warning" data-dismiss="modal">Desactivar</button>';
	boton += '<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>';
	document.getElementById("modal_boton_desactivacion").innerHTML = boton;
	
	$("#confirmar_desactivacion").modal();
}

function desactivacion (id_user) {
	var url_desactivacion = base_url + 'User_manager_c/desactivar_usuario';
	var datos = {'id_user':id_user};
	
	$.ajax({
		type:'post',
		url: url_desactivacion,
		data: {datos:datos},
		datatype: 'json',
		cache: false,
		success: function(respuesta) {
			cargar_usuarios();
		},
		error: function() {
			alert('failure');
		}
	});
}