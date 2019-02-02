function acierto(label1) {
	switch (label1) {
    case 2:
        var var1 = document.getElementById("1").value;
		if(var1==1){
			correcto();
		}
		else{
			error();
		}
        break;
    case 3:
		var var1 = document.getElementById("1").value;
		if(var1==0.5){
			correcto();
		}
		else{
			error();
		}
        break;
    case 4:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		if(var1==false && var2 == true && var3==false){
			correcto();
		}
		else{
			error();
		}
        break;
    case 5:
		var var1 = document.getElementById("1").value;
		if(var1==4){
			correcto();
		}
		else{
			error();
		}
		break;
    
    case 6:
		var var1 = document.getElementById("1").value;
		if(var1==6){
			correcto();
		}
		else{
			error();
		}
        break;
    case 7:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		if(var1==true && var2 == false && var3==false){
			correcto();
		}
		else{
			error();
		}
        break;
    case 8:
		var var1 = document.getElementById("1").value;
		if(var1==2.5){
			correcto();
		}
		else{
			error();
		}   
        break;
    case 9:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==80 && var2 == 240){
			correcto();
		}
		else{
			error();
		}  
        break;
    case 10:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		if(var1==80 && var2 == 400 && var3==80 && var4==80){
			correcto();
		}
		else{
			error();
		}    
        break;
    case 11:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		if((var1==0.25 || var1=="1/4") && var2==1 && (var3==1.5 || var3 =="3/2") && var4==320 && var5==400 && var6==640 && var7==4 && var8==5){
			correcto();
		}
		else{
			error();
		}    
        break;
    case 12:
		var var1 = document.getElementById("1").value;
		if(var1==80){
			correcto();
		}
		else{
			error();
		}   
        break;
    case 14:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if((var1=="1 1/2" || var1==1.5) && var2==6 && (var3==0.75 || var3=="3/4")){
			correcto();
		}
		else{
			error();
		}  
        break;
	case 15:
		var var1 = document.getElementById("1").value;
		if(var1==4){
			correcto();
		}
		else{
			error();
		}   
        break;
    case 16:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1==12 && var2==40 && var3==2){
			correcto();
		}
		else{
			error();
		}  
        break;
    case 17:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		if((var1==0.5 || var1=="1/2") && var2==2 && var3==3 && var4==6 && var5==10 && var6==10 && (var7==12.5  || var7=="12 1/2") && var8==2){
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
		var var6 = document.getElementById("6").checked;
		if(var1==true && var2==false && var3==false && var4==false && var5==true && var6==false){
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
		var var5 = document.getElementById("5").checked;
		var var6 = document.getElementById("6").checked;
		var var7 = document.getElementById("7").checked;
		var var8 = document.getElementById("8").checked;
		if(var1==1 && var2==1 && var3==1 && var4==3 && var5==false && var6==true && var7==false && var8==true){
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
		var var6 = document.getElementById("6").checked;
		var var7 = document.getElementById("7").checked;
		var var8 = document.getElementById("8").checked;
		if(var1==false && var2==false && var3==true && var4==false && var5==true && var6==false && var5==true && var6==false){
			correcto();
		}
		else{
			error();
		}
        break;
    case 21:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		var var6 = document.getElementById("6").checked;
		var var7 = document.getElementById("7").checked;
		var var8 = document.getElementById("8").checked;
		var var9 = document.getElementById("9").checked;
		var var10 = document.getElementById("10").checked;
		if(var1==true && var2==false && var3==false && var4==false && var5==true && var6==false && var7==true && var8==false && var9==true && var10==false){
			correcto();
		}
		else{
			error();
		}
        break;
    case 22:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").checked;
		var var7 = document.getElementById("7").checked;
		var var8 = document.getElementById("8").checked;
		var var9 = document.getElementById("9").value;
		if(var1==19.3 && var2==19.3 && var3==19.3 && var4==19.3 && var5==19.3 &&var6==false && var7==true && var8==false && var9==19.3){
			correcto();
		}
		else{
			error();
		}
        break;
    case 23:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		if(var1==9.65 && var2==9.65 && var3==true && var4==false){
			correcto();
		}
		else{
			error();
		}
        break;
    case 24:
		var var1 = document.getElementById("1").value;
		if(var1==57.9){
			correcto();
		}
		else{
			error();
		}
        break;
    case 25:
		var var1 = document.getElementById("1").value;
		if(var1==106.15){
			correcto();
		}
		else{
			error();
		}
        break;
    case 26:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1==35 && var2==28.95 && var3==1.8134){
			correcto();
		}
		else{
			error();
		}
        break;
    case 27:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1==25 && var2==28.95 && var3==1.2953){
			correcto();
		}
		else{
			error();
		}
        break;
    case 28:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		if(var1==28.95 && var2==40 && var3==40 && var4==28.95 && var5==2.0725){
			correcto();
		}
		else{
			error();
		}
        break;
    case 29:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if(var1==28.5 && var2==5 && (var3==28.5 || var3==5) && (var4==5 || var4==28.5) && var5==3 && var6==47.5){
			correcto();
		}
		else{
			error();
		}
        break;
    case 31:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		if(var1==1 && var2==222 && var3==222 && var4==1.5 && var5==148){
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
		if(var1==1 && var2==2.25 && var3==2.25 && var4==1.5 && var5==1.5 && var6==2){
			correcto();
		}
		else{
			error();
		}
        break;
    case 33:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		if(var1==1 && var2==1.8 && var3==1.8 && var4==1 && var5==2.7){
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
		if(var1==0.825 && var2==120 && var3==1.875 && var4==1.6 && var5==2.7 && var6==3 && var7==10 && var8==1.5){
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
		if(var1==1.5 && var2==7.5 && var3==2){
			correcto();
		}
		else{
			error();
		}
        break;
    case 36:
		var var1 = document.getElementById("1").value;
		if(var1==0.0125 || var1=="1/80"){
			correcto();
		}
		else{
			error();
		}
        break;
    case 37:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1==1.5 && var2==7.5 && var3==2){
			correcto();
		}
		else{
			error();
		}
        break;
    case 38:
		var var1 = document.getElementById("1").value;
		if(var1==2){
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
		if(var1==2 && var2==10 && var3==6){
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