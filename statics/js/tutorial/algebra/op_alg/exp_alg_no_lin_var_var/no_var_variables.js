func=1;
function mostrar() {
	func=2;
	document.getElementById("1").value = "";
	document.getElementById('ejercicio2').style.display = 'block';
	document.getElementById('ejercicio1').style.display = 'none';
	document.getElementById("1").checked = false;
	document.getElementById("2").checked = false;
	document.getElementById("2").value = "";
	document.getElementById("3").value = "";
	borrar();
}

function mostrar1() {
	func=3;
	document.getElementById("2").value = "";
	document.getElementById('ejercicio3').style.display = 'block';
	document.getElementById('ejercicio2').style.display = 'none';
	document.getElementById("3").checked = false;
	document.getElementById("4").checked = false;
	document.getElementById("3").value = "";
	document.getElementById("4").value = "";
	document.getElementById("5").value = "";
	document.getElementById("6").value = "";
	borrar2();
}

function borrar() {
	document.getElementById("4").value = "";
	document.getElementById("5").value = "";
	document.getElementById("6").value = "";
}

function borrar2() {
	document.getElementById("7").value = "";
	document.getElementById("8").value = "";
	document.getElementById("9").value = "";
	document.getElementById("10").value = "";
	document.getElementById("11").value = "";
	document.getElementById("12").value = "";
}

