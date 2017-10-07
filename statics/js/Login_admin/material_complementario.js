/**
* La función readURL lee la ruta de donde se encuantra la imagen. 
*@author María del Carmen Chávez Conde
* @param input
* @return. Formato: [* @return tipo comentario]
* @version Versión actual del elemento
*/
function readURL (input) {
	if(input.files && input.files[0]){
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#img_titulo').attr('src', e.target.result);
		};
		reader.readAsDataURL(input.files[0]);
	}
}
/**
* La función mostrar_imagen muestra la vista previa de la imagen que se seleccionó para un libro
*@author María del Carmen Chávez Conde
* @param NA
* @return. Formato: [* @return tipo comentario]
* @version Versión actual del elemento
*/
function mostrar_imagen () {
	var img_tema = document.getElementById('img_libro');
	img_tema.addEventListener("change", function() {
		
		var file = this.files[0];
		var img = new Image();
		var imagen = this;
		img.onload = function(){
			
			URL.revokeObjectURL(this.src);
			readURL(imagen);
			
			
			
			document.getElementById("img_libro").style.display= 'inline';
			return false;
		};
		
		var objectURL = URL.createObjectURL(file);
		
		console.log('change file', file);
		console.log('change objectURL', objectURL);
		img.src = objectURL;
	});
}
/**
* La función get_bibliografia manda al controlador Complementery_material_c la bibliografía que fue editada o una nueva
*@author María del Carmen Chávez Conde
* @param NA
* @return. Formato: [* @return tipo comentario]
* @version Versión actual del elemento
*/
function get_bibliografia () {
	
	var id_usuario = document.getElementById('id_usuario').textContent;
	var id_biblio = document.getElementById('id_biblio').textContent;
	var titulo = document.getElementById('titulo').value;
	var autor = document.getElementById('autor').value;
	var editorial = document.getElementById('editorial').value;
	var anio = document.getElementById('anio').value;
	var pais = document.getElementById('pais').value;
	
	
	if (id_biblio == false) {
		var url_add = base_url + 'Complementary_material_c/insertar_biblio';

		if (document.getElementById("img_libro").files.length == 0) {
			var datos = {
				id_user : id_usuario,
				title : titulo,
				author : autor,
				editorial : editorial,
				year : anio,
				place_publication : pais,
				
			};

			$.ajax({
				type : 'post',
				url : url_add,
				data : {
					editor : datos
				},
				datatype : 'json',
				cache : false,
				success : function(msj) {
					alert(msj);
				},
				error : function(msj) {
					alert(msj);
				}
			});

		} else {

			var img_libro = document.getElementById('img_libro');

			var formData = new FormData();

			formData.append('imagen', img_libro.files[0]);
			formData.append('id_user', id_usuario);
			formData.append('title', titulo);
			formData.append('author', autor);
			formData.append('editorial', editorial);
			formData.append('year', anio);
			formData.append('place_publication', pais);
			
			$.ajax({
				type : 'post',
				url : url_add,
				data : formData,
				datatype : 'json',
				async : false,
				cache : false,
				contentType : false,
				processData : false,
				success : function(msj) {
					alert(msj);
				},
				error : function(msj) {
					alert(msj);
				}
			});
		};
	

	} else{
			
		var url_update = base_url + 'Complementary_material_c/actualizar_biblio';

		if (document.getElementById("img_libro").files.length == 0) {
			var datos = {
				id_user : id_usuario,
				id_bibliography : id_biblio,
				title : titulo,
				author : autor,
				editorial : editorial,
				year : anio,
				place_publication : pais,
				
			};

			$.ajax({
				type : 'post',
				url : url_update,
				data : {
					editor : datos
				},
				datatype : 'json',
				cache : false,
				success : function(msj) {
					alert(msj);
				},
				error : function(msj) {
					alert(msj);
				}
			});

		} else {

			var img_libro = document.getElementById('img_libro');

			var formData = new FormData();

			formData.append('imagen', img_libro.files[0]);
			formData.append('id_user', id_usuario);
			formData.append('id_bibliography', id_biblio);
			formData.append('title', titulo);
			formData.append('author', autor);
			formData.append('editorial', editorial);
			formData.append('year', anio);
			formData.append('place_publication', pais);
			

			$.ajax({
				type : 'post',
				url : url_update,
				data : formData,
				datatype : 'json',
				async : false,
				cache : false,
				contentType : false,
				processData : false,
				success : function(msj) {
					alert(msj);
				},
				error : function(msj) {
					alert(msj);
				}
			});
		};
	};

}

