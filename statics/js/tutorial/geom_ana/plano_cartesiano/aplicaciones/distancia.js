function marcar (A,B){
	var applet = document.ggbApplet;
	applet.evalCommand(""+A+""+B+"= Line["+A+","+B+"]");
}
