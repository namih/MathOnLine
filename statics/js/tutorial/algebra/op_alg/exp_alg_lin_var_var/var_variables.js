var ni = 1;
var mi = 1;
var ia = 1;
var valor=1;

function borrar(){
	document.getElementById("2").value="";
	document.getElementById("3").value="";
	document.getElementById("4").value="";
	document.getElementById("5").value="";
}

function borrar2(){
	document.getElementById("5").value="";
	document.getElementById("6").value="";
	document.getElementById("7").value="";
	document.getElementById("8").value="";
	document.getElementById("9").value="";
	document.getElementById("10").value="";
}

function mostrar() {
	document.getElementById("1").value="";
	document.getElementById('ejercicio2').style.display = 'block';
	document.getElementById('ejercicio1').style.display = 'none';
	borrar();
}

function mostrar1() {
	document.getElementById("2").value="";
	document.getElementById('ejercicio3').style.display = 'block';
	document.getElementById('ejercicio2').style.display = 'none';
	document.getElementById("3").value="";
	document.getElementById("4").value="";
	borrar2();
}

function imagen(){
	document.getElementById('ejercicio2').style.display = 'block';
	document.getElementById('ejercicio1').style.display = 'none';
	document.getElementById("uno").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n.png";
	document.getElementById("dos").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m.png";
	document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c.png";
	valor=2;
	ni=1;
	ia=1;
	mi=1;
}

