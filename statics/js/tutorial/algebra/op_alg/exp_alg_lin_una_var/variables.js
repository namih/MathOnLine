var ni = 1;
var ia = 1;
var valor=1;
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
	valor=2;
	ni=1;
	ia=1;
	document.getElementById('ejercicio2').style.display = 'block';
	document.getElementById('ejercicio1').style.display = 'none';
	document.getElementById("uno").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n.png";
	document.getElementById("tres").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c.png";
}

function imagen2(){
	valor=3;
	ni=1;
	ia=1;
	document.getElementById('ejercicio3').style.display = 'block';
	document.getElementById('ejercicio2').style.display = 'none';
	document.getElementById("uno2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n.png";
	document.getElementById("tres2").src = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c.png";
}

function borrar(){
	document.getElementById("2").value="";
	document.getElementById("3").value="";
}

function borrar2(){
	document.getElementById("5").value="";
	document.getElementById("6").value="";
}

function acierto(label1) {
	switch (label1) {
    case 2:
        var var1 = document.getElementById("1").value;
		if(var1=="7"){
			correcto();
		}
        break;
    case 3:
		var var1 = document.getElementById("1").value;
		if(var1=="13"){
			correcto();
		}
        break;
    case 5:
		var var3 = document.getElementById("3").checked;
		if(var3==true){
			correcto();
		}
		else{
			error();
		}        
        break;
    case 6:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var4 == true && var5==true){
			if(var1 == true || var2 == true || var3==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 8:
		var var2 = document.getElementById("2").checked;
		if(var2 == true){
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
		if(var1 == true && var3 == true && var5==true){
			if(var2 == true || var4==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 12:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		var var6 = document.getElementById("6").checked;
		if(var1 == true && var5 == true && var6==true){
			if(var2 == true || var3 == true || var4 == true)
				error();
			else
				correcto();
		}
		else{
			error();
		}
		break;
    case 14:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		var var6 = document.getElementById("6").checked;
		if(var2 == true && var3 == true && var6==true){
			if(var1 == true || var4 == true || var5 == true)
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
		if(var1==true && var4==true && var5==true && var6==true){
			if(var2 == true || var3 == true)
				error();
			else
				correcto();
		}
		else{
			error();
		}       
        break;
    case 18:
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
    case 20:
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
    case 22:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		var var6 = document.getElementById("6").checked;
		if(var3==true && var4==true){
			if(var1 == true || var2 == true || var5==true || var6==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 24:
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
    case 26:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var3 == true && var4 == true && var5==true){
			if(var1 == true || var2==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 28:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var3 == true && var5==true){
			if(var1 == true || var2==true || var4==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 30:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var3 == true && var5==true){
			if(var1 == true || var2==true || var4==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 32:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var2 == true && var4 == true && var5==true){
			if(var1 == true || var3==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 34:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var2 == true && var4 == true && var5==true){
			if(var1 == true || var3==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 36:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var2 == true && var3 == true && var4==true){
			if(var1 == true || var5==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
	case 39:
        var var1 = document.getElementById("1").value;
        var var2 = document.getElementById("2").value;
        var var3 = document.getElementById("3").value;
		if(var1=="3"){
			correcto();
		}
		if(var2=="5"){
			correcto();
		}
		if(var3=="8"){
			correcto();
		}
        break;
    case 40:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var3 == true && var4 == true && var5==true){
			if(var1 == true || var2==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
	case 42:
        var var1 = document.getElementById("1").value;
        var var2 = document.getElementById("2").value;
        var var3 = document.getElementById("3").value;
		if(var1=="9"){
			correcto();
		}
		if(var2=="25"){
			correcto();
		}
		if(var3=="35"){
			correcto();
		}
        break;
	case 44:
        var var1 = document.getElementById("1").value;
        var var2 = document.getElementById("2").value;
        var var3 = document.getElementById("3").value;
		if(var1=="13"){
			correcto();
		}
		if(var2=="14"){
			correcto();
		}
		if(var3=="19"){
			correcto();
		}
        break;
	case 46:
        var var1 = document.getElementById("1").value;
        var var2 = document.getElementById("2").value;
        var var3 = document.getElementById("3").value;
		if(var1=="13"){
			correcto();
		}
		if(var2=="14"){
			correcto();
		}
		if(var3=="16"){
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
		if(var1=="13" && var2 == "17"){
			correcto();
		}
		if(var3=="9" && var4 == "10"){
			correcto();
		}
		if(var5=="16" && var6=="0"){
			correcto();
			
		}    
        break;
	case 49:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var2 == true && var4==true){
			if(var1 == true || var3==true || var5==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 51:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var2 == true && var3==true && var5==true){
			if(var1 == true || var4==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 53:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var2 == true && var4==true){
			if(var1 == true || var3==true || var5==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 56:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="9/4" || var1 == "2.25"){
			correcto();
		}
		if(var2=="14"){
			correcto();
		}
		if(var3=="14/4" || var3 == "3.5"){
			correcto();
		}
        break;
    case 58:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="5/4" || var1 == "1.25"){
			correcto();
		}
		if(var2=="11"){
			correcto();
		}
		if(var3=="10/4" || var3 == "2.5"){
			correcto();
		}
        break;
    case 60:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if(var1=="13" && var2 == "17"){
			correcto();
		}
		if(var3=="9" && var4 == "7"){
			correcto();
		}
		if(var5=="10" && var6=="1" ){
			correcto();
		}
		break;
    case 62:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if(var1=="-1" && var2 == "17"){
			correcto();
		}
		if(var3=="1" && var4 == "7"){
			correcto();
		}
		if(var5=="4" && var6=="1" ){
			correcto();
		}
        break;
    case 64:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if(var1=="3" && var2 == "17"){
			correcto();
		}
		if(var3=="1" && var4 == "10"){
			correcto();
		}
		if(var5=="4" && var6 == "0"){
			correcto();
		}
        break;    
    case 66:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if(var1=="-9" && var2 == "17"){
			correcto();
		}
		if(var3=="-9" && var4 == "10"){
			correcto();
		}
		if(var5=="-16" && var6 == "0"){
			correcto();
		}
        break;
    case 68:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if(var1=="4" && var2 == "-6"){
			correcto();
		}
		if(var3=="2" && var4 == "-1"){
			correcto();
		}
		if(var5=="0" && var6 == "10"){
			correcto();
		}
        break;
    case 69:
        var var1_1 = document.getElementById("uno").src;
        var var1_2 = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_2.png";
        var var2_1 = document.getElementById("tres").src;
        var var2_2 = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c.png";
        var var3_1 = document.getElementById("uno2").src;
        var var3_2 = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_1.png";
        var var4_1 = document.getElementById("tres2").src;
        var var4_2 = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_5.png";
        var var5_1 = document.getElementById("uno3").src;
        var var5_2 = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_n_2.png";
        var var6_1 = document.getElementById("tres3").src;
        var var6_2 = base_url+"statics/img/tutorial/algebra/op_alg/exp_alg_lin_var_var/diapositiva_49_c_4.png";
		if( var1_1==var1_2 && var2_1==var2_2){
			correcto();
		}
		if( var3_1==var3_2 && var4_1==var4_2){
			correcto();
		}
		if( var5_1==var5_2 && var6_1==var6_2){
			correcto();
		}
        break;
	case 70:
        var var1 = document.getElementById("1").value;
        var var2 = document.getElementById("2").value;
        var var3 = document.getElementById("3").value;
		if(var1=="6"){
			correcto();
		}
		if(var2=="10"){
			correcto();
		}
		if(var3=="5"){
			correcto();
		}
        break;
	case 71:
        var var1 = document.getElementById("1").value;
        var var2 = document.getElementById("2").value;
        var var3 = document.getElementById("3").value;
		if(var1=="5"){
			correcto();
		}
		if(var2=="9"){
			correcto();
		}
		if(var3=="4"){
			correcto();
		}
        break;
    case 72:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		var var9 = document.getElementById("9").value;
		if(var1=="4" && var2 == "8" && var3 == "9"){
			correcto();
		}
		if(var4=="8" && var5 == "16" && var6 == "17"){
			correcto();
		}
		if(var7=="3" && var8 == "6" && var9 == "7"){
			correcto();
		}
        break;
	case 73:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		var var9 = document.getElementById("9").value;
		if(var1=="4" && var2 == "12" && var3 == "13"){
			correcto();
		}
		if(var4=="8" && var5 == "24" && var6 == "25"){
			correcto();
		}
		if(var7=="3" && var8 == "9" && var9 == "10"){
			correcto();
		}      
        break;
	case 74:
        var var1 = document.getElementById("1").value;
        var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="7"){
			correcto();
		}
		if(var2=="11"){
			correcto();
		}
		if(var3=="6"){
			correcto();
		}
        break;
	case 75:
        var var1 = document.getElementById("1").value;
        var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="10"){
			correcto();
		}
		if(var2=="18"){
			correcto();
		}
		if(var3=="8"){
			correcto();
		}
        break;
	case 76:
        var var1 = document.getElementById("1").value;
        var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="15"){
			correcto();
		}
		if(var2=="27"){
			correcto();
		}
		if(var3=="12"){
			correcto();
		}
        break;
	case 77:
        var var1 = document.getElementById("1").value;
        var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="6"){
			correcto();
		}
		if(var2=="12"){
			correcto();
		}
		if(var3=="9/2" || var3 == "4.5"){
			correcto();
		}
        break;
	case 78:
        var var1 = document.getElementById("1").value;
        var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="10"){
			correcto();
		}
		if(var2=="20"){
			correcto();
		}
		if(var3=="15/2" || var3 == "7.5"){
			correcto();
		}
        break;
    case 79:
		var var1 = document.getElementById("1").value;
        var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="16/3" || var1 == "5.33"){
			correcto();
		}
		if(var2=="32/3" || var2 == "10.66"){
			correcto();
		}
		if(var3=="4"){
			correcto();
		}
        break;
    case 80:
        var var1 = document.getElementById("1").value;
        var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="16"){
			correcto();
		}
		if(var2=="20"){
			correcto();
		}
		if(var3=="28"){
			correcto();
		}
        break;
	case 81:
        var var1 = document.getElementById("1").value;
        var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="32"){
			correcto();
		}
		if(var2=="24"){
			correcto();
		}
		if(var3=="28"){
			correcto();
		}
        break;
	case 82:
        var var1 = document.getElementById("1").value;
        var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="32"){
			correcto();
		}
		if(var2=="80"){
			correcto();
		}
		if(var3=="100"){
			correcto();
		}
		break;
	case 83:
        var var1 = document.getElementById("1").value;
        var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="40"){
			correcto();
		}
		if(var2=="100"){
			correcto();
		}
		if(var3=="125"){
			correcto();
		}
        break;
	case 84:
        var var1 = document.getElementById("1").value;
        var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="40"){
			correcto();
		}
		if(var2=="15"){
			correcto();
		}
		if(var3=="-30"){
			correcto();
		}
        break;
	}
}
	
function incrementar_69_1() {
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

function decrementar_69_1() {
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

function incrementar_69_3() {
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

function decrementar_69_3() {
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