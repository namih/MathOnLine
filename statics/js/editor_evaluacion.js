var editor;

var global_question = '';
var global_correct_answer = '';
var global_distractor_a = '';
var global_distractor_b = '';
var global_distractor_c = '';

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