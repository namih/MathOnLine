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

var img_builder;

var i;

window.onload = function () {
	editor = com.wiris.jsEditor.JsEditor.newInstance({'language': 'es'});
	editor.insertInto(document.getElementById('editorContainer'));
	
	$('#summernote').summernote({
		lang : 'es-ES'
	});
};

function preview_question () {
  var builder = document.getElementById("builder").value;
  
  
  if (document.getElementById("question").innerHTML == "") {
  	var archivos = document.getElementById("image_builder");
  	var image_builder = archivos.files;
  	
  	global_image_question = image_builder;
  	
  	if (image_builder.length > 0) {
  		for (i=0; i < image_builder.length; i++) {
  			
  			var reader = new FileReader();
  			
  			reader.onload = function(){
  				imagen = reader.result;
  				console.log('El valor de i es: '+i);
  				var img = '<img src="'+imagen+'" width="5%" class="img-responsive" align="baseline">';
  				
  				console.log('img_'+i+'');
  				
  				img_builder = builder.replace('img_'+i+'', img);
  				
  				document.getElementById("question").innerHTML = img_builder;
  			};
  			
  			reader.readAsDataURL(global_image_question[i]);
  		};
  	};
  	
  	
  	document.getElementById("question").innerHTML = builder;
  	global_question = document.getElementById("builder").value;
  	document.getElementById("builder").value = '';
  	MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'question']);
  	
  	
  	
  	
  } else {
  	var question = document.getElementById("question").innerHTML;
  	document.getElementById("builder").value = global_question;
  	document.getElementById("question").innerHTML = "";
  };
}

function preview_correct_answer () {
  var builder = document.getElementById("builder").value; 
  document.getElementById("correct_answer").innerHTML = builder;
  MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'correct_answer']);
}

function preview_distractor_a () {
  var builder = document.getElementById("builder").value; 
  document.getElementById("distractor_a").innerHTML = builder;
  MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'distractor_a']);
}

function preview_distractor_b () {
  var builder = document.getElementById("builder").value; 
  document.getElementById("distractor_b").innerHTML = builder;
  MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'distractor_b']);
}

function preview_distractor_c () {
  var builder = document.getElementById("builder").value; 
  document.getElementById("distractor_c").innerHTML = builder;
  MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'distractor_c']);
}