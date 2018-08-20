function mostrar() {

	document.getElementById('ejercicio2').style.display = 'block';
	document.getElementById('ejercicio1').style.display = 'none';
	document.getElementById("1").value="";
	borrar();
}

function mostrar1() {
	document.getElementById('ejercicio3').style.display = 'block';
	document.getElementById('ejercicio2').style.display = 'none';
	borrar();
}

function borrar(){
	document.getElementById("2").value="";
	document.getElementById("3").value="";
	document.getElementById("4").value="";
	document.getElementById("5").value="";
	document.getElementById("6").value="";
}

function acierto(label1) {
	switch (label1) {
    case 5:
        var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if(var1==12 && var2 == 4){
			correcto();
		}
		if(var3==2 && var4 == 5){
			correcto();
		}
		if(var5==25 && var6 == -4){
			correcto();
		}
        break;
    case 10:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1==120){
			correcto();
		}
        if(var2==-165){
			correcto();
		}
		if(var3==678.5){
			correcto();
		}
        break;
    case 11:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1==48 && var2 == 72 && var3==47){
			correcto();
		}      
        break;
    case 12:
		var var1 = document.getElementById("1").value;
		if(var1==-250){
			correcto();
		}
        break;
    case 13:
		var var1 = document.getElementById("1").value;
		if(var1==1035){
			correcto();
		}
        break;
    case 14:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==7 && var2 == 31){
			correcto();
		}       
        break;
    case 15:
		var var1 = document.getElementById("1").value;
		if(var1==867){
			correcto();
		}        
        break;
    case 16:
		var var1 = document.getElementById("1").value;
		if(var1==1942){
			correcto();
		}       
        break;
    case 17:
		var var1 = document.getElementById("1").value;
		if(var1==725){
			correcto();
		}        
        break;
    case 18:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==41800 && var2 == 39200){
			correcto();
		}       
        break;
    case 21:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		var var9 = document.getElementById("9").value;
		if(var1==3 && var2 == -1.5 && var3==0.75){
				correcto();
		}   
		if(var4==10 && var5==20 && var6==40){
			correcto();
		}
		if(var7==6 && var8 == 12 && var9==24){
			correcto();
		}
        break;
    case 23:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1==19.9804){
			correcto();
		}
		if(var2==100){
			correcto();
		}
		if(var3==110){
			correcto();
		}        
        break;
    case 25:
		var var1 = document.getElementById("1").value;
		if(var1==9223372036854770000){
			correcto();
		}        
        break;
    case 26:
		var var1 = document.getElementById("1").value;
		if(var1==42949.67296){
			correcto();
		}       
        break;
    case 27:
		var var1 = document.getElementById("1").value;
		if(var1==1048576){
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