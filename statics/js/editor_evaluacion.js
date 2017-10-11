var editor;
var global_question;
var global_correct_answer;
var global_distractor_a;
var global_distractor_b;
var global_distractor_c;

var global_image_question;
var global_image_correct_answer;
var global_image_distractor_a;
var global_image_distractor_b;
var global_image_distractor_c;

var builder;

var img_src = [];

window.onload = function () {
	editor = com.wiris.jsEditor.JsEditor.newInstance({'language': 'es'});
	editor.insertInto(document.getElementById('editorContainer'));
	
	$('#summernote').summernote({
		lang : 'es-ES'
	});
};

function preview_question () {
	builder = document.getElementById("builder").value;
	
	if (document.getElementById("question").innerHTML == "") {
		var archivos = document.getElementById("image_builder");
		var image_builder = archivos.files;
		
		global_question = builder;
		global_image_question = Object.assign({}, image_builder);	
		
		
		if (image_builder.length > 0) {
			for(x = 0; x < image_builder.length; x = x + 1) {
				var file = image_builder[x];
				(function(file){
					var reader = new FileReader();
					reader.readAsDataURL(file);
					reader.onload = function(e) {
						img_src.push(e.target.result);
						if (img_src.length == image_builder.length) {
							for (var i=0; i < img_src.length; i++) {
								
								builder = builder.replace('img_'+i+'', '<img src="'+img_src[i]+'" width="5%">');
							};
							document.getElementById("question").innerHTML = builder;
							document.getElementById("builder").value = '';
							$("#image_builder").fileinput('reset');
							$("#image_builder").fileinput('clear');
							MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'question']);
						};
					};
				})(file);
			}
		}
		document.getElementById("question").innerHTML = builder;
		document.getElementById("builder").value = '';
		MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'question']);
	
	} else {
		var question = document.getElementById("question").innerHTML;
		document.getElementById("builder").value = global_question;
		document.getElementById("question").innerHTML = "";
		global_question = '';	
		global_image_question = [];
		img_src = [];
	};
}

function preview_correct_answer () {
	builder = document.getElementById("builder").value;
	
	if (document.getElementById("correct_answer").innerHTML == "") {
		var archivos = document.getElementById("image_builder");
		var image_builder = archivos.files;
				
		global_correct_answer = builder;	
		global_image_correct_answer = Object.assign({}, image_builder);
		
		console.log('El tamaño del contrctor de la imagen es: '+image_builder.length);
				
		if (image_builder.length > 0) {
			console.log('entre al IF');
			for(x = 0; x < image_builder.length; x = x + 1) {
				var file = image_builder[x];
				(function(file){
					var reader = new FileReader();
					reader.readAsDataURL(file);
					reader.onload = function(e) {
						img_src.push(e.target.result);
						console.log('tamaño del arreglo del source'+img_src.length);
						if (img_src.length == image_builder.length) {
							for (var i=0; i < img_src.length; i++) {
								
								builder = builder.replace('img_'+i+'', '<img src="'+img_src[i]+'" width="5%">');
							};
							document.getElementById("correct_answer").innerHTML = builder;
							document.getElementById("builder").value = '';
							$("#image_builder").fileinput('reset');
							$("#image_builder").fileinput('clear');
							console.log(global_image_question);
							MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'correct_answer']);
						};
					};
				})(file);
			}
		}
		
		document.getElementById("correct_answer").innerHTML = builder;
		document.getElementById("builder").value = '';
		MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'correct_answer']);
	
	} else {
		var question = document.getElementById("correct_answer").innerHTML;
		document.getElementById("builder").value = global_correct_answer;
		document.getElementById("correct_answer").innerHTML = "";
		global_correct_answer = '';	
		global_image_correct_answer = [];
		img_src = [];
	};
}

function preview_distractor_a () {
	builder = document.getElementById("builder").value;
	
	if (document.getElementById("distractor_a").innerHTML == "") {
		var archivos = document.getElementById("image_builder");
		var image_builder = archivos.files;
		
		global_distractor_a = builder;	
		global_image_distractor_a = Object.assign({}, image_builder);
				
		if (image_builder.length > 0) {
			for(x = 0; x < image_builder.length; x = x + 1) {
				var file = image_builder[x];
				(function(file){
					var reader = new FileReader();
					reader.readAsDataURL(file);
					reader.onload = function(e) {
						img_src.push(e.target.result);
						if (img_src.length == image_builder.length) {
							for (var i=0; i < img_src.length; i++) {
								
								builder = builder.replace('img_'+i+'', '<img src="'+img_src[i]+'" width="5%">');
							};
							document.getElementById("distractor_a").innerHTML = builder;
							document.getElementById("builder").value = '';
							$("#image_builder").fileinput('reset');
							$("#image_builder").fileinput('clear');
							MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'distractor_a']);
						};
					};
				})(file);
			}
		}
		
		document.getElementById("distractor_a").innerHTML = builder;
		document.getElementById("builder").value = '';
		MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'distractor_a']);
	
	} else {
		var question = document.getElementById("distractor_a").innerHTML;
		document.getElementById("builder").value = global_distractor_a;
		document.getElementById("distractor_a").innerHTML = "";
		global_distractor_a = '';	
		global_image_distractor_a = [];
		img_src = [];
	};
}

