function mostrar() {

	document.getElementById('ejercicio2').style.display = 'block';
	document.getElementById('ejercicio1').style.display = 'none';
}

function mostrar1() {
	document.getElementById('ejercicio3').style.display = 'block';
	document.getElementById('ejercicio2').style.display = 'none';
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
		if(var1=="12" && var2 == "4"){
			correcto();
			document.getElementById("1").value="";
			document.getElementById("2").value="";
		}
		else{
			if(var1!="12")
				document.getElementById("1").value="";
			if(var2!="4")
				document.getElementById("2").value="";
		}
		if(var3=="2" && var4 == "5"){
			correcto();
			document.getElementById("3").value="";
			document.getElementById("4").value="";
		}
		else{
			if(var3!="2")
				document.getElementById("3").value="";
			if(var4!="5")
				document.getElementById("4").value="";
		}
		if(var5=="25" && var6 == "-4"){
			correcto();
		}
		else{
			if(var5!="25")
				document.getElementById("5").value="";
			if(var6!="-4")
				document.getElementById("6").value="";
		}
        break;
    case 10:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="120"){
			correcto();
			document.getElementById("1").value="";
		}
		else{
			if(var1!="120")
				document.getElementById("1").value="";
		}
        if(var2=="-165"){
			correcto();
			document.getElementById("2").value="";
		}
		else{
			if(var2!="-165")
				document.getElementById("2").value="";
		}
		if(var3=="678.5"){
			correcto();
		}
		else{
			if(var3!="678.5")
				document.getElementById("3").value="";
		}
        break;
    case 11:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="48" && var2 == "72" && var3=="47"){
			correcto();
		}
		else{
			if(var1!="48")
				document.getElementById("1").value="";
			if(var2!="72")
				document.getElementById("2").value="";
			if(var3!="47")
				document.getElementById("3").value="";
		}        
        break;
    case 12:
		var var1 = document.getElementById("1").value;
		if(var1=="-250"){
			correcto();
		}
		else{
			if(var1!="-250")
				document.getElementById("1").value="";
		}
        break;
    case 13:
		var var1 = document.getElementById("1").value;
		if(var1=="1035"){
			correcto();
		}
		else{
			if(var1!="1035")
				document.getElementById("1").value="";
		}
        break;
    case 14:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="7" && var2 == "31"){
			correcto();
		}
		else{
			if(var1!="7")
				document.getElementById("1").value="";
			if(var2!="31")
				document.getElementById("2").value="";
		}        
        break;
    case 15:
		var var1 = document.getElementById("1").value;
		if(var1=="867"){
			correcto();
		}
		else{
			if(var1!="867")
				document.getElementById("1").value="";
		}        
        break;
    case 16:
		var var1 = document.getElementById("1").value;
		if(var1=="1942"){
			correcto();
		}
		else{
			if(var1!="1942")
				document.getElementById("1").value="";
		}        
        break;
    case 17:
		var var1 = document.getElementById("1").value;
		if(var1=="725"){
			correcto();
		}
		else{
			if(var1!="725")
				document.getElementById("1").value="";
		}        
        break;
    case 18:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="41800" && var2 == "39200"){
			correcto();
		}
		else{
			if(var1!="41800")
				document.getElementById("1").value="";
			if(var2!="39200")
				document.getElementById("2").value="";
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
		if(var1=="3" && var2 == "-1.5" && var3=="0.75"){
			correcto();
			document.getElementById("1").value="";
			document.getElementById("2").value="";
			document.getElementById("3").value="";
		}
		else{
			if(var1!="3")
				document.getElementById("1").value="";
			if(var2!="-1.5")
				document.getElementById("2").value="";
			if(var3!="0.75")
				document.getElementById("3").value="";
		}   
		if(var4=="10" && var5=="20" && var6=="40"){
			correcto();
			document.getElementById("4").value="";
			document.getElementById("5").value="";
			document.getElementById("6").value="";
		}
		else{
			if(var4!="10")
				document.getElementById("4").value="";
			if(var5!="20")
				document.getElementById("5").value="";
			if(var6!="40")
				document.getElementById("6").value="";
		}
		if(var7=="6" && var8 == "12" && var9=="24"){
			correcto();
		}
		else{
			if(var7!="6")
				document.getElementById("7").value="";
			if(var8!="12")
				document.getElementById("8").value="";
			if(var9!="24")
				document.getElementById("9").value="";
		}
        break;
    case 23:
		var var1 = document.getElementById("1").value;
		if(var1=="50.097"){
			correcto();
		}
		else{
			if(var1!="50.097")
				document.getElementById("1").value="";
		}        
        break;
    case 25:
		var var1 = document.getElementById("1").value;
		if(var1=="9223372036854770000"){
			correcto();
		}
		else{
			if(var1!="9223372036854770000")
				document.getElementById("1").value="";
		}        
        break;
    case 26:
		var var1 = document.getElementById("1").value;
		if(var1=="42949.667"){
			correcto();
		}
		else{
			if(var1!="42949.667")
				document.getElementById("1").value="";
		}        
        break;
    case 27:
		var var1 = document.getElementById("1").value;
		if(var1=="1048576"){
			correcto();
		}
		else{
			if(var1!="1048576")
				document.getElementById("1").value="";
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