function acierto(label1) {
	switch (label1) {
    case 1:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var3 == true && var4 == true && var5==true){
			if(var1 == true || var2 == true)
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
		if(var3 == true && var4 == true && var5==true){
			if(var1 == true || var2 == true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 5:
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
    case 8:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="2" && var2 == "1"){
			correcto();
		}
		else{
			if(var1!="2")
				document.getElementById("1").value="";
			if(var2!="1")
				document.getElementById("2").value="";
		}        
        break;
    case 9:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var2 == true && var4==true){
			if(var1 == true || var3 == true || var5 == true)
				error();
			else
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
		if(var3==true && var4==true && var5==true){
			if(var1 == true || var2 == true)
				error();
			else
				correcto();
		}
		else{
			error();
		}       
        break;
    case 12:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="7" && var2 == "1"){
			correcto();
		}
		else{
			if(var1!="7")
				document.getElementById("1").value="";
			if(var2!="1")
				document.getElementById("2").value="";
		}        
        break;
    case 13:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var2 == true && var5==true){
			if(var1 == true || var3 == true || var4==true)
				error();
			else
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
		var var6 = document.getElementById("6").checked;
		if(var2 == true && var3==true && var6==true){
			if(var1 == true || var4 == true || var5==true)
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
		if(var1 == true && var3==true && var6==true){
			if(var2 == true || var4 == true || var5==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 17:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var1 == true && var2 == true && var4==true){
			if(var3 == true || var5==true)
				error();
			else
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
		if(var1=="9" && var2 == "1" && var3 == "13"){
			correcto();
		}
		else{
			if(var1!="9")
				document.getElementById("1").value="";
			if(var2!="1")
				document.getElementById("2").value="";
			if(var3!="13")
				document.getElementById("3").value="";
		}        
        break;
    case 21:
		var var4 = document.getElementById("4").checked;
		if(var4==true){
			correcto();
		}
		else{
			error();
		}        
        break;
    case 23:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var3 == true && var4 == true){
			if(var1 == true || var2==true || var5 == true)
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
		if(var2 == true && var3 == true && var5==true){
			if(var1 == true || var4==true)
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
		if(var1 == true && var3 == true && var4==true){
			if(var2 == true || var5==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 29:
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
	case 31:
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
    case 33:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		if(var1 == true && var4 == true){
			if(var2 == true || var3==true)
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
		if(var1==true){
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
		if(var1 == true && var4 == true){
			if(var2 == true || var3==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
	case 40:
        var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="9/8" && var2 == "3/2" && var3 == "4"){
			correcto();
		}
		else{
			if(var1!="9/8")
				document.getElementById("1").value="";
			if(var2!="3/2")
				document.getElementById("2").value="";
			if(var3!="4")
				document.getElementById("3").value="";
		}        
        break;
    case 42:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="-9/4" && var2 == "1/2" && var3 == "4"){
			correcto();
		}
		else{
			if(var1!="-9/4")
				document.getElementById("1").value="";
			if(var2!="1/2")
				document.getElementById("2").value="";
			if(var3!="4")
				document.getElementById("3").value="";
		}        
        break;
	case 44:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="-9/4" && var2 == "-1/2" && var3 == "4"){
			correcto();
		}
		else{
			if(var1!="-9/4")
				document.getElementById("1").value="";
			if(var2!="-1/2")
				document.getElementById("2").value="";
			if(var3!="4")
				document.getElementById("3").value="";
		}        
        break;
    case 46:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		if(var1=="-9/4" && var2 == "-3/2" && var3 == "4"){
			correcto();
		}
		else{
			if(var1!="-9/4")
				document.getElementById("1").value="";
			if(var2!="-3/2")
				document.getElementById("2").value="";
			if(var3!="4")
				document.getElementById("3").value="";
		}        
        break;
    case 48:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="4" && var2 == "-6"){
			correcto();
		}
		else{
			if(var1!="4")
				document.getElementById("1").value="";
			if(var2!="-6")
				document.getElementById("2").value="";
		}        
        break;
    case 50:
		var var1 = document.getElementById("1").value;
		if(var1=="8"){
			correcto();
		}
		else{
			if(var1!="8")
				document.getElementById("1").value="";
		}        
        break;
    case 51:
		var var1 = document.getElementById("1").value;
		if(var1=="7"){
			correcto();
		}
		else{
			if(var1!="7")
				document.getElementById("1").value="";
		}        
        break;
    case 52:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		if(var1=="4" && var2 == "3" && var3 == "8" && var4 == "6" && var5 == "15"){
			correcto();
		}
		else{
			if(var1!="4")
				document.getElementById("1").value="";
			if(var2!="3")
				document.getElementById("2").value="";
			if(var3!="8")
				document.getElementById("3").value="";
			if(var4!="6")
				document.getElementById("4").value="";
			if(var5!="15")
				document.getElementById("5").value="";
		}        
        break;
    case 53:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		if(var1=="4" && var2 == "3" && var3 == "12" && var4 == "6" && var5 == "19"){
			correcto();
		}
		else{
			if(var1!="4")
				document.getElementById("1").value="";
			if(var2!="3")
				document.getElementById("2").value="";
			if(var3!="12")
				document.getElementById("3").value="";
			if(var4!="6")
				document.getElementById("4").value="";
			if(var5!="19")
				document.getElementById("5").value="";
		}        
        break;
    case 54:
		var var1 = document.getElementById("1").value;
		if(var1=="11"){
			correcto();
		}
		else{
			if(var1!="11")
				document.getElementById("1").value="";
		}        
        break;    
    case 55:
		var var1 = document.getElementById("1").value;
		if(var1=="15"){
			correcto();
		}
		else{
			if(var1!="15")
				document.getElementById("1").value="";
		}        
        break;
    case 56:
		var var1 = document.getElementById("1").value;
		if(var1=="21"){
			correcto();
		}
		else{
			if(var1!="21")
				document.getElementById("1").value="";
		}        
        break;
	case 57:
        var var1 = document.getElementById("1").value;
		if(var1=="8"){
			correcto();
		}
		else{
			if(var1!="8")
				document.getElementById("1").value="";
		}
        break;
	case 58:
        var var1 = document.getElementById("1").value;
		if(var1=="14"){
			correcto();
		}
		else{
			if(var1!="14")
				document.getElementById("1").value="";
		}
        break;
    case 59:
		var var1 = document.getElementById("1").value;
		if(var1=="19/3"){
			correcto();
		}
		else{
			if(var1!="19/3")
				document.getElementById("1").value="";
		}
        break;
	case 60:
		var var1 = document.getElementById("1").value;
		if(var1=="20"){
			correcto();
		}
		else{
			if(var1!="20")
				document.getElementById("1").value="";
		}
        break;
	case 61:
        var var1 = document.getElementById("1").value;
		if(var1=="40"){
			correcto();
		}
		else{
			if(var1!="40")
				document.getElementById("1").value="";
		}
        break;
	case 62:
        var var1 = document.getElementById("1").value;
		if(var1=="36"){
			correcto();
		}
		else{
			if(var1!="36")
				document.getElementById("1").value="";
		}
        break;
	case 63:
        var var1 = document.getElementById("1").value;
		if(var1=="39"){
			correcto();
		}
		else{
			if(var1!="39")
				document.getElementById("1").value="";
		}
        break;
	case 77:
        var var1 = document.getElementById("1").value;
		if(var1=="6"){
			correcto();
		}
		else{
			if(var1!="6")
				document.getElementById("1").value="";
		}
        break;
	case 78:
        var var1 = document.getElementById("1").value;
		if(var1=="10"){
			correcto();
		}
		else{
			if(var1!="10")
				document.getElementById("1").value="";
		}
        break;
    case 79:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="4" && var2 == "3"){
			correcto();
		}
		else{
			if(var1!="4")
				document.getElementById("1").value="";
			if(var2!="3")
				document.getElementById("2").value="";
		}        
        break;
	case 80:
        var var1 = document.getElementById("1").value;
		if(var1=="16"){
			correcto();
		}
		else{
			if(var1!="16")
				document.getElementById("1").value="";
		}
        break;
	case 81:
        var var1 = document.getElementById("1").value;
		if(var1=="32"){
			correcto();
		}
		else{
			if(var1!="32")
				document.getElementById("1").value="";
		}
        break;
	case 82:
        var var1 = document.getElementById("1").value;
		if(var1=="32"){
			correcto();
		}
		else{
			if(var1!="32")
				document.getElementById("1").value="";
		}
		break;
	case 83:
        var var1 = document.getElementById("1").value;
		if(var1=="40"){
			correcto();
		}
		else{
			if(var1!="40")
				document.getElementById("1").value="";
		}
        break;
	case 84:
        var var1 = document.getElementById("1").value;
		if(var1=="40"){
			correcto();
		}
		else{
			if(var1!="40")
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
function error() {
		$('#error').show();
		$("#error").fadeTo(2000, 500).slideUp(500, function(){
			$("#error").slideUp(500);
		});
	}