function mostrar() {
	document.getElementById('ejercicio2').style.display = 'block';
	document.getElementById('ejercicio1').style.display = 'none';
	document.getElementById("1").value="";
	borrar();
}

function mostrar1() {
	document.getElementById('ejercicio3').style.display = 'block';
	document.getElementById('ejercicio2').style.display = 'none';
	document.getElementById("2").value="";
	borrar2();
}

function TCP() {
	document.getElementById('ejercicio2').style.display = 'block';
	document.getElementById('ejercicio1').style.display = 'none';
	document.getElementById("1").checked=false;
	document.getElementById("2").checked=false;
}

function TCP1() {
	document.getElementById('ejercicio3').style.display = 'block';
	document.getElementById('ejercicio2').style.display = 'none';
	document.getElementById("3").checked=false;
	document.getElementById("4").checked=false;
}

function borrar(){
	document.getElementById("2").value="";
	document.getElementById("3").value="";
	document.getElementById("4").value="";
	document.getElementById("5").value="";
	document.getElementById("6").value="";
	document.getElementById("7").value="";
}

function borrar2(){
	document.getElementById("3").value="";
	document.getElementById("4").value="";
	document.getElementById("5").value="";
	document.getElementById("6").value="";
	document.getElementById("7").value="";
	document.getElementById("8").value="";
	document.getElementById("9").value="";
	document.getElementById("10").value="";
	document.getElementById("11").value="";
	document.getElementById("12").value="";
	document.getElementById("13").value="";
	document.getElementById("14").value="";
}

function acierto(label1) {
	switch (label1) {
    case 3:
        var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if(var1==-4 && var2 == 4){
			correcto();
		}
		if(var3==6 && var4== 9){
			correcto();
		}
		if(var5==-8 && var6 == 16){
			correcto();
		}
        break;
    case 5:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1==-2){
			correcto();
		}
		if(var2==5){
			correcto();
		}
		if(var3==-8){
			correcto();
		}
        break;
    case 8:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		var var6 = document.getElementById("6").checked;
		if(var1==true && var2 == false){
			correcto();
		}
		if(var3==false && var4 == true){
			correcto();
		}
		if(var5==true && var6==false){
			correcto();
		}    
        break;
    case 9:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		var var9 = document.getElementById("9").value;
		if(var1==-2 && var2==-2 && var3==2){
			correcto();
		}
		if(var4==3 && var5 == 3 && var6==-3){
			correcto();
		}
		if(var7==1 && var8 == 1 && var9==-1){
			correcto();
		}    
        break;
    case 12:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1==-9){
			correcto();
		}
		if(var2==5){
			correcto();
		}
		if(var3==-1){
			correcto();
		}    
        break;
    case 14:
		var var1 = document.getElementById("1").value;
		if(var1==5){
			correcto();
		}
		else{
			error();
		}
        break;
    case 15:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if((var1==1 || var2==1) && (var1==-5 || var2==-5)){
			correcto();
		}
		else{
			error();
		}
		break;
	case 16:
		var var1 = document.getElementById("1").value;
		if(var1==1){
			correcto();
		}
		else{
			error();
		}
        break;
    case 17:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if((var1==0.1622 || var2==0.1622) && (var1==-6.1622 || var2==-6.1622)){
			correcto();
		}
		else{
			error();
		}
		break;
	case 18:
		var var1 = document.getElementById("1").value;
		if(var1==-5){
			correcto();
		}
		else{
			error();
		}
        break;
    case 20:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==1 && var2==4){
			correcto();
		}
		else{
			error();
		}
		break;
	case 21:
		var var1 = document.getElementById("1").value;
		if(var1==-4){
			correcto();
		}
		else{
			error();
		}
        break;
    case 22:
		var var1 = document.getElementById("1").value;
		if(var1==3){
			correcto();
		}
		else{
			error();
		}
        break;
    case 23:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if((var1==1 || var2==1) && (var1==-2 || var2==-2)){
			correcto();
		}
		else{
			error();
		}
		break;
	case 24:
		var var1 = document.getElementById("1").value;
		if(var1==0.75 || var1=="3/4"){
			correcto();
		}
		else{
			error();
		}
        break;
    case 25:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if((var1==0.9317 || var2==0.9317) && (var1==1.9317 || var2==1.9317)){
			correcto();
		}
		else{
			error();
		}
		break;
	case 26:
		var var1 = document.getElementById("1").value;
		if(var1==-11){
			correcto();
		}
		else{
			error();
		}
        break;
    case 27:
		var var1 = document.getElementById("1").value;
		if(var1==24){
			correcto();
		}
		else{
			error();
		}
        break;
    case 28:
		var var1 = document.getElementById("1").value;
		if(var1==-3){
			correcto();
		}
		else{
			error();
		}
        break;
    case 29:
		var var1 = document.getElementById("1").value;
		if(var1==3){
			correcto();
		}
		else{
			error();
		}
        break;
    case 32:
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
		var var16 = document.getElementById("16").value;
		var var17 = document.getElementById("17").value;
		var var18 = document.getElementById("18").value;
		var var19 = document.getElementById("19").value;
		var var20 = document.getElementById("20").value;
		var var21 = document.getElementById("21").value;
		if(var1==1 && var2==6 && var3==9 && var4==6 && var5==1 && var6==9 && var7==0){
			correcto();
		}
		if(var8==1 && var9==4 && var10==-3 && var11==4 && var12==1 && var13==-3 && var14==28){
			correcto();
		}
		if(var15==1 && var16==-5 && var17==2 && var18==-5 && var19==1 && var20==2 && var21==17){
			correcto();
		}    
        break;
    case 33:
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
		if(var1==1 && var2==4 && var3==-5 && var4==4 && var5==1 && var6==-5 && var7==36 &&
			var8==36 && var9==6 && var10==4 && var11==6 && var12==1 && 
			(var13==1 || var14==1) && (var13==-5 || var14==-5)){
			correcto();
		}
		else{
			error();
		}
		break;
	case 34:
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
		if(var1==1 && var2==6 && var3==9 && var4==6 && var5==1 && var6==9 && var7==0 &&
			var8==0 && var9==0 && var10==6 && var11==0 && var12==1 && 
			(var13==0 || var14==0) && (var13==-3 || var14==-3)){
			correcto();
		}
		else{
			error();
		}
		break;
	case 35:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		if(var1==1 && var2==2 && var3==5 && var4==2 && var5==1 && var6==5 && var7==-16 && var8==-16){
			correcto();
		}
		else{
			error();
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