function imagen2(){
	document.getElementById('ejercicio3').style.display = 'block';
	document.getElementById('ejercicio2').style.display = 'none';
	document.getElementById("uno2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n.png";
	document.getElementById("dos2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m.png";
	document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c.png";
	valor=3;
	ni=1;
	ia=1;
	mi=1;
}

function acierto(label1) {
	switch (label1) {
    case 1:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var3 == true && var4 == true && var5==true){
			if(var1 == true || var2 == true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 3:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var3 == true && var4 == true && var5==true){
			if(var1 == true || var2 == true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 5:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var3 == true && var5==true){
			if(var1 == true || var2 == true || var4==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 8:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if(var1==2 && var2 == 1){
			correcto();
		}
		if(var3==1 && var4 == 2){
			correcto();
		}
		if(var5==2 && var6==3){
			correcto();
			
		}
        break;
    case 9:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var2 == true && var4==true){
			if(var1 == true || var3 == true || var5 == true)
				error();
			else
				correcto();
		}
		else{
			error();
		}       
        break;
    case 10:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var3==true && var4==true && var5==true){
			if(var1 == true || var2 == true)
				error();
			else
				correcto();
		}
		else{
			error();
		}       
        break;
    case 12:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if(var1==7 && var2 == 1){
			correcto();
		}
		if(var3==5 && var4 == 4){
			correcto();
		}
		if(var5==8 && var6==10){
			correcto();
			
		}     
        break;
    case 13:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var2 == true && var5==true){
			if(var1 == true || var3 == true || var4==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 15:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		var var6 = document.getElementById("6").checked;
		if(var2 == true && var3==true && var6==true){
			if(var1 == true || var4 == true || var5==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 16:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		var var6 = document.getElementById("6").checked;
		if(var1 == true && var3==true && var6==true){
			if(var2 == true || var4 == true || var5==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 17:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var1 == true && var2 == true && var4==true){
			if(var3 == true || var5==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 19:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		var var9 = document.getElementById("9").value;
		if(var1==9 && var2 == 1 && var3 == 13){
			correcto();
		}
		if(var4==8 && var5 == 4 && var6 == 10){
			correcto();
		}
		if(var7==6 && var8 == 1 && var9 == 8){
			correcto();
		}
        break;
    case 21:
		var var4 = document.getElementById("4").checked;
		if(var4==true){
			correcto();
		}
		else{
			error();
		}        
        break;
    case 23:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var3 == true && var4 == true){
			if(var1 == true || var2==true || var5 == true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 25:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var2 == true && var3 == true && var5==true){
			if(var1 == true || var4==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 27:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var1 == true && var3 == true && var4==true){
			if(var2 == true || var5==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 29:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var3 == true && var5 == true){
			if(var1 == true || var2==true || var4 == true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
	case 31:
        var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var3 == true && var5 == true){
			if(var1 == true || var2==true || var4 == true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 33:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		if(var1 == true && var4 == true){
			if(var2 == true || var3==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
	case 35:
        var var1 = document.getElementById("1").checked;
		if(var1==true){
			correcto();
		}
		else{
			error();
		}        
        break;
	case 37:
        var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		if(var1 == true && var4 == true){
			if(var2 == true || var3==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
	case 40:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		var var9 = document.getElementById("9").value;
		if(var1 == 1.125 && var2 == 1.5 && var3 == 4){
			correcto();
		}
		if(var4 == 4.6 && var5 == 0.125 && var6 == "0"){
			correcto();
		}
		if(var7 == 3.75 && var8 == 0.5 && var9 == "0"){
			correcto();
		}
        break;
    case 42:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		var var9 = document.getElementById("9").value;
		if(var1==-4.5 && var2 == 0.5 && var3 == 4){
			correcto();
		}
		if(var4==-5 && var5 == 11 && var6 == "0"){
			correcto();
		}
		if(var7==-0.25 && var8 == 0.5 && var9 == "0"){
			correcto();
		}
        break;
	case 44:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		var var9 = document.getElementById("9").value;
		if(var1==-4.5 && var2 == -0.5 && var3 == 4){
			correcto();
		}
		if(var4==1 && var5 == 11 && var6 == "0"){
			correcto();
		}
		if(var7==4.5 && var8 == -0.5 && var9 == "0"){
			correcto();
		}
        break;
    case 46:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		var var9 = document.getElementById("9").value;
		if(var1==-4.5 && var2 == -1.5 && var3 == 4){
			correcto();
		}
		if(var4==-5 && var5 == -11 && var6 == "0"){
			correcto();
		}
		if(var7==-3 && var8 == -11 && var9 == "0"){
			correcto();
		}
        break;
    case 48:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if(var1==4 && var2 == -6){
			correcto();
		}
		if(var3==1 && var4 == -1){
			correcto();
		}
		if(var5==-3 && var6 == 5){
			correcto();
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
		if(var1==8){
			correcto();
		}
		if(var2==13){
			correcto();
		}
		if(var3==14){
			correcto();
		}
        break;
    case 51:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1==7){
			correcto();
		}
		if(var2==13){
			correcto();
		}
		if(var3==12){
			correcto();
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
		if(var1==4 && var2 == 3 && var3 == 8 && var4 == 6 && var5 == 15){
			correcto();
		}
		if(var6==8 && var7 == 3 && var8 == 16 && var9 == 6 && var10 == 23){
			correcto();
		}
		if(var11==10 && var12 == 3 && var13 == 20 && var14 == 6 && var15 == 27){
			correcto();
		}
        break;
    case 53:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		if(var1==4 && var2 == 3 && var3 == 12 && var4 == 6 && var5 == 19){
			correcto();
		}      
        break;
    case 54:
		var var1 = document.getElementById("1").value;
		if(var1==11){
			correcto();
		}      
        break;    
    case 55:
		var var1 = document.getElementById("1").value;
		if(var1==15){
			correcto();
		}      
        break;
    case 56:
		var var1 = document.getElementById("1").value;
		if(var1==21){
			correcto();
		}      
        break;
	case 57:
        var var1 = document.getElementById("1").value;
		if(var1==8){
			correcto();
		}
        break;
	case 58:
        var var1 = document.getElementById("1").value;
		if(var1==14){
			correcto();
		}
        break;
    case 59:
		var var1 = document.getElementById("1").value;
		if(var1==6.3333){
			correcto();
		}
        break;
	case 60:
		var var1 = document.getElementById("1").value;
		if(var1==20){
			correcto();
		}
        break;
	case 61:
        var var1 = document.getElementById("1").value;
		if(var1==40){
			correcto();
		}
        break;
	case 62:
        var var1 = document.getElementById("1").value;
		if(var1==36){
			correcto();
		}
        break;
	case 63:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1==39){
			correcto();
		}
		if(var2==-7){
			correcto();
		}
		if(var3==15){
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
function error() {
		$('#error').show();
		$("#error").fadeTo(2000, 500).slideUp(500, function(){
			$("#error").slideUp(500);
		});
	}
	
function incrementar_49_1() {
  	switch (ni) {
		case 1:
			if(valor==1){
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1</mn></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_1.png";
			}
			if(valor==2){
				document.getElementById("n2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1</mn></math>';
				document.getElementById("uno2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_1.png";
			}
			if(valor==3){
				document.getElementById("n3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1</mn></math>';
				document.getElementById("uno3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_1.png";
			}
			ni++;
			break;
		case 2:
			if(valor==1){
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>2</mn></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_2.png";
			}
			if(valor==2){
				document.getElementById("n2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>2</mn></math>';
				document.getElementById("uno2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_2.png";
			}
			if(valor==3){
				document.getElementById("n3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>2</mn></math>';
				document.getElementById("uno3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_2.png";
			}
			ni++;
			break;
		case 3:
			if(valor==1){
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>3</mn></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_3.png";
			}
			if(valor==2){
				document.getElementById("n2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>3</mn></math>';
				document.getElementById("uno2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_3.png";
			}
			if(valor==3){
				document.getElementById("n3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>3</mn></math>';
				document.getElementById("uno3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_3.png";
			}
			ni++;
			break;
		case 4:
			if(valor==1){
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>4</mn></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_4.png";
			}
			if(valor==2){
				document.getElementById("n2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>4</mn></math>';
				document.getElementById("uno2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_4.png";
			}
			if(valor==3){
				document.getElementById("n3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>4</mn></math>';
				document.getElementById("uno3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_4.png";
			}
			break;
			
	}
	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
	
}

function decrementar_49_1() {
	console.log(ni);
  	switch (ni) {
		case 4:
			if(valor==1){
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>3</mn></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_3.png";
			}
			if(valor==2){
				document.getElementById("n2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>3</mn></math>';
				document.getElementById("uno2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_3.png";
			}
			if(valor==3){
				document.getElementById("n3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>3</mn></math>';
				document.getElementById("uno3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_3.png";
			}
			ni--;
			break;
		case 3:
			if(valor==1){
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>2</mn></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_2.png";
			}
			if(valor==2){
				document.getElementById("n2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>2</mn></math>';
				document.getElementById("uno2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_2.png";
			}
			if(valor==3){
				document.getElementById("n3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>2</mn></math>';
				document.getElementById("uno3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_2.png";
			}
			ni--;
			break;	
		case 2:
			if(valor==1){
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1</mn></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_1.png";
			}
			if(valor==2){
				document.getElementById("n2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1</mn></math>';
				document.getElementById("uno2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_1.png";
			}
			if(valor==3){
				document.getElementById("n3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1</mn></math>';
				document.getElementById("uno3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_1.png";
			}
			ni--;
			break;	
		case 1:
			if(valor==1){
				document.getElementById("n").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math>';
				document.getElementById("uno").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n.png";
			}
			if(valor==2){
				document.getElementById("n2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math>';
				document.getElementById("uno2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n.png";
			}
			if(valor==3){
				document.getElementById("n3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math>';
				document.getElementById("uno3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n.png";
			}
			break;	
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function incrementar_49_2() {
  	switch (mi) {
		case 1:
			if(valor==1){
				document.getElementById("m").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1</mn></math>';
				document.getElementById("dos").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_1.png";
			}
			if(valor==2){
				document.getElementById("m2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1</mn></math>';
				document.getElementById("dos2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_1.png";
			}
			if(valor==3){
				document.getElementById("m3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1</mn></math>';
				document.getElementById("dos3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_1.png";
			}
			mi++;
			break;
		case 2:
			if(valor==1){
				document.getElementById("m").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>2</mn></math>';
				document.getElementById("dos").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_2.png";
			}
			if(valor==2){
				document.getElementById("m2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>2</mn></math>';
				document.getElementById("dos2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_2.png";
			}
			if(valor==3){
				document.getElementById("m3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>2</mn></math>';
				document.getElementById("dos3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_2.png";
			}
			mi++;
			break;
		case 3:
			if(valor==1){
				document.getElementById("m").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>3</mn></math>';
				document.getElementById("dos").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_3.png";
			}
			if(valor==2){
				document.getElementById("m2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>3</mn></math>';
				document.getElementById("dos2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_3.png";
			}
			if(valor==3){
				document.getElementById("m3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>3</mn></math>';
				document.getElementById("dos3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_3.png";
			}
			mi++;
			break;
		case 4:
			if(valor==1){
				document.getElementById("m").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>4</mn></math>';
				document.getElementById("dos").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_4.png";
			}
			if(valor==2){
				document.getElementById("m2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>4</mn></math>';
				document.getElementById("dos2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_4.png";
			}
			if(valor==3){
				document.getElementById("m3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>4</mn></math>';
				document.getElementById("dos3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_4.png";
			}
			break;
			
	}
	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
	
}

function decrementar_49_2() {
	console.log(mi);
  	switch (mi) {
		case 4:
			if(valor==1){
				document.getElementById("m").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>3</mn></math>';
				document.getElementById("dos").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_3.png";
			}
			if(valor==2){
				document.getElementById("m2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>3</mn></math>';
				document.getElementById("dos2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_3.png";
			}
			if(valor==3){
				document.getElementById("m3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>3</mn></math>';
				document.getElementById("dos3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_3.png";
			}
			mi--;
			break;
		case 3:
			if(valor==1){
				document.getElementById("m").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>2</mn></math>';
				document.getElementById("dos").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_2.png";
			}
			if(valor==2){
				document.getElementById("m2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>2</mn></math>';
				document.getElementById("dos2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_2.png";
			}
			if(valor==3){
				document.getElementById("m3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>2</mn></math>';
				document.getElementById("dos3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_2.png";
			}
			mi--;
			break;	
		case 2:
			if(valor==1){
				document.getElementById("m").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1</mn></math>';
				document.getElementById("dos").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_1.png";
			}
			if(valor==2){
				document.getElementById("m2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1</mn></math>';
				document.getElementById("dos2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_1.png";
			}
			if(valor==3){
				document.getElementById("m3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1</mn></math>';
				document.getElementById("dos3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m_1.png";
			}
			mi--;
			break;	
		case 1:
			if(valor==1){
				document.getElementById("m").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math>';
				document.getElementById("dos").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m.png";
			}
			if(valor==2){
				document.getElementById("m2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math>';
				document.getElementById("dos2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m.png";
			}
			if(valor==3){
				document.getElementById("m3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math>';
				document.getElementById("dos3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_m.png";
			}
			break;	
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function incrementar_49_3() {
  	  	switch (ia) {
		case 1:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_1.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_1.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_1.png";
			}
			ia++;
			break;
		case 2:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>2</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_2.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>2</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_2.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>2</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_2.png";
			}
			ia++;
			break;
		case 3:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>3</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_3.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>3</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_3.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>3</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_3.png";
			}
			ia++;
			break;
		case 4:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>4</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_4.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>4</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_4.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>4</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_4.png";
			}
			ia++;
			break;
		case 5:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>5</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_5.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>5</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_5.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>5</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_5.png";
			}
			ia++;
			break;
		case 6:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>6</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_6.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>6</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_6.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>6</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_6.png";
			}
			ia++;
			break;
		case 7:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>7</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_7.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>7</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_7.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>7</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_7.png";
			}
			ia++;
			break;
		case 8:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>8</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_8.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>8</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_8.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>8</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_8.png";
			}
			ia++;
			break;
		case 9:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>9</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_9.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>9</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_9.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>9</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_9.png";
			}
			ia++;
			break;
		case 10:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>10</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_10.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>10</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_10.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>10</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_10.png";
			}
			ia++;
			break;	
		case 11:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>11</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_11.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>11</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_11.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>11</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_11.png";
			}
			ia++;
			break;	
		case 12:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>12</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_12.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>12</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_12.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>12</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_12.png";
			}
		    break;	
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
	
}

function decrementar_49_3() {
	console.log(ia);
  	switch (ia) {
  		
		case 12:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>11</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_11.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>11</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_11.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>11</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_11.png";
			}
			ia--;
			break;
		case 11:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>10</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_10.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>10</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_10.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>10</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_10.png";
			}
			ia--;
			break;
		case 10:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>9</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_9.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>9</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_9.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>9</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_9.png";
			}
			ia--;
			break;
		case 9:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>8</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_8.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>8</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_8.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>8</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_8.png";
			}
			ia--;
			break;
		case 8:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>7</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_7.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>7</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_7.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>7</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_7.png";
			}
			ia--;
			break;
		case 7:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>6</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_6.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>6</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_6.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>6</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_6.png";
			}
			ia--;
			break;
		case 6:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>5</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_5.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>5</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_5.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>5</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_5.png";
			}
			ia--;
			break;
		case 5:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>4</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_4.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>4</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_4.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>4</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_4.png";
			}
			ia--;
			break;
		case 4:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>3</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_3.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>3</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_3.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>3</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_3.png";
			}
			ia--;
			break;
		case 3:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>2</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_2.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>2</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_2.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>2</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_2.png";
			}ia--;
			break;	
		case 2:
			
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_1.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_1.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_1.png";
			}
			
			ia--;
			break;	
		case 1:
			if(valor==1){
				document.getElementById("c").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math>';
				document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c.png";
			}
			if(valor==2){
				document.getElementById("c2").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math>';
				document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c.png";
			}
			if(valor==3){
				document.getElementById("c3").innerHTML ='<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math>';
				document.getElementById("tres3").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c.png";
			}break;	
	}

	
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}