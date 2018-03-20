function mostrar() {
	document.getElementById('ejercicio2').style.display = 'block';
	document.getElementById('ejercicio1').style.display = 'none';
	document.getElementById("1").value="";
	document.getElementById("2").value="";
	document.getElementById("3").value="";
	borrar();
}

function mostrar1() {
	document.getElementById('ejercicio3').style.display = 'block';
	document.getElementById('ejercicio2').style.display = 'none';
	document.getElementById("4").value="";
	document.getElementById("5").value="";
	document.getElementById("6").value="";
	borrar2();
}

function borrar(){
	document.getElementById("4").value="";
	document.getElementById("5").value="";
}

function borrar2(){
	document.getElementById("7").value="";
	document.getElementById("8").value="";
	document.getElementById("9").value="";
	document.getElementById("10").value="";
}

function acierto(label1) {
	switch (label1) {
    case 2:
        var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		var var9 = document.getElementById("9").value;
		if(var1=="10000" && var2 == "100000" && var3=="1000000"){
			correcto();
		}
		if(var4=="21" && var5 == "26" && var6=="31"){
			correcto();
		}
		if(var7=="64" && var8 == "125" && var9=="216"){
			correcto();
		}
        break;
    case 3:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		var var9 = document.getElementById("9").value;
		if(var1=="8" && var2 == "12" && var3=="17"){
			correcto();
		}
		if(var4=="21" && var5 == "37" && var6=="62"){
			correcto();
		}
		if(var7=="33" && var8 == "58" && var9=="94"){
			correcto();
		}
        break;
    case 4:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		var var9 = document.getElementById("9").value;
		if(var1=="37" && var2 == "32" && var3=="27"){
			correcto();
		}
		if(var4=="300" && var5 == "350" && var6=="390"){
			correcto();
		}
		if(var7=="128" && var8 == "64" && var9=="32"){
			correcto();
		}
        break;
    case 5:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		var var9 = document.getElementById("9").value;
		if(var1=="30" && var2 == "35" && var3=="41"){
			correcto();
		}
		if(var4=="24" && var5 == "120" && var6=="720"){
			correcto();
		}
		if(var7=="250" && var8 == "1250" && var9=="6250"){
			correcto();
		}
        break;
    
    case 6:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		var var9 = document.getElementById("9").value;
		if(var1=="18" && var2 == "24" && var3=="30"){
			correcto();
		}
		if(var4=="20" && var5 == "25" && var6=="31"){
			correcto();
		}
		if(var7=="23" && var8 == "17" && var9=="12"){
			correcto();
		}
        break;
    case 7:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if(var1=="23" && var2 == "27" && var3=="22"){
			correcto();
		}
		if(var4=="26" && var5 == "34" && var6=="42"){
			correcto();
		}
        break;
    case 8:
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
		if(var1=="100" && var2 == "1000" && var3=="10000" && var4=="100000" && var5=="1000000"){
			correcto();
		}
		if(var6=="11" && var7 == "16" && var8=="21" && var9=="26" && var10=="31"){
			correcto();
		}
		if(var11=="8" && var12 == "27" && var13=="64" && var14=="125" && var15=="216"){
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
		var var10 = document.getElementById("10").value;
		var var11 = document.getElementById("11").value;
		var var12 = document.getElementById("12").value;
		var var13 = document.getElementById("13").value;
		var var14 = document.getElementById("14").value;
		var var15 = document.getElementById("15").value;
		if(var1=="3" && var2 == "5" && var3=="8" && var4=="12" && var5=="17"){
			correcto();
		}
		if(var6=="8" && var7 == "12" && var8=="21" && var9=="37" && var10=="62"){
			correcto();
		}
		if(var11=="8" && var12 == "17" && var13=="33" && var14=="58" && var15=="94"){
			correcto();
		}    
        break;
    case 10:
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
		if(var1=="47" && var2 == "42" && var3=="37" && var4=="32" && var5=="27"){
			correcto();
		}
		if(var6=="10" && var7 == "80" && var8=="20" && var9=="70" && var10=="30"){
			correcto();
		}
		if(var11=="512" && var12 == "256" && var13=="128" && var14=="64" && var15=="32"){
			correcto();
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
		var var9 = document.getElementById("9").value;
		var var10 = document.getElementById("10").value;
		var var11 = document.getElementById("11").value;
		var var12 = document.getElementById("12").value;
		var var13 = document.getElementById("13").value;
		var var14 = document.getElementById("14").value;
		var var15 = document.getElementById("15").value;
		if(var1=="23" && var2 == "26" && var3=="30" && var4=="35" && var5=="41"){
			correcto();
		}
		if(var6=="2" && var7 == "6" && var8=="24" && var9=="120" && var10=="720"){
			correcto();
		}
		if(var11=="10" && var12 == "50" && var13=="250" && var14=="1250" && var15=="6250"){
			correcto();
		}    
        break;
    case 12:
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
		if(var1=="6" && var2 == "12" && var3=="18" && var4=="24" && var5=="30"){
			correcto();
		}
		if(var6=="13" && var7 == "16" && var8=="20" && var9=="25" && var10=="31"){
			correcto();
		}
		if(var11=="38" && var12 == "30" && var13=="23" && var14=="17" && var15=="12"){
			correcto();
		}    
        break;
    case 13:
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
		if(var1=="24" && var2 == "26" && var3=="23" && var4=="27" && var5=="22"){
			correcto();
		}
		if(var6=="10" && var7 == "18" && var8=="26" && var9=="34" && var10=="42"){
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