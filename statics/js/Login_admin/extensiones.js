function cargar_archivos () {
	var fileInput = document.getElementById("archivos");
	var filePath = fileInput.value;

	var archivos = document.getElementById("archivos");
	var archivo = archivos.files;
	var archivos = new FormData();
	
	var allowedExtensions = /(.jpg|.jpeg|.png|.gif|.pdf|.docx|.doc)$/i;
	
	if (archivo.length == 0) {
		alert('No ha seleccionado ningun archivo');
	} else if(!allowedExtensions.exec(filePath)){
		alert('archivo no permitido');
	} else {
		var archivos = document.getElementById("archivos");
		var archivo = archivos.files;
	
		var archivos = new FormData();
		
		for (var i=0; i < archivo.length; i++) {
	  		archivos.append('archivo'+i, archivo[i]);
		};	
		$.ajax({
			url: base_url+'Home_admin_c/guardar_calendario',
			type: 'POST',
			data: archivos,
			async:false,
			cache: false,
			contentType: false,
			processData: false,
			success: function(data){
				alert('Archivo guardado '+data);
				return data;
				},
				error: function(){
					console.log("Error to upload the image");
				}
			});	
		
	};
}
