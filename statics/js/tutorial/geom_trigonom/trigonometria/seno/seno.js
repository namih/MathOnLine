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
		if(var1=="0" && var2 == 1){
			correcto();
		}
        break;
    case 8:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="0" && var2 == 1){
			correcto();
		}
        break;
    case 9:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==-1 && var2 == 1){
			correcto();
		}
        break;
    case 11:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="0" && var2 == 1){
			correcto();
		}
        break;
    case 12:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==1 && var2 == 2){
			correcto();
		}
        break;
    case 13:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==0.7071){
			if(var2 == 1)
				correcto();
		}
        break;
    case 14:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==1 && var2 == 1.4142){
			correcto();
		}
        break;
    case 15:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==0.7071){
			if(var2 == 1)
				correcto();
		}
        break;
    case 16:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==-1 && var2 == 1.4142){
			correcto();
		}
        break;
    case 18:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==-0.7071){
			if(var2 == 1)
				correcto();
		}
        break;
    case 19:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==-1 && var2 == 1.4142){
			correcto();
		}
        break;
    case 21:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==-0.7071 || var1 == -.7071){
			if(var2 == 1)
				correcto();
		}
        break;
    case 23:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==-1 && var2 == 1){
			correcto();
		}
        break;
    case 24:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="0" && var2 == 1){
			correcto();
		}
        break;
	case 25:
        var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==1 && var2 == 1){
			correcto();
		}
        break;
    case 26:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="0" && var2 == 1){
			correcto();
		}
        break;
	case 29:
        var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if(var1=="0" && var2 == 1 && var3=="0" && var4 == "0" && var5==-1 && var6 == 1){
			correcto();
		}
        break;
	case 30:
        var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if(var1=="0" && var2 == -1 && var3=="0" && var4 == "0" && var5==1 && var6 == -1){
			correcto();
		}
        break;
	case 31:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		if(var1=="0" && var2 == "0" && var3=="0" && var4 == "0" && var5=="0" && var6 == "0" && var7=="0" && var8 == "0"){
			correcto();
		}
        break;
    case 32:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		if(var1==1 && var2 == 1 && var3==1 && var4 == 1){
			correcto();
		}
        break;
	case 33:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		if(var1==-1 && var2 == -1 && var3==-1 && var4 == -1){
			correcto();
		}
        break;
    case 34:
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
    case 35:
		var var1 = document.getElementById("1").value;
		if(var1%1==0){
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
				applet.evalCommand("A = Point[{-11, 1}]");
			
			ni++;
			break;
  		
  		case -6:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>3</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-9.42, 0}]");
			
			ni++;
			break;
  		
  		case -5:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>2</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-7.85, -1}]");
			
			ni++;
			break;
  		
  		case -4:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>2</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-6.28, 0}]");
			
			ni++;
			break;
  		
  		case -3:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>1</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-4.71, 1}]");
				
			ni++;
			break;
  		
  		case -2:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>1</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-3.14, 0}]");
				
			ni++;
			break;
  		
  		case -1:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-1.57, -1}]");
			
			ni++;
			break;
  		
  		case 0:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{0, 0}]");
				
			ni++;
			break;
  		
		case 1:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{1.57, 1}]");
				
			ni++;
			break;
		case 2:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{3.14, 0}]");
				
			ni++;
			break;
		case 3:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{4.71, -1}]");
		
			ni++;
			break;
		case 4:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{6.28, 0}]");
			
			ni++;
			break;
		
		case 5:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{7.85, 1}]");
			
			ni++;
			break;
		
		case 6:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{9.42, 0}]");
			
			ni++;
			break;
		
		case 7:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{11, -1}]");
		
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
				applet.evalCommand("A = Point[{9.42, 0}]");
		
			ni--;
			break;
		
		case 6:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{7.85, 1}]");
		
			ni--;
			break;
		
		case 5:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{6.28, 0}]");
		
			ni--;
			break;
		
		case 4:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{4.71, -1}]");
		
			ni--;
			break;
		case 3:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{3.14, 0}]");
				
			ni--;
			break;	
		case 2:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{1.57, 1}]");
				
			ni--;
			break;	
		case 1:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{0, 0}]");
				
			ni--;
			break;
		
		case 0:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-1.57, -1}]");
				
			ni--;
			break;
		
		case -1:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>1</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-3.14, 0}]");
				
			ni--;
			break;
		
		case -2:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>1</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-4.71, 1}]");
			ni--;
			break;
		
		case -3:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>2</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-6.28, 0}]");
				
			ni--;
			break;
		
		case -4:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>2</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-7.85, -1}]");
			ni--;
			break;
		
		case -5:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>3</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-9.42, 0}]");
			ni--;
			break;
		
		case -6:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>3</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-11, 1}]");
			
			break;
		
		
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}