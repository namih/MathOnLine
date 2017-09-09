var editor;
window.onload = function () {
	editor = com.wiris.jsEditor.JsEditor.newInstance({'language': 'es'});
	editor.insertInto(document.getElementById('editorContainer'));
};

$(document).ready(function() {
	$('#summernote').summernote({
		lang : 'es-ES'
	});
});