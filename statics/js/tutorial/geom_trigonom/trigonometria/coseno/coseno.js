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
		if(var1=="0" && var2 == "1"){
			correcto();
		}
        break;
    case 3:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="1" && var2 == "1"){
			correcto();
		}
        break;
    case 4:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="-1" && var2 == "1"){
			correcto();
		}
        break;
    case 5:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="0" && var2 == "1"){
			correcto();
		}
        break;
    case 6:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="1" && var2 == "1"){
			correcto();
		}
        break;
    case 7:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="1" && var2 == "1.414"){
			correcto();
		}
        break;
    case 8:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==0.707){
			if(var2 == "1")
				correcto();
		}
        break;
    case 9:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="1" && var2 == "1.414"){
			correcto();
		}
        break;
    case 11:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==-0.707){
			if(var2 == "1")
				correcto();
		}
        break;
    case 12:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="-1" && var2 == "1.414"){
			correcto();
		}
        break;
    case 14:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==-0.707){
			if(var2 == "1")
				correcto();
		}
        break;
    case 15:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="1" && var2 == "1.414"){
			correcto();
		}
        break;
    case 16:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="0.707" || var1 == ".707"){
			if(var2 == "1")
				correcto();
			else
				if(var2!="1")
					document.getElementById("2").value="";
		}
		else{
			if(var1!="0.707" || var1!=".707")
				document.getElementById("1").value="";
			if(var2!="1")
				document.getElementById("2").value="";
		}
        break;
    case 18:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="0" && var2 == "1"){
			correcto();
		}
		else{
			if(var1!="0")
				document.getElementById("1").value="";
			if(var2!="1")
				document.getElementById("2").value="";
		}
        break;
    case 19:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="-1" && var2 == "1"){
			correcto();
		}
		else{
			if(var1!="-1")
				document.getElementById("1").value="";
			if(var2!="1")
				document.getElementById("2").value="";
		}
        break;
	case 20:
        var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="0" && var2 == "1"){
			correcto();
		}
		else{
			if(var1!="0")
				document.getElementById("1").value="";
			if(var2!="1")
				document.getElementById("2").value="";
		}
        break;
    case 21:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="1" && var2 == "1"){
			correcto();
		}
		else{
			if(var1!="1")
				document.getElementById("1").value="";
			if(var2!="1")
				document.getElementById("2").value="";
		}
        break;
	case 24:
        var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if(var1=="1" && var2 == "-1" && var3=="1" && var4 == "0" && var5=="0" && var6 == "0"){
			correcto();
		}
		else{
			if(var1!="1")
				document.getElementById("1").value="";
			if(var2!="-1")
				document.getElementById("2").value="";
			if(var3!="1")
				document.getElementById("3").value="";
			if(var4!="0")
				document.getElementById("4").value="";
			if(var5!="0")
				document.getElementById("5").value="";
			if(var6!="0")
				document.getElementById("6").value="";
		}
        break;
	case 25:
        var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if(var1=="1" && var2 == "-1" && var3=="1" && var4 == "0" && var5=="0" && var6 == "0"){
			correcto();
		}
		else{
			if(var1!="1")
				document.getElementById("1").value="";
			if(var2!="-1")
				document.getElementById("2").value="";
			if(var3!="1")
				document.getElementById("3").value="";
			if(var4!="0")
				document.getElementById("4").value="";
			if(var5!="0")
				document.getElementById("5").value="";
			if(var6!="0")
				document.getElementById("6").value="";
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
		else{
			if(var1!="0")
				document.getElementById("1").value="";
			if(var2!="0")
				document.getElementById("2").value="";
			if(var3!="0")
				document.getElementById("3").value="";
			if(var4!="0")
				document.getElementById("4").value="";
			if(var5!="0")
				document.getElementById("5").value="";
			if(var6!="0")
				document.getElementById("6").value="";
		}
        break;
    case 27:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		if(var1=="1" && var2 == "1" && var3=="1" && var4 == "1"){
			correcto();
		}
		else{
			if(var1!="1")
				document.getElementById("1").value="";
			if(var2!="1")
				document.getElementById("2").value="";
			if(var3!="1")
				document.getElementById("3").value="";
			if(var4!="1")
				document.getElementById("4").value="";
		}
        break;
	case 28:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		if(var1=="-1" && var2 == "-1" && var3=="-1" && var4 == "-1"){
			correcto();
		}
		else{
			if(var1!="-1")
				document.getElementById("1").value="";
			if(var2!="-1")
				document.getElementById("2").value="";
			if(var3!="-1")
				document.getElementById("3").value="";
			if(var4!="-1")
				document.getElementById("4").value="";
		}
        break;
    case 29:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="2"){
			mostrar();
		}
		else{
			if(var1!="2")
				document.getElementById("1").value="";
		}
		if(var2=="1" && var3=="-1"){
			correcto();
		}
		else{
			if(var2!="1")
				document.getElementById("2").value="";
			if(var3!="-1")
				document.getElementById("3").value="";
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
  	switch (ni) {
  		case -7:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>3</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_7.png";
			
			ni++;
			break;
  		
  		case -6:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>3</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_6.png";
			
			ni++;
			break;
  		
  		case -5:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>2</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_5.png";
			
			ni++;
			break;
  		
  		case -4:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>2</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_4.png";
			
			ni++;
			break;
  		
  		case -3:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>1</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_3.png";
			
			ni++;
			break;
  		
  		case -2:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>1</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_2.png";
			
			ni++;
			break;
  		
  		case -1:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_1.png";
			
			ni++;
			break;
  		
  		case 0:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23.png";
			
			ni++;
			break;
  		
		case 1:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_8.png";
			
			ni++;
			break;
		case 2:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_9.png";
			
			ni++;
			break;
		case 3:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_10.png";
			
		
			ni++;
			break;
		case 4:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_11.png";
			
			ni++;
			break;
		
		case 5:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_12.png";
			
			ni++;
			break;
		
		case 6:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_13.png";
			
			ni++;
			break;
		
		case 7:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_14.png";
			
		
			break;
		
	}
	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
	
}

function decrementar_49_1() {
	console.log(ni);
  	switch (ni) {
		case 7:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_13.png";
		
			ni--;
			break;
		
		case 6:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_12.png";
		
			ni--;
			break;
		
		case 5:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_11.png";
		
			ni--;
			break;
		
		case 4:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_10.png";
		
			ni--;
			break;
		case 3:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_9.png";
		
			ni--;
			break;	
		case 2:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_8.png";
		
			ni--;
			break;	
		case 1:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23.png";
			ni--;
			break;
		
		case 0:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_1.png";
			ni--;
			break;
		
		case -1:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>1</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_2.png";
			ni--;
			break;
		
		case -2:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>1</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_3.png";
			ni--;
			break;
		
		case -3:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>2</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_4.png";
			ni--;
			break;
		
		case -4:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>2</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_5.png";
			ni--;
			break;
		
		case -5:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>3</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_6.png";
			ni--;
			break;
		
		case -6:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>3</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_23_7.png";
			ni--;
			break;
		
		
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}