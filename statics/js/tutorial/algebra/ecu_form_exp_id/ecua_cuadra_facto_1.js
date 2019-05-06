function grafica() {
	document.getElementById('applet_container').style.display = 'block';
	document.getElementById('grafica').style.display = 'none';
	document.getElementById('vergrafica').style.display = 'block';
}

function ocultar() {
	document.getElementById('applet_container').style.display = 'none';
	document.getElementById('vergrafica').style.display = 'none';
	document.getElementById('grafica').style.display = 'block';
}

function mostrar() {
	document.getElementById('applet_container').style.display = 'block';
	document.getElementById('grafica').style.display = 'block';
	document.getElementById('vergrafica').style.display = 'none';
}

function mostrar1() {
	document.getElementById('applet_container').style.display = 'none';
	document.getElementById('grafica').style.display = 'none';
	document.getElementById('vergrafica').style.display = 'block';
}

function acierto(label1) {
	switch (label1) {
    case 1:
        var var1 = document.getElementById("1").value;
		if(var1==2){
			correcto();
		}
		else{
			error();
		}
        break;
    case 2:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1==-2 && (var2==0 || var3==0) && (var2==-2 || var3==-2)){
			correcto();
		}
		else{
			error();
		}
        break;
	}
}

function correcto() {
		$('#correcta').show();
		$("#correcta").fadeTo(2000, 500).slideUp(500, function(){
			$("#correcta").slideUp(500);
		});
}

function error() {
		$('#error').show();
		$("#error").fadeTo(2000, 500).slideUp(500, function(){
			$("#error").slideUp(500);
		});
}