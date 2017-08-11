function gcd(a, b){
	return (b == 0) ? a : gcd(b, a%b);
	
}
function readURL (input) {
	if(input.files && input.files[0]){
		var reader = new FileReader();
		
		reader.onload = function (e) {
			$('#img_titulo').attr('src', e.target.result);
		}
		reader.readAsDataURL(input.files[0]);
	}
  
}


function dimensiones () {
  	var img_tema = document.getElementById('img_tema');
  	img_tema.addEventListener("change", function() {
	
	var file = this.files[0];
	var img = new Image();
	var imagen = this;  
	img.onload = function(){
		var sizes = {
			width: this.width,
	  		height: this.height
		};
		URL.revokeObjectURL(this.src);
		var w = sizes.width;
		var h = sizes.height;
		var r = gcd(w, h);
		var ancho = w/r;
		var altura = h/r;
		
		var triple = 3 * h;
		
		
		if (w >= triple	) {
			readURL(imagen);
			return true;
		} 
		document.getElementById("imagen").style.display= 'inline';
		return false;
	}

	var objectURL = URL.createObjectURL(file);
	
	console.log('change file', file);
	console.log('change objectURL', objectURL);
	img.src = objectURL;
	});

}
							
$(document).ready(function() {
	$('#summernote').summernote({
		lang : 'es-ES' // default: 'en-US'
	});
});

function get_text() {
	var id_mes = document.getElementById('mes').textContent;
	var id_tema = document.getElementById('id_tema').textContent;
	var titulo = document.getElementById('titulo').value;
	
	var markupStr = $('#summernote').summernote('code');
	var img = document.getElementById('img_tema');
	var img = new FormData();
	var datos = {
		id_monthly_theme : id_tema,
		mounth : id_mes,
		title : titulo,
		description : markupStr,
		image: img
	};

	var url_update = base_url + '/Home_admin_c/update_tema';
	$.ajax({
		type : 'post',
		url : url_update,
		data : {
			editor : datos
		},
		datatype : 'json',
		cache : false,
		success : function() {
			alert('OK');
		},
		error : function() {
			alert('failure');
		}
	});
}
window.onload = dimensiones;
