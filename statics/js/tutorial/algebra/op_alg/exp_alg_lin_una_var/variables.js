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
    case 21:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		if(var1=="8" && var2 == "27" && var3=="64" && var4=="125" && var5=="216"){
			correcto();
		}
		else{
			if(var1!="8")
				document.getElementById("1").value="";
			if(var2!="27")
				document.getElementById("2").value="";
			if(var3!="64")
				document.getElementById("3").value="";
			if(var4!="125")
				document.getElementById("4").value="";
			if(var5!="216")
				document.getElementById("5").value="";
		}        
        break;
    case 22:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		if(var1=="3" && var2 == "5" && var3=="8" && var4=="12" && var5=="17"){
			correcto();
		}
		else{
			if(var1!="3")
				document.getElementById("1").value="";
			if(var2!="5")
				document.getElementById("2").value="";
			if(var3!="8")
				document.getElementById("3").value="";
			if(var4!="12")
				document.getElementById("4").value="";
			if(var5!="17")
				document.getElementById("5").value="";
		}        
        break;
    case 23:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		if(var1=="8" && var2 == "11" && var3=="20" && var4=="36" && var5=="61"){
			correcto();
		}
		else{
			if(var1!="8")
				document.getElementById("1").value="";
			if(var2!="11")
				document.getElementById("2").value="";
			if(var3!="20")
				document.getElementById("3").value="";
			if(var4!="36")
				document.getElementById("4").value="";
			if(var5!="61")
				document.getElementById("5").value="";
		}        
        break;
    case 24:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		if(var1=="8" && var2 == "17" && var3=="33" && var4=="58" && var5=="94"){
			correcto();
		}
		else{
			if(var1!="8")
				document.getElementById("1").value="";
			if(var2!="17")
				document.getElementById("2").value="";
			if(var3!="33")
				document.getElementById("3").value="";
			if(var4!="58")
				document.getElementById("4").value="";
			if(var5!="94")
				document.getElementById("5").value="";
		}        
        break;
    case 25:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		if(var1=="47" && var2 == "42" && var3=="37" && var4=="32" && var5=="27"){
			correcto();
		}
		else{
			if(var1!="47")
				document.getElementById("1").value="";
			if(var2!="42")
				document.getElementById("2").value="";
			if(var3!="37")
				document.getElementById("3").value="";
			if(var4!="32")
				document.getElementById("4").value="";
			if(var5!="27")
				document.getElementById("5").value="";
		}        
        break;
    case 26:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		if(var1=="10" && var2 == "80" && var3=="20" && var4=="70" && var5=="30"){
			correcto();
		}
		else{
			if(var1!="10")
				document.getElementById("1").value="";
			if(var2!="80")
				document.getElementById("2").value="";
			if(var3!="20")
				document.getElementById("3").value="";
			if(var4!="70")
				document.getElementById("4").value="";
			if(var5!="30")
				document.getElementById("5").value="";
		}        
        break;
    case 27:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		if(var1=="512" && var2 == "256" && var3=="128" && var4=="64" && var5=="32"){
			correcto();
		}
		else{
			if(var1!="512")
				document.getElementById("1").value="";
			if(var2!="256")
				document.getElementById("2").value="";
			if(var3!="128")
				document.getElementById("3").value="";
			if(var4!="64")
				document.getElementById("4").value="";
			if(var5!="32")
				document.getElementById("5").value="";
		}        
        break;
    case 28:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		if(var1=="23" && var2 == "26" && var3=="30" && var4=="35" && var5=="41"){
			correcto();
		}
		else{
			if(var1!="23")
				document.getElementById("1").value="";
			if(var2!="26")
				document.getElementById("2").value="";
			if(var3!="30")
				document.getElementById("3").value="";
			if(var4!="35")
				document.getElementById("4").value="";
			if(var5!="41")
				document.getElementById("5").value="";
		}        
        break;
    case 29:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		if(var1=="2" && var2 == "6" && var3=="24" && var4=="120" && var5=="720"){
			correcto();
		}
		else{
			if(var1!="2")
				document.getElementById("1").value="";
			if(var2!="6")
				document.getElementById("2").value="";
			if(var3!="24")
				document.getElementById("3").value="";
			if(var4!="120")
				document.getElementById("4").value="";
			if(var5!="720")
				document.getElementById("5").value="";
		}        
        break;
    case 30:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		if(var1=="10" && var2 == "50" && var3=="250" && var4=="1250" && var5=="6250"){
			correcto();
		}
		else{
			if(var1!="10")
				document.getElementById("1").value="";
			if(var2!="50")
				document.getElementById("2").value="";
			if(var3!="250")
				document.getElementById("3").value="";
			if(var4!="1250")
				document.getElementById("4").value="";
			if(var5!="6250")
				document.getElementById("5").value="";
		}        
        break;
    case 31:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		if(var1=="6" && var2 == "12" && var3=="18" && var4=="24" && var5=="30"){
			correcto();
		}
		else{
			if(var1!="6")
				document.getElementById("1").value="";
			if(var2!="12")
				document.getElementById("2").value="";
			if(var3!="18")
				document.getElementById("3").value="";
			if(var4!="24")
				document.getElementById("4").value="";
			if(var5!="30")
				document.getElementById("5").value="";
		}        
        break;
    case 32:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		if(var1=="13" && var2 == "16" && var3=="20" && var4=="25" && var5=="31"){
			correcto();
		}
		else{
			if(var1!="13")
				document.getElementById("1").value="";
			if(var2!="16")
				document.getElementById("2").value="";
			if(var3!="20")
				document.getElementById("3").value="";
			if(var4!="25")
				document.getElementById("4").value="";
			if(var5!="31")
				document.getElementById("5").value="";
		}        
        break;
    case 33:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		if(var1=="38" && var2 == "30" && var3=="23" && var4=="17" && var5=="12"){
			correcto();
		}
		else{
			if(var1!="38")
				document.getElementById("1").value="";
			if(var2!="30")
				document.getElementById("2").value="";
			if(var3!="23")
				document.getElementById("3").value="";
			if(var4!="17")
				document.getElementById("4").value="";
			if(var5!="12")
				document.getElementById("5").value="";
		}        
        break;
    case 34:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		var var3 = document.getElementById("3").value;
		var var4 = document.getElementById("4").value;
		var var5 = document.getElementById("5").value;
		if(var1=="24" && var2 == "26" && var3=="23" && var4=="27" && var5=="22"){
			correcto();
		}
		else{
			if(var1!="24")
				document.getElementById("1").value="";
			if(var2!="26")
				document.getElementById("2").value="";
			if(var3!="23")
				document.getElementById("3").value="";
			if(var4!="27")
				document.getElementById("4").value="";
			if(var5!="22")
				document.getElementById("5").value="";
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