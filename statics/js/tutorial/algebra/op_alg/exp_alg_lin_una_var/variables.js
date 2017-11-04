function acierto(label1) {
	switch (label1) {
    case 2:
        var var1 = document.getElementById("1").value;
		if(var1=="7"){
			correcto();
		}
		else{
			if(var1!="7")
				document.getElementById("1").value="";
		}
        break;
    case 3:
		var var1 = document.getElementById("1").value;
		if(var1=="13"){
			correcto();
		}
		else{
			if(var1!="13")
				document.getElementById("1").value="";
		}
        break;
    case 5:
		var var3 = document.getElementById("3").checked;
		if(var3==true){
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
		if(var4 == true && var5==true){
			if(var1 == true || var2 == true || var3==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 8:
		var var2 = document.getElementById("2").checked;
		if(var2 == true){
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
		if(var1 == true && var3 == true && var5==true){
			if(var2 == true || var4==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 12:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		var var6 = document.getElementById("6").checked;
		if(var1 == true && var5 == true && var6==true){
			if(var2 == true || var3 == true || var4 == true)
				error();
			else
				correcto();
		}
		else{
			error();
		}  
    case 14:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		var var6 = document.getElementById("6").checked;
		if(var2 == true && var3 == true && var6==true){
			if(var1 == true || var4 == true || var5 == true)
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
		if(var1==true && var4==true && var5==true && var6==true){
			if(var2 == true || var3 == true)
				error();
			else
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
    case 20:
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
    case 22:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		var var6 = document.getElementById("6").checked;
		if(var3==true && var4==true){
			if(var1 == true || var2 == true || var5==true || var6==true)
				error();
			else
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
    case 26:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var3 == true && var4 == true && var5==true){
			if(var1 == true || var2==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 28:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var3 == true && var5==true){
			if(var1 == true || var2==true || var4==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 30:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var3 == true && var5==true){
			if(var1 == true || var2==true || var4==true)
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
		if(var2 == true && var4 == true && var5==true){
			if(var1 == true || var3==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 34:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var2 == true && var4 == true && var5==true){
			if(var1 == true || var3==true)
				error();
			else
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
		if(var1=="10" && var2 == "18" && var3=="26" && var4=="34" && var5=="42"){
			correcto();
		}
		else{
			if(var1!="10")
				document.getElementById("1").value="";
			if(var2!="18")
				document.getElementById("2").value="";
			if(var3!="26")
				document.getElementById("3").value="";
			if(var4!="34")
				document.getElementById("4").value="";
			if(var5!="42")
				document.getElementById("5").value="";
		}        
        break;
    case 36:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var2 == true && var3 == true && var4==true){
			if(var1 == true || var5==true)
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
		if(var1=="3"){
			correcto();
		}
		else{
			if(var1!="3")
				document.getElementById("1").value="";
		}
        break;
    case 40:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var3 == true && var4 == true && var5==true){
			if(var1 == true || var2==true)
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
		if(var1=="9"){
			correcto();
		}
		else{
			if(var1!="9")
				document.getElementById("1").value="";
		}
        break;
	case 44:
        var var1 = document.getElementById("1").value;
		if(var1=="13"){
			correcto();
		}
		else{
			if(var1!="13")
				document.getElementById("1").value="";
		}
        break;
	case 46:
        var var1 = document.getElementById("1").value;
		if(var1=="13"){
			correcto();
		}
		else{
			if(var1!="13")
				document.getElementById("1").value="";
		}
        break;
    case 48:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="13" && var2 == "17"){
			correcto();
		}
		else{
			if(var1!="13")
				document.getElementById("1").value="";
			if(var2!="17")
				document.getElementById("2").value="";
		}        
        break;
	case 49:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var2 == true && var4==true){
			if(var1 == true || var3==true || var5==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 51:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var2 == true && var3==true && var5==true){
			if(var1 == true || var4==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 53:
		var var1 = document.getElementById("1").checked;
		var var2 = document.getElementById("2").checked;
		var var3 = document.getElementById("3").checked;
		var var4 = document.getElementById("4").checked;
		var var5 = document.getElementById("5").checked;
		if(var2 == true && var4==true){
			if(var1 == true || var3==true || var5==true)
				error();
			else
				correcto();
		}
		else{
			error();
		}        
        break;
    case 56:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="9" && var2 == "4"){
			correcto();
		}
		else{
			if(var1!="9")
				document.getElementById("1").value="";
			if(var2!="4")
				document.getElementById("2").value="";
		}        
        break;
    case 58:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="5" && var2 == "4"){
			correcto();
		}
		else{
			if(var1!="5")
				document.getElementById("1").value="";
			if(var2!="4")
				document.getElementById("2").value="";
		}        
        break;
    case 60:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="13" && var2 == "17"){
			correcto();
		}
		else{
			if(var1!="13")
				document.getElementById("1").value="";
			if(var2!="17")
				document.getElementById("2").value="";
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