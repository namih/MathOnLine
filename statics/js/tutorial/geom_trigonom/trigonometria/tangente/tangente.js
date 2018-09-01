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
		if(var1==1 && var2 == "0"){
			correcto();
		}
        break;
    case 3:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="0" && var2 == 1){
			correcto();
		}
        break;
    case 4:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="0" && var2 == -1){
			correcto();
		}
        break;
    case 5:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==-1 && var2 == "0"){
			correcto();
		}
        break;
    case 6:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="0" && var2 == 1){
			correcto();
		}
        break;
    case 8:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==1 && var2 == 1.4142){
			correcto();
		}
        break;
    case 9:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1==0.7071 && var2==0.7071 && var3==1){
			correcto();
		}
        break;
    case 10:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		if(var1==-1 && var2 == 1.4142 && var3==1 && var4 == 1.4142){
			correcto();
		}
        break;
    case 12:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1==0.7071){
			if(var2==-0.7071){
				if(var3 == -1)
					correcto();
			}
		}
        break;
    case 13:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		if(var1==-1 && var2 == 1.4142 && var3==-1 && var4 == 1.4142){
			correcto();
		}
        break;
    case 15:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1==-0.7071){
			if(var2==-0.7071){
				if(var3 == 1)
					correcto();
			}
		}
        break;
    case 16:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		if(var1==1 && var2 == 1.4142 && var3==-1 && var4 == 1.4142){
			correcto();
		}
        break;
    case 18:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1==-0.7071){
			if(var2==0.7071){
				if(var3 == -1)
					correcto();
			}
		}
        break;
	case 20:
        var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==-1 && var2 == "0"){
			correcto();
		}
        break;
    case 21:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="0" && var2 == -1){
			correcto();
		}
        break;
    case 22:
        var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==1 && var2 == "0"){
			correcto();
		}
        break;
    case 23:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="0" && var2 == 1){
			correcto();
		}
        break;
	case 27:
        var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		var var9 = document.getElementById("9").value;
		var var10 = document.getElementById("definido1").checked;
		var var11 = document.getElementById("definido2").checked;
		var var12 = document.getElementById("definido3").checked;
		var var13 = document.getElementById("definido4").checked;
		var var14 = document.getElementById("definido5").checked;
		var var15 = document.getElementById("definido6").checked;
		if(var1 == "0" && var2 == "0" && var3 == "0" && var13 == true && var14 == true && var15 == true
		&&	var4 == 1 && var5 == "0" && var6 == -1 && var7 == "0" && var8 == 1 && var9 == "0"
			&&	var10 == false && var11 == false && var12 == false){
					correcto();
		}
        break;
	case 28:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		var var9 = document.getElementById("9").value;
		var var10 = document.getElementById("definido1").checked;
		var var11 = document.getElementById("definido2").checked;
		var var12 = document.getElementById("definido3").checked;
		var var13 = document.getElementById("definido4").checked;
		var var14 = document.getElementById("definido5").checked;
		var var15 = document.getElementById("definido6").checked;
		if(var1 == "0" && var2 == "0" && var3 == "0" && var13 == true && var14 == true && var15 == true &&
		var4 == -1 && var5 == "0" && var6 == 1 && var7 == "0" && var8 == -1 && var9 == "0" &&
				var10 == false && var11 == false && var12 == false){
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
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		var var9 = document.getElementById("9").value;
		var var10 = document.getElementById("10").value;
		var var11 = document.getElementById("11").value;
		var var12 = document.getElementById("12").value;
		var var13 = document.getElementById("definido1").checked;
		var var14 = document.getElementById("definido2").checked;
		var var15 = document.getElementById("definido3").checked;
		var var16 = document.getElementById("definido4").checked;
		var var17 = document.getElementById("definido5").checked;
		var var18 = document.getElementById("definido6").checked;
		if(var1 == 1 && var2 == "0" && var3 == 1 && var4 == "0" && var5 == 1 && var6 == "0"
			&& var7 == -1 && var8 == "0" && var9 == -1 && var10 == "0" && var11 == -1 && var12 == "0"
				&& var13 == true && var14 == true && var15 == true
					&& var16 == true && var17 == true && var18 == true){
						correcto();
		}
        break;
    case 30:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		if(var1 == "0" && var2 == "0" && var3 == "0" && var4 == "0" ){
						correcto();
		}
        break;
    case 31:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		if(var1 == "0" && var2 == "0" && var3 == "0" && var4 == "0" ){
						correcto();
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
				applet.evalCommand("A = Point[{a, 0}]");
			
			ni++;
			break;
  		
  		case -6:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>3</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-9.42, 0}]");
			
			ni++;
			break;
  		
  		case -5:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>2</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{a, 0}]");
			
			ni++;
			break;
  		
  		case -4:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>2</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-6.28, 0}]");
			
			ni++;
			break;
  		
  		case -3:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>1</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{a, 0}]");
			
			ni++;
			break;
  		
  		case -2:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>1</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-3.14, 0}]");
			
			ni++;
			break;
  		
  		case -1:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{a, 0}]");
			
			ni++;
			break;
  		
  		case 0:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{0, 0}]");
			
			ni++;
			break;
  		
		case 1:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{a, 0}]");
			
			ni++;
			break;
		case 2:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{3.14, 0}]");
			
			ni++;
			break;
		case 3:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{a, 0}]");
			
		
			ni++;
			break;
		case 4:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{6.28, 0}]");
			
			ni++;
			break;
		
		case 5:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{a, 0}]");
			
			ni++;
			break;
		
		case 6:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{9.42, 0}]");
			
			ni++;
			break;
		
		case 7:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{a, 0}]");
			
		
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
				applet.evalCommand("A = Point[{a, 0}]");
		
			ni--;
			break;
		
		case 5:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{6.28, 0}]");
		
			ni--;
			break;
		
		case 4:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{a, 0}]");
		
			ni--;
			break;
		case 3:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{3.14, 0}]");
		
			ni--;
			break;	
		case 2:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{a, 0}]");
		
			ni--;
			break;	
		case 1:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{0, 0}]");
			ni--;
			break;
		
		case 0:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{a, 0}]");
			ni--;
			break;
		
		case -1:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>1</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-3.14, 0}]");
			ni--;
			break;
		
		case -2:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>1</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{a, 0}]");
			ni--;
			break;
		
		case -3:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>2</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-6.28, 0}]");
			ni--;
			break;
		
		case -4:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>2</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{a, 0}]");
			ni--;
			break;
		
		case -5:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>3</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{-9.42, 0}]");
			ni--;
			break;
		
		case -6:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>3</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				applet.evalCommand("A = Point[{a, 0}]");
				
			ni--;
			break;
		
		
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}