/**
* La función get_link manda al controlador Complementery_material_c el link que fue editado o uno nuevo
*@author María del Carmen Chávez Conde
* @param NA
* @return. Formato: [* @return tipo comentario]
* @version Versión actual del elemento
*/
function get_link() {

	var id_usuario = document.getElementById('id_usuario').textContent;
	var id_liga = document.getElementById('id_liga').textContent;
	var titulo = document.getElementById('titulo').value;
	var descripcion = document.getElementById('descripcion').value;
	var link = document.getElementById('liga').value;
	
	if (id_liga == false) {
		var url_add = base_url + 'Complementary_material_c/insertar_link';

	
		var datos = {
			id_user : id_usuario,
			
			title : titulo,
			description : descripcion,
			link : link
		};

		$.ajax({
			type : 'post',
			url : url_add,
			data : {
				link : datos
			},
			datatype : 'json',
			cache : false,
			success : function(msj) {
				alert(msj);
			},
			error : function(msj) {
				alert(msj);
			}
		}); 

	} else{
		var url_update = base_url + '/Complementary_material_c/actualizar_link';

	
		var datos = {
			id_user : id_usuario,
			id_links_interest : id_liga,
			title : titulo,
			description : descripcion,
			link : link
		};

		$.ajax({
			
			type : 'post',
			url : url_update,
			data : {
				link : datos
			},
			datatype : 'json',
			cache : false,
			success : function(msj) {
				alert(msj);
			},
			error : function(msj) {
				alert(msj);
			}
		}); 

	};

	

}
/**
* La función liga_seleccionada guarda la información necesaria para determinar la liga a la que se hace referencia o para poder enviarla
* a un modal y poder eliminarla cuando se seleccione el botón eliminar.
* *@author María del Carmen Chávez Conde
* @param NA
* @return. Formato: [* @return tipo comentario]
* @version Versión actual del elemento
*/
function liga_seleccionada() {
	var row = [];
	var num_liga = document.getElementById('numero_link').textContent;
	
	var seleccionados = [];
	var seleccionado_vista = [];
	
	for (var i=1; i <= num_liga; i++) {
	  var seleccion = $("#link_"+i).is(":checked");
	  
	  if (seleccion == true) {
	  	var x = $('#link_'+i).attr("name");
	  	var y = $('#link_'+i).attr("id");
	  	seleccionados.push(x);
	  	row = y.split("_");	  	
	  	seleccionado_vista.push(row[1]);
	  	
	  };
	};
	console.log(seleccionado_vista);
	console.log(seleccionados);
	var botones = '<button onclick="borrar_link(\'';
	botones += seleccionados.toString();
	botones += "','"
	;
	botones += seleccionado_vista.toString();
	botones +=	'\')" type="button" class="btn btn-warning" data-dismiss="modal">Eliminar</button>';
 	botones += '<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>';
	document.getElementById('botones').innerHTML = botones;
	$('#Eliminar').modal();
}
/**
* La función bibliografia_seleccionada guarda la información necesaria para determinar la bibliografia a la que se hace referencia para poder enviarla
* a un modal y poder eliminarla cuando se seleccione el botón eliminar.
* *@author María del Carmen Chávez Conde
* @param NA
* @return. Formato: [* @return tipo comentario]
* @version Versión actual del elemento
*/
function bibliografia_seleccionada() {
	var row = [];
	var num_biblio = document.getElementById('numero_biblio').textContent;
	
	var seleccionados = [];
	var seleccionado_vista = [];
	
	for (var i=1; i <= num_biblio; i++) {
	  var seleccion = $("#biblio_"+i).is(":checked");
	  
	  if (seleccion == true) {
	  	var x = $('#biblio_'+i).attr("name");
	  	var y = $('#biblio_'+i).attr("id");
	  	seleccionados.push(x);
	  	row = y.split("_");	  	
	  	seleccionado_vista.push(row[1]);
	  };
	};
	
	console.log(seleccionado_vista);
	console.log(seleccionados);
	var botones = '<button onclick="borrar_biblio(\'';
	botones += seleccionados.toString();
	botones += "','";
	botones += seleccionado_vista.toString();
	botones +=	'\')" type="button" class="btn btn-warning" data-dismiss="modal">Eliminar</button>';
 	botones += '<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>';
	document.getElementById('botones').innerHTML = botones;
	$('#Eliminar').modal();
}
/**
* La función borrar_biblioda la funcionalidad al botón eliminar perteneciente al modal con los datos de las biliografias que se desean eliminar .
* *@author María del Carmen Chávez Conde
* @param NA
* @return. Formato: [* @return tipo comentario]
* @version Versión actual del elemento
*/
function borrar_biblio (lista, lista_s) {
  	var aux_string =String(lista);
 	var lista_array = JSON.parse("[" + aux_string + "]");
  	var pos = lista.split(",");
  	var url_update = base_url + '/Complementary_material_c/eliminar_biblio';
  	var aux_lista = String(lista_s);
  	var lista_s_array = JSON.parse("[" + aux_lista + "]");
  	var pos_lista_v = lista_s.split(",");
  	
  	$.ajax({
			type : 'post',
			url : url_update,
			data : {
				biblio : pos
			},
			datatype : 'json',
			cache : false,
			success : function(msj) {
				//alert(msj);
				for(var i=0; i<lista_s_array.length; i++){
			  		$('#row_b_'+lista_s_array[i]).remove();
			  	}
			},
			error : function(msj) {
				alert(msj);
			}
		}); 
/**
* La función es_numero verifica que el texto ingresado sea un numero entero con digitos del 0-9
*@author María del Carmen Chávez Conde
* @param numero
* @return. Formato: [* @return tipo comentario]
* @version Versión actual del elemento
*/
 function es_numero (numero) {
  if (!/^([0-9])*$/.test(numero)) {
  	return false;
  };
}  	
  /**
* La función validar_anio_biblio valida que los digitos formen un numero con longitud
* cuatro que se vincula a una bibliografía (libro)
* *@author María del Carmen Chávez Conde
* @param NA
* @return. Formato: [* @return tipo comentario]
* @version Versión actual del elemento
*/	
  	function validar_anio_biblio () {
	document.getElementById("error_anio").style.display= 'none';
	var anio_error = document.getElementById('error_vacio_anio');
	var anio = document.getElementById('anio');
	anio_error.classList.remove("has-warning");
	var anio_long = document.getElementById('anio').value;
	if (anio_long.length != 4) {
		anio.value = "";
		document.getElementById('anio').placeholder = "Escribe tu año de nacimiento, Ej: 1942";
		document.getElementById('anio').focus();
	} else {
		var valor = es_numero(anio.value);
		if (valor == false) {
			anio.value = "";
			document.getElementById('anio').placeholder = "Escribe tu año de nacimiento, Ej: 1942";
			document.getElementById('anio').focus();
		};
	};
	  
}
}
/**
* La función borrar_link da la funcionalidad al botón eliminar perteneciente al modal con los datos de los links que se desean eliminar .
* *@author María del Carmen Chávez Conde
* @param NA
* @return. Formato: [* @return tipo comentario]
* @version Versión actual del elemento
*/
function borrar_link (lista, lista_v) {
	alert(lista);
  	var aux_string =String(lista);
  	var lista_array = JSON.parse("[" + aux_string + "]");
  	var pos = lista.split(",");
  	var url_update = base_url + '/Complementary_material_c/eliminar_link';
  	var aux_lista = String(lista_v);
    var lista_v_array = JSON.parse("[" + aux_lista + "]");
    var pos_lista_v = lista_v.split(",");
   	
  	$.ajax({
			type : 'post',
			url : url_update,
			data : {
				link : pos
			},
			datatype : 'json',
			cache : false,
			success : function(msj) {
				//alert(msj);
				for(var i=0; i<lista_v_array.length; i++){
			  		$('#row_l_'+lista_v_array[i]).remove();
			  	}
			},
			error : function(msj) {
				alert(msj);
			}
		}); 
}