function preview_distractor_b () {
	builder = document.getElementById("builder").value;
	
	if (document.getElementById("distractor_b").innerHTML == "") {
		var archivos = document.getElementById("image_builder");
		var image_builder = archivos.files;
		
		global_distractor_b = builder;	
		global_image_distractor_b = Object.assign({}, image_builder);
				
		if (image_builder.length > 0) {
			for(x = 0; x < image_builder.length; x = x + 1) {
				var file = image_builder[x];
				(function(file){
					var reader = new FileReader();
					reader.readAsDataURL(file);
					reader.onload = function(e) {
						img_src.push(e.target.result);
						if (img_src.length == image_builder.length) {
							for (var i=0; i < img_src.length; i++) {
								
								builder = builder.replace('img_'+i+'', '<img src="'+img_src[i]+'" width="5%">');
							};
							document.getElementById("distractor_b").innerHTML = builder;
							document.getElementById("builder").value = '';
							$("#image_builder").fileinput('reset');
							$("#image_builder").fileinput('clear');
							MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'distractor_b']);
						};
					};
				})(file);
			}
		}
		
		document.getElementById("distractor_b").innerHTML = builder;
		document.getElementById("builder").value = '';
		MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'distractor_b']);
	
	} else {
		var question = document.getElementById("distractor_b").innerHTML;
		document.getElementById("builder").value = global_distractor_b;
		document.getElementById("distractor_b").innerHTML = "";
		global_distractor_b = '';	
		global_image_distractor_b = [];
		img_src = [];
	};
}

function preview_distractor_c () {
	builder = document.getElementById("builder").value;
	
	if (document.getElementById("distractor_c").innerHTML == "") {
		var archivos = document.getElementById("image_builder");
		var image_builder = archivos.files;
		
		global_distractor_c = builder;	
		global_image_distractor_c = Object.assign({}, image_builder);
				
		if (image_builder.length > 0) {
			for(x = 0; x < image_builder.length; x = x + 1) {
				var file = image_builder[x];
				(function(file){
					var reader = new FileReader();
					reader.readAsDataURL(file);
					reader.onload = function(e) {
						img_src.push(e.target.result);
						if (img_src.length == image_builder.length) {
							for (var i=0; i < img_src.length; i++) {
								
								builder = builder.replace('img_'+i+'', '<img src="'+img_src[i]+'" width="5%">');
							};
							document.getElementById("distractor_c").innerHTML = builder;
							document.getElementById("builder").value = '';
							$("#image_builder").fileinput('reset');
							$("#image_builder").fileinput('clear');
							MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'distractor_c']);
						};
					};
				})(file);
			}
		}
		
		document.getElementById("distractor_c").innerHTML = builder;
		document.getElementById("builder").value = '';
		MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'distractor_c']);
	
	} else {
		var question = document.getElementById("distractor_c").innerHTML;
		document.getElementById("builder").value = global_distractor_c;
		document.getElementById("distractor_c").innerHTML = "";
		global_distractor_c = '';	
		global_image_distractor_c = [];
		img_src = [];
	};
}

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

function guardar_evaluacion() {	
	
	var url_save = base_url + 'Admin_evaluation_c/guardar_evaluacion';
	
	var subtema = document.getElementById('subtema').value;
	var puntos = 5;
	
	var formData = new FormData();
	// formData.append('id_subtopic', subtema);
	// formData.append('question', global_question);
	//formData.append('question_img', global_image_question);
	// formData.append('correct_answer', global_correct_answer);
	// formData.append('correct_answer_img', global_image_correct_answer);
	// formData.append('wrong_answer_a', global_distractor_a);
	// formData.append('wrong_answer_a_img', global_image_distractor_a);
	// formData.append('wrong_answer_b', global_distractor_b);
	// formData.append('wrong_answer_b_img', global_image_distractor_b);
	// formData.append('wrong_answer_c', global_distractor_c);
	// formData.append('wrong_answer_c_img', global_image_distractor_c);
	formData.append('points', puntos);
	
	console.log(formData);
		
	$.ajax({
		type : 'post',
		url : url_save,
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
	
	
	
	
	
	// var formData = new FormData();
// 
			// formData.append('imagen', img_libro.files[0]);
			// formData.append('id_user', id_usuario);
			// formData.append('title', titulo);
			// formData.append('author', autor);
			// formData.append('editorial', editorial);
			// formData.append('year', anio);
			// formData.append('place_publication', pais);
// 			
			
	
	
}