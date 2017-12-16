var x = -3;

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

function incrementar_1() {
	
	var applet = document.ggbApplet;
		
	switch (x) {
		case -3:
			applet.evalCommand("res=ZoomOut[2]"); 
			applet.evalCommand("A = Point[{-3, 5}]");
			document.getElementById("valor").innerHTML = "-3";
			x++;
			break;
		case -2:
			applet.evalCommand("A = Point[{-2, 0}]");
			document.getElementById("valor").innerHTML = "-2";
			x++;
			break;
		case -1:
			applet.evalCommand("A = Point[{-1, -3}]");
			document.getElementById("valor").innerHTML = "-1";
			x++;
			break;
		case 0:
			applet.evalCommand("A = Point[{-0, -4}]");
			document.getElementById("valor").innerHTML = "0";
			x++;
			break;
		case 1:
			applet.evalCommand("A = Point[{1, -3}]");
			document.getElementById("valor").innerHTML = "1";
			x++;
			break;
		case 2:
			applet.evalCommand("A = Point[{2, 0}]");
			document.getElementById("valor").innerHTML = "2";
			x++;
			break;
		case 3:
			applet.evalCommand("A = Point[{3, 5}]");
			document.getElementById("valor").innerHTML = "3";
			x++;
			break;
	}
}

function disminuir_1() {
	
	var applet = document.ggbApplet;
		
	switch (x) {
		case -2:
			applet.evalCommand("res=ZoomIn[2]"); 
			applet.evalCommand("Delete(A)");
			document.getElementById("valor").innerHTML = "-";
			x--;
			break;
		case -1:
			applet.evalCommand("A = Point[{-3, 5}]");
			document.getElementById("valor").innerHTML = "-3";
			x--;
			break;
		case 0:
			applet.evalCommand("A = Point[{-2, 0}]");
			document.getElementById("valor").innerHTML = "-2";
			x--;
			break;
		case 1:
			applet.evalCommand("A = Point[{-1, -3}]");
			document.getElementById("valor").innerHTML = "-1";
			x--;
			break;
		case 2:
			applet.evalCommand("A = Point[{-0, -4}]");
			document.getElementById("valor").innerHTML = "0";
			x--;
			break;
		case 3:
			applet.evalCommand("A = Point[{1, -3}]");
			document.getElementById("valor").innerHTML = "1";
			x--;
			break;
		case 4:
			applet.evalCommand("A = Point[{2, 0}]");
			document.getElementById("valor").innerHTML = "2";
			x--;
			break;
	}
}

function validar_1 () {
	var interseccion = document.getElementById('interseccion').value;
	if (interseccion == 2) {
		correcto();
	} else{
		error();
	};
}