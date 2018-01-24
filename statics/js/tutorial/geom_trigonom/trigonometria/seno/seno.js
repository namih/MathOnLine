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
    case 7:
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
    case 8:
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
    case 9:
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
    case 11:
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
    case 12:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="1" && var2 == "2"){
			correcto();
		}
		else{
			if(var1!="1")
				document.getElementById("1").value="";
			if(var2!="2")
				document.getElementById("2").value="";
		}
        break;
    case 13:
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
    case 14:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="1" && var2 == "1.414"){
			correcto();
		}
		else{
			if(var1!="1")
				document.getElementById("1").value="";
			if(var2!="1.414")
				document.getElementById("2").value="";
		}
        break;
    case 15:
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
    case 16:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="-1" && var2 == "1.414"){
			correcto();
		}
		else{
			if(var1!="-1")
				document.getElementById("1").value="";
			if(var2!="1.414")
				document.getElementById("2").value="";
		}
        break;
    case 18:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="-0.707" || var1 == "-.707"){
			if(var2 == "1")
				correcto();
			else
				if(var2!="1")
					document.getElementById("2").value="";
		}
		else{
			if(var1!="-0.707" || var1!="-.707")
				document.getElementById("1").value="";
			if(var2!="1")
				document.getElementById("2").value="";
		}
        break;
    case 19:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="-1" && var2 == "1.414"){
			correcto();
		}
		else{
			if(var1!="-1")
				document.getElementById("1").value="";
			if(var2!="1.414")
				document.getElementById("2").value="";
		}
        break;
    case 21:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="-0.707" || var1 == "-.707"){
			if(var2 == "1")
				correcto();
			else
				if(var2!="1")
					document.getElementById("2").value="";
		}
		else{
			if(var1!="-0.707" || var1!="-.707")
				document.getElementById("1").value="";
			if(var2!="1")
				document.getElementById("2").value="";
		}
        break;
    case 23:
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
    case 24:
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
	case 25:
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
    case 26:
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
	case 29:
        var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if(var1=="0" && var2 == "1" && var3=="0" && var4 == "0" && var5=="-1" && var6 == "1"){
			correcto();
		}
		else{
			if(var1!="0")
				document.getElementById("1").value="";
			if(var2!="1")
				document.getElementById("2").value="";
			if(var3!="0")
				document.getElementById("3").value="";
			if(var4!="0")
				document.getElementById("4").value="";
			if(var5!="-1")
				document.getElementById("5").value="";
			if(var6!="1")
				document.getElementById("6").value="";
		}
        break;
	case 30:
        var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if(var1=="0" && var2 == "-1" && var3=="0" && var4 == "0" && var5=="1" && var6 == "-1"){
			correcto();
		}
		else{
			if(var1!="0")
				document.getElementById("1").value="";
			if(var2!="-1")
				document.getElementById("2").value="";
			if(var3!="0")
				document.getElementById("3").value="";
			if(var4!="0")
				document.getElementById("4").value="";
			if(var5!="1")
				document.getElementById("5").value="";
			if(var6!="-1")
				document.getElementById("6").value="";
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
			if(var7!="0")
				document.getElementById("7").value="";
			if(var8!="0")
				document.getElementById("8").value="";
		}
        break;
    case 32:
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
	case 33:
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
    case 34:
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
    case 35:
		var var1 = document.getElementById("1").value;
		if(var1%1==0){
			mostrar();
		}
        break;
    case 49:
        var var1_1 = document.getElementById("uno").src;
        var var1_2 = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_2.png";
        var var2_1 = document.getElementById("dos").src;
        var var2_2 = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m.png";
        var var3_1 = document.getElementById("tres").src;
        var var3_2 = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c.png";
        var var4_1 = document.getElementById("uno2").src;
        var var4_2 = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_3.png";
        var var5_1 = document.getElementById("dos2").src;
        var var5_2 = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_1.png";
        var var6_1 = document.getElementById("tres2").src;
        var var6_2 = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_4.png";
        var var7_1 = document.getElementById("uno3").src;
        var var7_2 = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_2.png";
        var var8_1 = document.getElementById("dos3").src;
        var var8_2 = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_2.png";
        var var9_1 = document.getElementById("tres3").src;
        var var9_2 = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_6.png";
        if( var1_1==var1_2 && var2_1==var2_2 && var3_1==var3_2){
			correcto();
		}
		if( var4_1==var4_2 && var5_1==var5_2 && var6_1==var6_2){
			correcto();
		}
		if( var7_1==var7_2 && var8_1==var8_2 && var9_1==var9_2){
			correcto();
		}
        break;
    case 50:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="8"){
			correcto();
			document.getElementById("1").value="";
		}
		else{
			if(var1!="8")
				document.getElementById("1").value="";
		}
		if(var2=="13"){
			correcto();
			document.getElementById("2").value="";
		}
		else{
			if(var2!="13")
				document.getElementById("2").value="";
		}
		if(var3=="14"){
			correcto();
		}
		else{
			if(var3!="14")
				document.getElementById("3").value="";
		}
        break;
    case 51:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="7"){
			correcto();
			document.getElementById("1").value="";
		}
		else{
			if(var1!="7")
				document.getElementById("1").value="";
		}
		if(var2=="13"){
			correcto();
			document.getElementById("2").value="";
		}
		else{
			if(var2!="13")
				document.getElementById("2").value="";
		}
		if(var3=="12"){
			correcto();
		}
		else{
			if(var3!="12")
				document.getElementById("3").value="";
		}
        break;
    case 52:
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
		var var13 = document.getElementById("13").value;
		var var14 = document.getElementById("14").value;
		var var15 = document.getElementById("15").value;
		if(var1=="4" && var2 == "3" && var3 == "8" && var4 == "6" && var5 == "15"){
			correcto();
			document.getElementById("1").value="";
			document.getElementById("2").value="";
			document.getElementById("3").value="";
			document.getElementById("4").value="";
			document.getElementById("5").value="";
		}
		else{
			if(var1!="4")
				document.getElementById("1").value="";
			if(var2!="3")
				document.getElementById("2").value="";
			if(var3!="8")
				document.getElementById("3").value="";
			if(var4!="6")
				document.getElementById("4").value="";
			if(var5!="15")
				document.getElementById("5").value="";
		}
		if(var6=="8" && var7 == "3" && var8 == "16" && var9 == "6" && var10 == "23"){
			correcto();
			document.getElementById("6").value="";
			document.getElementById("7").value="";
			document.getElementById("8").value="";
			document.getElementById("9").value="";
			document.getElementById("10").value="";
		}
		else{
			if(var6!="8")
				document.getElementById("6").value="";
			if(var7!="3")
				document.getElementById("7").value="";
			if(var8!="16")
				document.getElementById("8").value="";
			if(var9!="6")
				document.getElementById("9").value="";
			if(var10!="23")
				document.getElementById("10").value="";
		}
		if(var11=="10" && var12 == "3" && var13 == "20" && var14 == "6" && var15 == "27"){
			correcto();
		}
		else{
			if(var11!="10")
				document.getElementById("11").value="";
			if(var12!="3")
				document.getElementById("12").value="";
			if(var13!="20")
				document.getElementById("13").value="";
			if(var14!="6")
				document.getElementById("14").value="";
			if(var15!="27")
				document.getElementById("15").value="";
		} 
        break;
    case 53:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		if(var1=="4" && var2 == "3" && var3 == "12" && var4 == "6" && var5 == "19"){
			correcto();
		}
		else{
			if(var1!="4")
				document.getElementById("1").value="";
			if(var2!="3")
				document.getElementById("2").value="";
			if(var3!="12")
				document.getElementById("3").value="";
			if(var4!="6")
				document.getElementById("4").value="";
			if(var5!="19")
				document.getElementById("5").value="";
		}        
        break;
    case 54:
		var var1 = document.getElementById("1").value;
		if(var1=="11"){
			correcto();
		}
		else{
			if(var1!="11")
				document.getElementById("1").value="";
		}        
        break;    
    case 55:
		var var1 = document.getElementById("1").value;
		if(var1=="15"){
			correcto();
		}
		else{
			if(var1!="15")
				document.getElementById("1").value="";
		}        
        break;
    case 56:
		var var1 = document.getElementById("1").value;
		if(var1=="21"){
			correcto();
		}
		else{
			if(var1!="21")
				document.getElementById("1").value="";
		}        
        break;
	case 57:
        var var1 = document.getElementById("1").value;
		if(var1=="8"){
			correcto();
		}
		else{
			if(var1!="8")
				document.getElementById("1").value="";
		}
        break;
	case 58:
        var var1 = document.getElementById("1").value;
		if(var1=="14"){
			correcto();
		}
		else{
			if(var1!="14")
				document.getElementById("1").value="";
		}
        break;
    case 59:
		var var1 = document.getElementById("1").value;
		if(var1=="19/3"){
			correcto();
		}
		else{
			if(var1!="19/3")
				document.getElementById("1").value="";
		}
        break;
	case 60:
		var var1 = document.getElementById("1").value;
		if(var1=="20"){
			correcto();
		}
		else{
			if(var1!="20")
				document.getElementById("1").value="";
		}
        break;
	case 61:
        var var1 = document.getElementById("1").value;
		if(var1=="40"){
			correcto();
		}
		else{
			if(var1!="40")
				document.getElementById("1").value="";
		}
        break;
	case 62:
        var var1 = document.getElementById("1").value;
		if(var1=="36"){
			correcto();
		}
		else{
			if(var1!="36")
				document.getElementById("1").value="";
		}
        break;
	case 63:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="39"){
			correcto();
			document.getElementById("1").value="";
		}
		else{
			if(var1!="39")
				document.getElementById("1").value="";
		}
		if(var2=="8"){
			correcto();
			document.getElementById("2").value="";
		}
		else{
			if(var2!="8")
				document.getElementById("2").value="";
		}
		if(var3=="15"){
			correcto();
		}
		else{
			if(var3!="15")
				document.getElementById("3").value="";
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
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_7.png";
			
			ni++;
			break;
  		
  		case -6:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>3</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_6.png";
			
			ni++;
			break;
  		
  		case -5:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>2</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_5.png";
			
			ni++;
			break;
  		
  		case -4:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>2</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_4.png";
			
			ni++;
			break;
  		
  		case -3:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>1</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_3.png";
			
			ni++;
			break;
  		
  		case -2:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>1</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_2.png";
			
			ni++;
			break;
  		
  		case -1:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_1.png";
			
			ni++;
			break;
  		
  		case 0:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28.png";
			
			ni++;
			break;
  		
		case 1:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_8.png";
			
			ni++;
			break;
		case 2:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_9.png";
			
			ni++;
			break;
		case 3:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_10.png";
			
		
			ni++;
			break;
		case 4:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_11.png";
			
			ni++;
			break;
		
		case 5:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_12.png";
			
			ni++;
			break;
		
		case 6:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_13.png";
			
			ni++;
			break;
		
		case 7:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_14.png";
			
		
			break;
		
	}
	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
	
}

function decrementar_49_1() {
	console.log(ni);
  	switch (ni) {
		case 7:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_13.png";
		
			ni--;
			break;
		
		case 6:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_12.png";
		
			ni--;
			break;
		
		case 5:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_11.png";
		
			ni--;
			break;
		
		case 4:
			
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_10.png";
		
			ni--;
			break;
		case 3:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_9.png";
		
			ni--;
			break;	
		case 2:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_8.png";
		
			ni--;
			break;	
		case 1:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28.png";
			ni--;
			break;
		
		case 0:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_1.png";
			ni--;
			break;
		
		case -1:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>1</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_2.png";
			ni--;
			break;
		
		case -2:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>1</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_3.png";
			ni--;
			break;
		
		case -3:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>2</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_4.png";
			ni--;
			break;
		
		case -4:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>2</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_5.png";
			ni--;
			break;
		
		case -5:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>3</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_6.png";
			ni--;
			break;
		
		case -6:
		
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mn>3</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28_7.png";
			ni--;
			break;
		
		
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}