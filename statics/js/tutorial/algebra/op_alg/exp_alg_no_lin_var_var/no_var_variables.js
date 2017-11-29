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
		if(var1=="8"){
			correcto();
		}
		else{
			if(var1!="8")
				document.getElementById("1").value="";
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
		if(var1=="2" && var2 == "2"){
			correcto();
		}
		else{
			if(var1!="2")
				document.getElementById("1").value="";
			if(var2!="2")
				document.getElementById("2").value="";
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
		if(var1==true){
			correcto();
		}
		else{
			error();
		}        
        break;
    case 22:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="8" && var2 == "9"){
			correcto();
		}
		else{
			if(var1!="8")
				document.getElementById("1").value="";
			if(var2!="9")
				document.getElementById("2").value="";
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
		if(var1=="12" && var2 == "6" && var3 == "7"){
			correcto();
		}
		else{
			if(var1!="12")
				document.getElementById("1").value="";
			if(var2!="6")
				document.getElementById("2").value="";
			if(var3!="7")
				document.getElementById("3").value="";
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
		if((var1 == "0.75" || var1 == "3/4" || var1 == ".75") && var2 == "9" && var3 == "9"){
			correcto();
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
		if(var1=="7" && var2 == "6" && var3 == "5" && var4 == "3"){
			correcto();
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
		if(var1==true){
			correcto();
		}
		else{
			error();
		}        
        break; 
	case 56:
        var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="12" && var2 == "5"){
			correcto();
		}
		else{
			if(var1!="12")
				document.getElementById("1").value="";
			if(var2!="5")
				document.getElementById("2").value="";
		}        
        break;
	case 57:
        var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		var var6 = document.getElementById("6").value;
		if(var1=="12" && var2 == "1" && var3 == "2" && var4 == "5"){
			if(var5 == "2" && var6 == "1")
				correcto();
		}
		if(var1=="12" && var2 == "2" && var3 == "1" && var4 == "5"){
			if(var5 == "1" && var6 == "2")
				correcto();
		}
		else{
			if(var1!="12")
				document.getElementById("1").value="";
			if(var2 != "1")
					if(var2 != "2")
						document.getElementById("2").value="";
			if(var3 != "2")
					if(var3 != "1")
						document.getElementById("3").value="";
			if(var4!="5")
				document.getElementById("4").value="";
			if(var5 != "2")
					if(var5 != "1")
						document.getElementById("5").value="";
			if(var6 != "1")
					if(var6 != "2")
						document.getElementById("6").value="";
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