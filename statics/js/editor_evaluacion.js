var editor;
window.onload = function () {
	editor = com.wiris.jsEditor.JsEditor.newInstance({'language': 'es'});
	editor.insertInto(document.getElementById('editorContainer'));
	$("#file-demo").fileinput({
		language: 'es',
		showUpload: false,
	});
	$('#summernote').summernote({
		lang : 'es-ES'
	});
};

function preview_question () {
  var builder = document.getElementById("builder").value;
  if (document.getElementById("question").innerHTML == "") {
  	var titulo = '<h5>Pregunta</h5>';
  	document.getElementById("question").innerHTML = titulo + builder;
  	MathJax.Hub.Queue(["Typeset", MathJax.Hub, 'question']);
  } else {
  	var question = document.getElementById("question").innerHTML;
  	document.getElementById("builder").value = question;
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