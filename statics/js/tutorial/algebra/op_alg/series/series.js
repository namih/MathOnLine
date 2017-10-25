function acierto(label1) {
	switch (label1) {
    case 5:
        var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="12" && var2 == "4"){
			correcto();
		}
		else{
			if(var1!="12")
				document.getElementById("1").value="";
			if(var2!="4")
				document.getElementById("2").value="";
		}
        break;
    case 10:
		var var1 = document.getElementById("1").value;
		if(var1=="120"){
			correcto();
		}
		else{
			if(var1!="120")
				document.getElementById("1").value="";
		}
        break;
    case 11:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="48" && var2 == "1916" && var3=="47"){
			correcto();
		}
		else{
			if(var1!="48")
				document.getElementById("1").value="";
			if(var2!="1916")
				document.getElementById("2").value="";
			if(var3!="47")
				document.getElementById("3").value="";
		}        
        break;
    case 12:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="8" && var2 == "12" && var3=="17"){
			correcto();
		}
		else{
			if(var1!="8")
				document.getElementById("1").value="";
			if(var2!="12")
				document.getElementById("2").value="";
			if(var3!="17")
				document.getElementById("3").value="";
		}        
        break;
    case 13:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="250" && var2 == "1250" && var3=="6250"){
			correcto();
		}
		else{
			if(var1!="250")
				document.getElementById("1").value="";
			if(var2!="1250")
				document.getElementById("2").value="";
			if(var3!="6250")
				document.getElementById("3").value="";
		}        
        break;
    case 14:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="18" && var2 == "24" && var3=="30"){
			correcto();
		}
		else{
			if(var1!="18")
				document.getElementById("1").value="";
			if(var2!="24")
				document.getElementById("2").value="";
			if(var3!="30")
				document.getElementById("3").value="";
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
		var var3 = document.getElementById("3").value;
		if(var1=="20" && var2 == "25" && var3=="31"){
			correcto();
		}
		else{
			if(var1!="20")
				document.getElementById("1").value="";
			if(var2!="25")
				document.getElementById("2").value="";
			if(var3!="31")
				document.getElementById("3").value="";
		}        
        break;
    case 21:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="3" && var2 == "-1.5" && var3=="0.75"){
			correcto();
		}
		else{
			if(var1!="3")
				document.getElementById("1").value="";
			if(var2!="-1.5")
				document.getElementById("2").value="";
			if(var3!="0.75")
				document.getElementById("3").value="";
		}        
        break;
    case 23:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="20" && var2 == "25" && var3=="31"){
			correcto();
		}
		else{
			if(var1!="20")
				document.getElementById("1").value="";
			if(var2!="25")
				document.getElementById("2").value="";
			if(var3!="31")
				document.getElementById("3").value="";
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
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="20" && var2 == "25" && var3=="31"){
			correcto();
		}
		else{
			if(var1!="20")
				document.getElementById("1").value="";
			if(var2!="25")
				document.getElementById("2").value="";
			if(var3!="31")
				document.getElementById("3").value="";
		}        
        break;
    case 27:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="20" && var2 == "25" && var3=="31"){
			correcto();
		}
		else{
			if(var1!="20")
				document.getElementById("1").value="";
			if(var2!="25")
				document.getElementById("2").value="";
			if(var3!="31")
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