function acierto(label1) {
	switch (label1) {
	case 1:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if (var2 == true && var3 == true) {
			if (var1 == true || var4 == true || var5 == true)
				error();
			else
				correcto();
		} else {
			error();
		}
		break;
	case 3:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if (var1 == true && var2 == true && var3 == true) {
			if (var4 == true || var5 == true)
				error();
			else
				correcto();
		} else {
			error();
		}
		break;
	case 4:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		var var6 = document.getElementById("6").checked;
		if (var2 == true && var4 == true && var5 == true) {
			if (var1 == true || var3 == true || var6 == true)
				error();
			else
				correcto();
		} else {
			error();
		}
		break;
	case 6:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if (var3 == true && var4 == true && var5 == true) {
			if (var1 == true || var2 == true)
				error();
			else
				correcto();
		} else {
			error();
		}
		break;
	case 8:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if (var1 == "8") {
			correcto();
		}
		if (var2 == "15") {
			correcto();
		}
		if (var3 == "11") {
			correcto();
		}
		break;
	case 9:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if (var2 == true && var3 == true) {
			if (var1 == true || var4 == true || var5 == true)
				error();
			else
				correcto();
		} else {
			error();
		}
		break;
	case 11:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if (var3 == true && var4 == true) {
			if (var1 == true || var2 == true || var5 == true)
				error();
			else
				correcto();
		} else {
			error();
		}
		break;
	case 13:
		var var3 = document.getElementById("3").checked;
		if (var3 == true) {
			correcto();
		} else {
			error();
		}
		break;
	case 15:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if (var4 == true && var5 == true) {
			if (var1 == true || var2 == true || var3 == true)
				error();
			else
				correcto();
		} else {
			error();
		}
		break;
	case 18:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if (var1 == "2" && var2 == "2") {
			correcto();
		}
		if (var3 == "2" && var4 == "8") {
			correcto();
		}
		if (var5 == "5" && var6 == "1") {
			correcto();
		}
		break;
	case 19:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if (var3 == true && var5 == true) {
			if (var1 == true || var2 == true || var4 == true)
				error();
			else
				correcto();
		} else {
			error();
		}
		break;
	case 21:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("4").checked;
		var var3 = document.getElementById("6").checked;
		if (var1 == true) {
			correcto();
		} else {
			error();
		}
		if (var2 == true) {
			correcto();
		}
		if (var3 == true) {
			correcto();
		}
		break;
	case 22:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if (var1 == "8" && var2 == "9") {
			correcto();
		}
		if (var3 == "4" && var4 == "6") {
			correcto();
		}
		if (var5 == "5" && var6 == "3") {
			correcto();
		}
		break;
	case 23:
		var var3 = document.getElementById("3").checked;
		if (var3 == true) {
			correcto();
		} else {
			error();
		}
		break;
	case 24:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if (var2 == true && var5 == true) {
			if (var1 == true || var3 == true || var4 == true)
				error();
			else
				correcto();
		} else {
			error();
		}
		break;
	case 25:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if (var1 == true && var4 == true) {
			if (var2 == true || var3 == true || var5 == true)
				error();
			else
				correcto();
		} else {
			error();
		}
		break;
	case 26:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if (var3 == true && var5 == true) {
			if (var1 == true || var2 == true || var4 == true)
				error();
			else
				correcto();
		} else {
			error();
		}
		break;
	case 27:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if (var3 == true && var5 == true) {
			if (var1 == true || var2 == true || var4 == true)
				error();
			else
				correcto();
		} else {
			error();
		}
		break;
	case 28:
		var var3 = document.getElementById("3").checked;
		if (var3 == true) {
			correcto();
		} else {
			error();
		}
		break;
	case 29:
		var var3 = document.getElementById("3").checked;
		if (var3 == true) {
			correcto();
		} else {
			error();
		}
		break;
	case 30:
		var var3 = document.getElementById("3").checked;
		if (var3 == true) {
			correcto();
		} else {
			error();
		}
		break;
	case 31:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if (var1 == true && var3 == true) {
			if (var2 == true || var4 == true || var5 == true)
				error();
			else
				correcto();
		} else {
			error();
		}
		break;
	case 32:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if (var1 == true && var3 == true && var5 == true) {
			if (var2 == true || var4 == true)
				error();
			else
				correcto();
		} else {
			error();
		}
		break;
	case 33:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if (var1 == true && var3 == true && var5 == true) {
			if (var2 == true || var4 == true)
				error();
			else
				correcto();
		} else {
			error();
		}
		break;
	case 35:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if (var3 == true && var5 == true) {
			if (var1 == true || var2 == true || var4 == true)
				error();
			else
				correcto();
		} else {
			error();
		}
		break;
	case 37:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		var var6 = document.getElementById("6").checked;
		if (var2 == true && var4 == true && var6 == true) {
			if (var1 == true || var3 == true || var5 == true)
				error();
			else
				correcto();
		} else {
			error();
		}
		break;
	case 39:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		var var9 = document.getElementById("9").value;
		if (var1 == "12" && var2 == "6" && var3 == "7") {
			correcto();
		}
		if (var4 == "2" && var5 == "11" && var6 == "7") {
			correcto();
		}
		if (var7 == "-2" && var8 == "2" && var9 == "13") {
			correcto();
		}
		break;
	case 40:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		var var6 = document.getElementById("6").checked;
		if (var2 == true && var4 == true) {
			if (var1 == true || var3 == true || var5 == true || var6 == true)
				error();
			else
				correcto();
		} else {
			error();
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
		if ((var1 == 0.75 || var1 == "3/4") && var2 == "9" && var3 == "9") {
			correcto();
		}
		if ((var4 == "1.25" || var4 == "5/4") && (var5 == "1.5" || var5 == "3/2") && var6 == "6") {
			correcto();
		}
		if ((var7 == "2.25" || var7 == "9/4") && var8 == "1" && var9 == "2") {
			correcto();
		}
		break;
	case 43:
		var var1 = document.getElementById("1").checked;
		if (var1 == true) {
			correcto();
		} else {
			error();
		}
		break;
	case 44:
		var var3 = document.getElementById("3").checked;
		if (var3 == true) {
			correcto();
		} else {
			error();
		}
		break;
	case 45:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if (var3 == true && var5 == true) {
			if (var1 == true || var2 == true || var4 == true)
				error();
			else
				correcto();
		} else {
			error();
		}
		break;
	case 46:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if (var3 == true && var5 == true) {
			if (var1 == true || var2 == true || var4 == true)
				error();
			else
				correcto();
		} else {
			error();
		}
		break;
	case 47:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if (var2 == true && var4 == true) {
			if (var1 == true || var3 == true || var5 == true)
				error();
			else
				correcto();
		} else {
			error();
		}
		break;
	case 50:
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
		if (var1 == "7" && var2 == "6" && var3 == "5" && var4 == "3") {
			correcto();
		}
		if (var5 == "8" && var6 == "3" && var7 == "10" && var8 == "8") {
			correcto();
		}
		if ((var9 == "-3/2" || var9 == "-1.5") && var10 == "-6" && var11 == "0") {
			correcto();
		}
		break;
	case 51:
		var var1 = document.getElementById("1").checked;
		if (var1 == true) {
			correcto();
		} else {
			error();
		}
		break;
	case 52:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if (var1 == true && var4 == true) {
			if (var2 == true || var3 == true || var5 == true)
				error();
			else
				correcto();
		} else {
			error();
		}
		break;
	case 55:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("3").checked;
		var var3 = document.getElementById("6").checked;
		if (var1 == true) {
			correcto();
		} else {
			error();
		}
		if (var2 == true) {
			correcto();
		}
		if (var3 == true) {
			correcto();
		}
		break;
	case 56:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if (var1 == "12" && var2 == "5") {
			correcto();
		}
		if (var3 == "11" && var4 == "5") {
			correcto();
		}
		if (var5 == "3" && var6 == "-2") {
			correcto();
		}
		break;
	case 57:
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
		if(func==1){
			if (var1 == "12" && var4 == "5" && var2 == "1" && var3 == "2" && var5 == "2" && var6 == "1") {
					correcto();
			}
			else{
				if (var1 == "5" && var4 == "12" && var2 == "2" && var3 == "1" && var5 == "1" && var6 == "2") {
					correcto();
				}
				else{
					error();
				}
				
			}
		}
		
		
		if(func==2){
			if (var7 == "13" && var10 == "-2" && var8 == "1" && var9 == "2" && var11 == "2" && var12 == "1") {
					correcto();
			}
			else{
				if (var7 == "-2" && var10 == "13" && var8 == "2" && var9 == "1" && var11 == "1" && var12 == "2") {
					correcto();
				}
				else{
					error();
				}
			}
		}
		
		if(func==3){
			if (var13 == "3" && var16 == "-1" && var14 == "1" && var15 == "2" && var17 == "2" && var18 == "1") {
					correcto();
			}
			else {
				if (var13 == "-1" && var16 == "3" && var14 == "2" && var15 == "1" && var17 == "1" && var18 == "2"){
					correcto();
				}
				else{
					error();
				}
			}
		}
		break;
		
	}
}

function correcto() {
	$('#correcta').show();
	$("#correcta").fadeTo(2000, 500).slideUp(500, function() {
		$("#correcta").slideUp(500);
	});
}

function error() {
	$('#error').show();
	$("#error").fadeTo(2000, 500).slideUp(500, function() {
		$("#error").slideUp(500);
	});
}