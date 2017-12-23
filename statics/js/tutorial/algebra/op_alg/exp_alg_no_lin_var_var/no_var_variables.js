function mostrar() {

	document.getElementById('ejercicio2').style.display = 'block';
	document.getElementById('ejercicio1').style.display = 'none';
	document.getElementById("1").checked=false;
}

function mostrar1() {
	document.getElementById('ejercicio3').style.display = 'block';
	document.getElementById('ejercicio2').style.display = 'none';
	document.getElementById("2").checked=false;
	document.getElementById("3").checked=false;
}

function acierto(label1) {
	switch (label1) {
    case 1:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var2 == true && var3 == true){
			if(var1 == true || var4 == true || var5 == true)
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
		if(var1 == true && var2 == true && var3==true){
			if(var4 == true || var5 == true)
				error();
			else
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
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		var var6 = document.getElementById("6").checked;
		if(var2 == true && var4 == true && var5==true){
			if(var1 == true || var3 == true || var6==true)
				error();
			else
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
		if(var3 == true && var4 == true){
			if(var1 == true || var2 == true || var5==true)
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
		if(var1=="8"){
			correcto();
			document.getElementById("1").value="";
		}
		else{
			if(var1!="8")
				document.getElementById("1").value="";
		}
		if(var2=="15"){
			correcto();
			document.getElementById("2").value="";
		}
		else{
			if(var2!="15")
				document.getElementById("2").value="";
		}
		if(var3=="11"){
			correcto();
		}
		else{
			if(var3!="11")
				document.getElementById("3").value="";
		}
        break;
    case 9:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var2==true && var3==true){
			if(var1 == true || var4 == true || var5==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}       
        break;
    case 11:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var3==true && var4==true){
			if(var1 == true || var2 == true || var5==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}       
        break;
    case 13:
		var var3 = document.getElementById("3").checked;
		if(var3==true){
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
		if(var4==true && var5==true){
			if(var1 == true || var2 == true || var3==true)
				error();
			else
				correcto();
		}
		else{
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
		if(var1=="2" && var2 == "2"){
			correcto();
			document.getElementById("1").value="";
			document.getElementById("2").value="";
		}
		else{
			if(var1!="2")
				document.getElementById("1").value="";
			if(var2!="2")
				document.getElementById("2").value="";
		}
		if(var3=="2" && var4 == "8"){
			correcto();
			document.getElementById("3").value="";
			document.getElementById("4").value="";
		}
		else{
			if(var3!="2")
				document.getElementById("3").value="";
			if(var4!="8")
				document.getElementById("4").value="";
		}
		if(var5=="5" && var6 == "1"){
			correcto();
		}
		else{
			if(var5!="5")
				document.getElementById("5").value="";
			if(var6!="1")
				document.getElementById("6").value="";
		} 
        break;
    case 19:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var3 == true && var5 == true){
			if(var1 == true || var2 == true || var4==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 21:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("4").checked;
		var var3 = document.getElementById("6").checked;
		if(var1==true){
			correcto();
		}
		else{
			error();
		}
		if(var2==true){
			correcto();
		} 
		if(var3==true){
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
		if(var1=="8" && var2 == "9"){
			correcto();
			document.getElementById("1").value="";
			document.getElementById("2").value="";
		}
		else{
			if(var1!="8")
				document.getElementById("1").value="";
			if(var2!="9")
				document.getElementById("2").value="";
		}
		if(var3=="4" && var4 == "6"){
			correcto();
			document.getElementById("3").value="";
			document.getElementById("4").value="";
		}
		else{
			if(var3!="4")
				document.getElementById("3").value="";
			if(var4!="6")
				document.getElementById("4").value="";
		}
		if(var5=="5" && var6 == "3"){
			correcto();
		}
		else{
			if(var5!="5")
				document.getElementById("5").value="";
			if(var6!="3")
				document.getElementById("6").value="";
		}
        break;
    case 23:
		var var3 = document.getElementById("3").checked;
		if(var3==true){
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
		if(var2 == true && var5 == true){
			if(var1 == true || var3==true || var4 == true)
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
		if(var1 == true && var4 == true){
			if(var2 == true || var3==true || var5 == true)
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
    case 27:
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
	case 28:
        var var3 = document.getElementById("3").checked;
		if(var3==true){
			correcto();
		}
		else{
			error();
		}        
        break;
	case 29:
        var var3 = document.getElementById("3").checked;
		if(var3==true){
			correcto();
		}
		else{
			error();
		}        
        break;
	case 30:
        var var3 = document.getElementById("3").checked;
		if(var3==true){
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
		if(var1 == true && var3 == true){
			if(var2 == true || var4==true || var5 == true)
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
		if(var1 == true && var3 == true && var5==true){
			if(var2 == true || var4 == true)
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
		var var5 = document.getElementById("5").checked;
		if(var1 == true && var3 == true && var5==true){
			if(var2 == true || var4 == true)
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
    case 37:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		var var6 = document.getElementById("6").checked;
		if(var2 == true && var4 == true && var6==true){
			if(var1 == true || var3 == true || var5==true)
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
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		var var9 = document.getElementById("9").value;
		if(var1=="12" && var2 == "6" && var3 == "7"){
			correcto();
			document.getElementById("1").value="";
			document.getElementById("2").value="";
			document.getElementById("3").value="";
		}
		else{
			if(var1!="12")
				document.getElementById("1").value="";
			if(var2!="6")
				document.getElementById("2").value="";
			if(var3!="7")
				document.getElementById("3").value="";
		}
		if(var4=="2" && var5 == "11" && var6 == "7"){
			correcto();
			document.getElementById("4").value="";
			document.getElementById("5").value="";
			document.getElementById("6").value="";
		}
		else{
			if(var4!="2")
				document.getElementById("4").value="";
			if(var5!="11")
				document.getElementById("5").value="";
			if(var6!="7")
				document.getElementById("6").value="";
		}
		if(var7=="-2" && var8 == "2" && var9 == "13"){
			correcto();
		}
		else{
			if(var7!="-2")
				document.getElementById("7").value="";
			if(var8!="2")
				document.getElementById("8").value="";
			if(var9!="13")
				document.getElementById("9").value="";
		}
        break;
    case 40:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		var var6 = document.getElementById("6").checked;
		if(var2 == true && var4 == true){
			if(var1 == true || var3 == true || var5==true || var6 == true)
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
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		var var7 = document.getElementById("7").value;
		var var8 = document.getElementById("8").value;
		var var9 = document.getElementById("9").value;
		if((var1 == "0.75" || var1 == "3/4" || var1 == ".75") && var2 == "9" && var3 == "9"){
			correcto();
			document.getElementById("1").value="";
			document.getElementById("2").value="";
			document.getElementById("3").value="";
		}
		else{
			if(var1!="0.75") 
				if(var1 != "3/4")
					if(var1 != ".75")
						document.getElementById("1").value="";
			if(var2!="9")
				document.getElementById("2").value="";
			if(var3!="9")
				document.getElementById("3").value="";
		}
		if((var4 == "1.25" || var4 == "5/4") && (var5 == "1.5" || var5 == "3/2") && var6 == "6"){
			correcto();
			document.getElementById("4").value="";
			document.getElementById("5").value="";
			document.getElementById("6").value="";
		}
		else{
			if(var4!="1.25") 
				if(var4 != "5/4")
						document.getElementById("4").value="";
			if(var5!="1.5") 
				if(var5 != "3/2")
						document.getElementById("5").value="";
			if(var6!="6")
				document.getElementById("6").value="";
		}
		if((var7 == "2.25" || var7 == "9/4") && var8 == "1" && var9 == "2"){
			correcto();
		}
		else{
			if(var7!="2.25") 
				if(var7 != "9/4")
						document.getElementById("7").value="";
			if(var8!="1")
				document.getElementById("8").value="";
			if(var9!="2")
				document.getElementById("9").value="";
		}
        break;
    case 43:
		var var1 = document.getElementById("1").checked;
		if(var1==true){
			correcto();
		}
		else{
			error();
		}        
        break;   
    case 44:
		var var3 = document.getElementById("3").checked;
		if(var3==true){
			correcto();
		}
		else{
			error();
		}        
        break;
    case 45:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var3 == true && var5 == true){
			if(var1 == true || var2 == true || var4==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
	case 46:
        var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var2 == true && var3 == true){
			if(var1 == true || var4 == true || var5==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
	case 47:
        var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var2 == true && var4 == true){
			if(var1 == true || var3 == true || var5==true)
				error();
			else
				correcto();
		}
		else{
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
		if(var1=="7" && var2 == "6" && var3 == "5" && var4 == "3"){
			correcto();
			document.getElementById("1").value="";
			document.getElementById("2").value="";
			document.getElementById("3").value="";
			document.getElementById("4").value="";
		}
		else{
			if(var1!="7")
				document.getElementById("1").value="";
			if(var2!="6")
				document.getElementById("2").value="";
			if(var3!="5")
				document.getElementById("3").value="";
			if(var4!="3")
				document.getElementById("4").value="";
		}
		if(var5=="8" && var6 == "3" && var7 == "10" && var8 == "8"){
			correcto();
			document.getElementById("5").value="";
			document.getElementById("6").value="";
			document.getElementById("7").value="";
			document.getElementById("8").value="";
		}
		else{
			if(var5!="8")
				document.getElementById("5").value="";
			if(var6!="3")
				document.getElementById("6").value="";
			if(var7!="10")
				document.getElementById("7").value="";
			if(var8!="8")
				document.getElementById("8").value="";
		}
		if((var9=="-3/2" || var9=="-1.5") && var10 == "-6" && var11 == "0"){
			correcto();
		}
		else{
			if(var9!="-3/2")
				if(var9!="-1.5")
					document.getElementById("9").value="";
			if(var10!="-6")
				document.getElementById("10").value="";
			if(var11!="0")
				document.getElementById("11").value="";
		}
        break;
	case 51:
		var var1 = document.getElementById("1").checked;
		if(var1==true){
			correcto();
		}
		else{
			error();
		}        
        break;
	case 52:
        var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var1 == true && var4 == true){
			if(var2 == true || var3 == true || var5==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
	case 55:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("3").checked;
		var var3 = document.getElementById("6").checked;
		if(var1==true){
			correcto();
		}
		else{
			error();
		}
		if(var2==true){
			correcto();
		} 
		if(var3==true){
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
		if(var1=="12" && var2 == "5"){
			correcto();
			document.getElementById("1").value="";
			document.getElementById("2").value="";
		}
		else{
			if(var1!="12")
				document.getElementById("1").value="";
			if(var2!="5")
				document.getElementById("2").value="";
		}
		if(var3=="11" && var4 == "5"){
			correcto();
			document.getElementById("3").value="";
			document.getElementById("4").value="";
		}
		else{
			if(var3!="11")
				document.getElementById("3").value="";
			if(var4!="5")
				document.getElementById("4").value="";
		}
		if(var5=="3" && var6 == "-2"){
			correcto();
		}
		else{
			if(var5!="3")
				document.getElementById("5").value="";
			if(var6!="-2")
				document.getElementById("6").value="";
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
		if(var1=="12" && var4 == "5"){
			if(var2 == "1" && var3 == "2" && var5 == "2" && var6 == "1"){
				correcto();
				document.getElementById("1").value="";
				document.getElementById("2").value="";
				document.getElementById("3").value="";
				document.getElementById("4").value="";
				document.getElementById("5").value="";
				document.getElementById("6").value="";
			}
			
		}
		if(var1=="5" && var4 == "12"){
			if(var2 == "2" && var3 == "1" && var5 == "1" && var6 == "2"){
				correcto();
				document.getElementById("1").value="";
				document.getElementById("2").value="";
				document.getElementById("3").value="";
				document.getElementById("4").value="";
				document.getElementById("5").value="";
				document.getElementById("6").value="";
			}
		}
		
		if(var1!="12")
			if(var1!="5")
				document.getElementById("1").value="";
		if(var2 != "1")
			if(var2 != "2")
				document.getElementById("2").value="";
		if(var3 != "2")
			if(var3 != "1")
				document.getElementById("3").value="";
		if(var4!="5")
			if(var4 !="12")
				document.getElementById("4").value="";
		if(var5 != "2")
			if(var5 != "1")
				document.getElementById("5").value="";
		if(var6 != "1")
			if(var6 != "2")
				document.getElementById("6").value="";
		
		
				
		if(var7=="13" && var10 == "-2"){
			if(var8 == "1" && var9 == "2" && var11 == "2" && var12 == "1"){
				correcto();
				document.getElementById("7").value="";
				document.getElementById("8").value="";
				document.getElementById("9").value="";
				document.getElementById("10").value="";
				document.getElementById("11").value="";
				document.getElementById("12").value="";
			}
		}
		if(var7=="-2" && var10 == "13"){
			if(var8 == "2" && var9 == "1" && var11 == "1" && var12 == "2"){
				correcto();
				document.getElementById("7").value="";
				document.getElementById("8").value="";
				document.getElementById("9").value="";
				document.getElementById("10").value="";
				document.getElementById("11").value="";
				document.getElementById("12").value="";
			}
		}
			if(var7!="13")
				if(var7!="-2")
					document.getElementById("7").value="";
			if(var8 != "1")
				if(var8 != "2")
					document.getElementById("8").value="";
			if(var9 != "2")
				if(var9 != "1")
					document.getElementById("9").value="";
			if(var10!="-2")
				if(var10 !="13")
					document.getElementById("10").value="";
			if(var11 != "2")
				if(var11 != "1")
					document.getElementById("11").value="";
			if(var12 != "1")
				if(var12 != "2")
					document.getElementById("12").value="";
		
	
		
		if(var13=="3" && var16 == "-1"){
			if(var14 == "1" && var15 == "2" && var17 == "2" && var18 == "1")
				correcto();
		}
		if(var13=="-1" && var16 == "3"){
			if(var14 == "2" && var15 == "1" && var17 == "1" && var18 == "2")
				correcto();
		}
	
			if(var13!="3")
				if(var13!="-1")
					document.getElementById("13").value="";
			if(var14 != "1")
					if(var14 != "2")
						document.getElementById("14").value="";
			if(var15 != "2")
					if(var15 != "1")
						document.getElementById("15").value="";
			if(var16!="3")
				if(var16 !="-1")
					document.getElementById("16").value="";
			if(var17 != "2")
					if(var17 != "1")
						document.getElementById("17").value="";
			if(var18 != "1")
					if(var18 != "2")
						document.getElementById("18").value="";
		
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