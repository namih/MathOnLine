var ni = 1;
var mi = 1;
var ia = 1;
var valor=1;

function mostrar() {
	document.getElementById('respuesta').style.display = 'block';
	document.getElementById('inicio').style.display = 'none';
}

function acierto(label1) {
	switch (label1) {
    case 2:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="0" && var2 == 1){
			correcto();
		}
        break;
    case 3:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==1 && var2 == 1){
			correcto();
		}
        break;
    case 4:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==-1 && var2 == 1){
			correcto();
		}
        break;
    case 5:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="0" && var2 == 1){
			correcto();
		}
        break;
    case 6:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==1 && var2 == 1){
			correcto();
		}
        break;
    case 7:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==1 && var2 == 1.4142){
			correcto();
		}
        break;
    case 8:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==0.7071){
			if(var2 == 1)
				correcto();
		}
        break;
    case 9:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==-1 && var2 == 1.4142){
			correcto();
		}
        break;
    case 11:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==-0.7071){
			if(var2 == 1)
				correcto();
		}
        break;
    case 12:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==-1 && var2 == 1.4142){
			correcto();
		}
        break;
    case 14:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==-0.7071){
			if(var2 == 1)
				correcto();
		}
        break;
    case 15:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==1 && var2 == 1.4142){
			correcto();
		}
        break;
    case 16:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==0.7071){
			if(var2 == 1)
				correcto();
		}
        break;
    case 18:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="0" && var2 == 1){
			correcto();
		}
        break;
    case 19:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==-1 && var2 == 1){
			correcto();
		}
		break;
	case 20:
        var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="0" && var2 == 1){
			correcto();
		}
        break;
    case 21:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==1 && var2 == 1){
			correcto();
		}
        break;
	case 24:
        var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if(var1==1 && var2 == -1 && var3==1 && var4 == "0" && var5=="0" && var6 == "0"){
			correcto();
		}
        break;
	case 25:
        var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if(var1==1 && var2 == -1 && var3==1 && var4 == "0" && var5=="0" && var6 == "0"){
			correcto();
		}
        break;
	case 26:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if(var1=="0" && var2 == "0" && var3=="0" && var4 == "0" && var5=="0" && var6 == "0"){
			correcto();
		}
        break;
    case 27:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		if(var1==1 && var2 == 1 && var3==1 && var4 == 1){
			correcto();
		}
        break;
	case 28:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		if(var1==-1 && var2 == -1 && var3==-1 && var4 == -1){
			correcto();
		}
        break;
    case 29:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1==2){
			mostrar();
		}
		if(var2==1 && var3==-1){
			correcto();
		}
        break;
    case 30:
		var var1 = document.getElementById("1").value;
		if(var1%0.5==0 && var1%1!=0){
			mostrar();
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
	
function incrementar_49_1() {
	var applet = document.ggbApplet;
  	switch (ni) {
  		case -7:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>3</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-11, 0}]");
			
			ni++;
			break;
  		
  		case -6:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>3</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-9.42, -1}]");
			
			ni++;
			break;
  		
  		case -5:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>2</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-7.85, 0}]");
			
			ni++;
			break;
  		
  		case -4:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>2</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-6.28, 1}]");
			
			ni++;
			break;
  		
  		case -3:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>1</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-4.71, 0}]");
				
			ni++;
			break;
  		
  		case -2:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>1</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-3.14, -1}]");
				
			ni++;
			break;
  		
  		case -1:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-1.57, 0}]");
			
			ni++;
			break;
  		
  		case 0:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{0, 1}]");
				
			ni++;
			break;
  		
		case 1:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{1.57, 0}]");
				
			ni++;
			break;
		case 2:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{3.14, -1}]");
				
			ni++;
			break;
		case 3:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{4.71, 0}]");
		
			ni++;
			break;
		case 4:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{6.28, 1}]");
			
			ni++;
			break;
		
		case 5:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{7.85, 0}]");
			
			ni++;
			break;
		
		case 6:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{9.42, -1}]");
			
			ni++;
			break;
		
		case 7:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{11, 0}]");
		
			break;
		
	}
	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
	
}

function decrementar_49_1() {
	console.log(ni);
	var applet = document.ggbApplet;
  	switch (ni) {
		case 7:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{9.42, -1}]");
		
			ni--;
			break;
		
		case 6:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{7.85, 0}]");
		
			ni--;
			break;
		
		case 5:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{6.28, 1}]");
		
			ni--;
			break;
		
		case 4:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{4.71, 0}]");
		
			ni--;
			break;
		case 3:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{3.14, -1}]");
				
			ni--;
			break;	
		case 2:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{1.57, 0}]");
				
			ni--;
			break;	
		case 1:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{0, 1}]");
				
			ni--;
			break;
		
		case 0:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-1.57, 0}]");
				
			ni--;
			break;
		
		case -1:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>1</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-3.14, -1}]");
				
			ni--;
			break;
		
		case -2:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>1</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-4.71, 0}]");
			ni--;
			break;
		
		case -3:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>2</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-6.28, 1}]");
				
			ni--;
			break;
		
		case -4:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>2</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-7.85, 0}]");
			ni--;
			break;
		
		case -5:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>3</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-9.42, -1}]");
			ni--;
			break;
		
		case -6:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>3</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-11, 0}]");
			
			break;
		
		
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}