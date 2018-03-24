function resultado() {
	document.getElementById('imagen').style.display = 'none';
	document.getElementById('imagen2').style.display = 'block';
	document.getElementById("1").disabled = true;
	document.getElementById("2").disabled = true;
	document.getElementById('resultado').style.display = 'block';
}

function mostrar(bandera) {
	if(bandera == 1)
		document.getElementById('seno').style.display = 'block';
	if(bandera == 3)
		document.getElementById('tangente').style.display = 'block';
	
	document.getElementById("angulo").disabled = true;
}

function correcto() {
		$('#correcta').show();
		$("#correcta").fadeTo(2000, 500).slideUp(500, function(){
			$("#correcta").slideUp(500);
		});
}

function acierto(label1) {
	switch (label1) {
    case 3:
		var var1 = document.getElementById("angulo").value;
		if(var1==1){
			mostrar(var1);
		}
        break;
    case 5:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==0.9063){
			if(var2=="4.71")
				resultado();
			
		}
        break;
    case 8:
		var var1 = document.getElementById("angulo").value;
		if(var1==3){
			mostrar(var1);
		}
        break;
	case 10:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==0.0524){
			if(var2 == "190.81"){
				resultado();
			}
		}
        break;
    case 13:
		var var1 = document.getElementById("angulo").value;
		if(var1==1){
			mostrar(var1);
		}
        break;
	case 15:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==0.309){
			if(var2==154.51){
				resultado();
			}
		}
        break;
	case 18:
		var var1 = document.getElementById("angulo").value;
		if(var1==3){
			mostrar(var1);
		}
        break;
	case 19:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1=="1.2723" && var2 == "146.31"){
			resultado();
		}
        break;
	case 21:
        var var1 = document.getElementById("1").value;
		if(var1=="5"){
			resultado();
		}
        break;
    case 22:
		var var1 = document.getElementById("angulo").value;
		if(var1==1){
			mostrar(var1);
		}
        break;
	case 24:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==0.3090){
			if(var2=="1.55"){
				resultado();
			}
		}
        break;
    case 27:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==0.3090){
			if(var2 == "9.71"){
				resultado();
			}
		}
        break;
    case 28:
		var var3 = document.getElementById("3").value;
		if(var3=="1.94"){
			document.getElementById("3").disabled = true;
			document.getElementById('resultado').style.display = 'block';
		}
        break;
    case 31:
		var var1 = document.getElementById("angulo").value;
		if(var1==3){
			mostrar(var1);
		}
        break;
    case 32:
		var var1 = document.getElementById("1").value;
		if(var1==0.06116){
			document.getElementById("1").disabled = true;
		}
        break;
    case 33:
		var var1 = document.getElementById("angulo").value;
		if(var1==3){
			mostrar(var1);
		}
        break;
    case 34:
		var var1 = document.getElementById("2").value;
		if(var1==0.15838){
			document.getElementById("2").disabled = true;
		}
        break;
    case 40:
		var var1 = document.getElementById("1").value;
		if(var1=="1.295"){
			resultado();
		}
        break;
    case 42:
		var var1 = document.getElementById("1").value;
		var var2 = document.getElementById("2").value;
		if(var1==0.1763){
			if(var2 == "16660"){
				document.getElementById("1").disabled = true;
				document.getElementById("2").disabled = true;
			}
		}
        break;
    case 43:
		var var3 = document.getElementById("3").value;
		if(var3=="54.2"){
				document.getElementById("3").disabled = true;
		}
        break;
    case 44:
		var var4 = document.getElementById("4").value;
		if(var4=="195.12"){
				document.getElementById("4").disabled = true;
				correcto();
		}
		else{
			if(var4!="195.12")
			document.getElementById("4").value="";
		}
        break;
	}
}