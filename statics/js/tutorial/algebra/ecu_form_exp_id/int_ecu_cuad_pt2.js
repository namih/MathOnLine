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
	
	var x = 0;
	
	var applet = document.ggbApplet;
	
	applet.evalCommand("P = Point[{-5, 21}]"); 
}