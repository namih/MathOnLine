var i = 1;

var ia = 1;
var ib = 1;
var ic = 1;
var id = 1;

var ia_0 = 0;
var ib_0 = 0;

function correcto () {
	$('#correcta').show();
	$("#correcta").fadeTo(2000, 500).slideUp(500, function(){
		$("#correcta").slideUp(500);
	});
}

function error () {
	$('#error').show();
	$("#error").fadeTo(2000, 500).slideUp(500, function(){
		$("#error").slideUp(500);
	});
}

function validar_2() {
	var numerador = document.getElementById('numerador').value;
	var denominador = document.getElementById('denominador').value;
	console.log(numerador);
	console.log(denominador);
	if (numerador != "" && denominador != "") {
		if (numerador == 1 && denominador == 2) {
			correcto();
		} else {
			error();
		}
	}
}

function incrementar_2 () {
	switch (i) {
		case 1:
			document.getElementById("baguette").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor").innerHTML = "2";
			i++;
			break;
		case 2:
			document.getElementById("baguette").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor").innerHTML = "3";
			i++;
			break;
		case 3:
			document.getElementById("baguette").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor").innerHTML = "4";
			i++;
			break;
		case 4:
			document.getElementById("baguette").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor").innerHTML = "5";
			i++;
			break;
		case 5:
			document.getElementById("baguette").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor").innerHTML = "6";
			i++;
			break;
		case 6:
			document.getElementById("baguette").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor").innerHTML = "7";
			i++;
			break;
		case 7:
			document.getElementById("baguette").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor").innerHTML = "8";
			i++;
			break;
		case 8:
			document.getElementById("baguette").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor").innerHTML = "9";
			i++;
			break;
		case 9:
			document.getElementById("baguette").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10.png";
			document.getElementById("valor").innerHTML = "10";
			i++;
			break;
	}
}
	
function disminuir_2 () {
	switch (i) {
		case 10:
			document.getElementById("baguette").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor").innerHTML = "9";
			i--;
			break;
		case 9:
			document.getElementById("baguette").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor").innerHTML = "8";
			i--;
			break;
		case 8:
			document.getElementById("baguette").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor").innerHTML = "7";
			i--;
			break;
		case 7:
			document.getElementById("baguette").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor").innerHTML = "6";
			i--;
			break;
		case 6:
			document.getElementById("baguette").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor").innerHTML = "5";
			i--;
			break;
		case 5:
			document.getElementById("baguette").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor").innerHTML = "4";
			i--;
			break;
		case 4:
			document.getElementById("baguette").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor").innerHTML = "3";
			i--;
			break;
		case 3:
			document.getElementById("baguette").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor").innerHTML = "2";
			i--;
			break;
		case 2:
			document.getElementById("baguette").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png";
			document.getElementById("valor").innerHTML = "1";
			i--;
			break;
	}
}

function validar_3() {
	var numerador = document.getElementById('numerador').value;
	var denominador = document.getElementById('denominador').value;
	console.log(numerador);
	console.log(denominador);
	if (numerador != "" && denominador != "") {
		if (numerador == 3 && denominador == 4) {
			correcto();
		} else {
			error();
		}
	}
}
	
function incrementar_a_3 () {
	console.log(ia);
	switch (ia) {
		case 1:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor_a").innerHTML = "2";
			ia++;
			break;
		case 2:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor_a").innerHTML = "3";
			ia++;
			break;
		case 3:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor_a").innerHTML = "4";
			ia++;
			break;
		case 4:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor_a").innerHTML = "5";
			ia++;
			break;
		case 5:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor_a").innerHTML = "6";
			ia++;
			break;
		case 6:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor_a").innerHTML = "7";
			ia++;
			break;
		case 7:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor_a").innerHTML = "8";
			ia++;
			break;
		case 8:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor_a").innerHTML = "9";
			ia++;
			break;
		case 9:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10.png";
			document.getElementById("valor_a").innerHTML = "10";
			ia++;
			break;
	}
}

function disminuir_a_3 () {
	console.log(ia);
	switch (ia) {
		case 10:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor_a").innerHTML = "9";
			ia--;
			break;
		case 9:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor_a").innerHTML = "8";
			ia--;
			break;
		case 8:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor_a").innerHTML = "7";
			ia--;
			break;
		case 7:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor_a").innerHTML = "6";
			ia--;
			break;
		case 6:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor_a").innerHTML = "5";
			ia--;
			break;
		case 5:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor_a").innerHTML = "4";
			ia--;
			break;
		case 4:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor_a").innerHTML = "3";
			ia--;
			break;
		case 3:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor_a").innerHTML = "2";
			ia--;
			break;
		case 2:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png";
			document.getElementById("valor_a").innerHTML = "1";
			ia--;
			break;
	}
}

function incrementar_b_3 () {
	console.log(ib);
	switch (ib) {
		case 1:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor_b").innerHTML = "2";
			ib++;
			break;
		case 2:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor_b").innerHTML = "3";
			ib++;
			break;
		case 3:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor_b").innerHTML = "4";
			ib++;
			break;
		case 4:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor_b").innerHTML = "5";
			ib++;
			break;
		case 5:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor_b").innerHTML = "6";
			ib++;
			break;
		case 6:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor_b").innerHTML = "7";
			ib++;
			break;
		case 7:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor_b").innerHTML = "8";
			ib++;
			break;
		case 8:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor_b").innerHTML = "9";
			ib++;
			break;
		case 9:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10.png";
			document.getElementById("valor_b").innerHTML = "10";
			ib++;
			break;
	}
}

function disminuir_b_3 () {
	console.log(ib);
	switch (ib) {
		case 10:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor_b").innerHTML = "9";
			ib--;
			break;
		case 9:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor_b").innerHTML = "8";
			ib--;
			break;
		case 8:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor_b").innerHTML = "7";
			ib--;
			break;
		case 7:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor_b").innerHTML = "6";
			ib--;
			break;
		case 6:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor_b").innerHTML = "5";
			ib--;
			break;
		case 5:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor_b").innerHTML = "4";
			ib--;
			break;
		case 4:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor_b").innerHTML = "3";
			ib--;
			break;
		case 3:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor_b").innerHTML = "2";
			ib--;
			break;
		case 2:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png";
			document.getElementById("valor_b").innerHTML = "1";
			ib--;
			break;
	}
}

function incrementar_c_3 () {
	console.log(ic);
	switch (ic) {
		case 1:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor_c").innerHTML = "2";
			ic++;
			break;
		case 2:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor_c").innerHTML = "3";
			ic++;
			break;
		case 3:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor_c").innerHTML = "4";
			ic++;
			break;
		case 4:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor_c").innerHTML = "5";
			ic++;
			break;
		case 5:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor_c").innerHTML = "6";
			ic++;
			break;
		case 6:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor_c").innerHTML = "7";
			ic++;
			break;
		case 7:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor_c").innerHTML = "8";
			ic++;
			break;
		case 8:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor_c").innerHTML = "9";
			ic++;
			break;
		case 9:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10.png";
			document.getElementById("valor_c").innerHTML = "10";
			ic++;
			break;
	}
}

function disminuir_c_3 () {
	console.log(ic);
	switch (ic) {
		case 10:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor_c").innerHTML = "9";
			ic--;
			break;
		case 9:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor_c").innerHTML = "8";
			ic--;
			break;
		case 8:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor_c").innerHTML = "7";
			ic--;
			break;
		case 7:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor_c").innerHTML = "6";
			ic--;
			break;
		case 6:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor_c").innerHTML = "5";
			ic--;
			break;
		case 5:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor_c").innerHTML = "4";
			ic--;
			break;
		case 4:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor_c").innerHTML = "3";
			ic--;
			break;
		case 3:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor_c").innerHTML = "2";
			ic--;
			break;
		case 2:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png";
			document.getElementById("valor_c").innerHTML = "1";
			ic--;
			break;
	}
}

function validar_4() {
	var numerador = document.getElementById('numerador').value;
	var denominador = document.getElementById('denominador').value;
	console.log(numerador);
	console.log(denominador);
	if (numerador != "" && denominador != "") {
		if (numerador == 2 && denominador == 3) {
			correcto();
		} else {
			error();
		}
	}
}

function incrementar_a_4 () {
	console.log(ia);
	switch (ia) {
		case 1:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor_a").innerHTML = "2";
			ia++;
			break;
		case 2:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor_a").innerHTML = "3";
			ia++;
			break;
		case 3:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor_a").innerHTML = "4";
			ia++;
			break;
		case 4:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor_a").innerHTML = "5";
			ia++;
			break;
		case 5:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor_a").innerHTML = "6";
			ia++;
			break;
		case 6:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor_a").innerHTML = "7";
			ia++;
			break;
		case 7:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor_a").innerHTML = "8";
			ia++;
			break;
		case 8:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor_a").innerHTML = "9";
			ia++;
			break;
		case 9:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10.png";
			document.getElementById("valor_a").innerHTML = "10";
			ia++;
			break;
	}
}

function disminuir_a_4 () {
	console.log(ia);
	switch (ia) {
		case 10:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor_a").innerHTML = "9";
			ia--;
			break;
		case 9:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor_a").innerHTML = "8";
			ia--;
			break;
		case 8:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor_a").innerHTML = "7";
			ia--;
			break;
		case 7:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor_a").innerHTML = "6";
			ia--;
			break;
		case 6:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor_a").innerHTML = "5";
			ia--;
			break;
		case 5:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor_a").innerHTML = "4";
			ia--;
			break;
		case 4:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor_a").innerHTML = "3";
			ia--;
			break;
		case 3:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor_a").innerHTML = "2";
			ia--;
			break;
		case 2:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png";
			document.getElementById("valor_a").innerHTML = "1";
			ia--;
			break;
	}
}

function incrementar_b_4 () {
	console.log(ib);
	switch (ib) {
		case 1:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor_b").innerHTML = "2";
			ib++;
			break;
		case 2:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor_b").innerHTML = "3";
			ib++;
			break;
		case 3:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor_b").innerHTML = "4";
			ib++;
			break;
		case 4:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor_b").innerHTML = "5";
			ib++;
			break;
		case 5:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor_b").innerHTML = "6";
			ib++;
			break;
		case 6:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor_b").innerHTML = "7";
			ib++;
			break;
		case 7:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor_b").innerHTML = "8";
			ib++;
			break;
		case 8:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor_b").innerHTML = "9";
			ib++;
			break;
		case 9:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10.png";
			document.getElementById("valor_b").innerHTML = "10";
			ib++;
			break;
	}
}

function disminuir_b_4 () {
	console.log(ib);
	switch (ib) {
		case 10:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor_b").innerHTML = "9";
			ib--;
			break;
		case 9:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor_b").innerHTML = "8";
			ib--;
			break;
		case 8:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor_b").innerHTML = "7";
			ib--;
			break;
		case 7:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor_b").innerHTML = "6";
			ib--;
			break;
		case 6:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor_b").innerHTML = "5";
			ib--;
			break;
		case 5:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor_b").innerHTML = "4";
			ib--;
			break;
		case 4:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor_b").innerHTML = "3";
			ib--;
			break;
		case 3:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor_b").innerHTML = "2";
			ib--;
			break;
		case 2:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png";
			document.getElementById("valor_b").innerHTML = "1";
			ib--;
			break;
	}
}

function validar_5() {
	var numerador = document.getElementById('numerador').value;
	var denominador = document.getElementById('denominador').value;
	console.log(numerador);
	console.log(denominador);
	if (numerador != "" && denominador != "") {
		if (numerador == 4 && denominador == 6) {
			correcto();
		} else {
			error();
		}
	}
}

function incrementar_a_5 () {
	switch (ia) {
		case 1:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor_a").innerHTML = "2";
			ia++;
			break;
		case 2:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor_a").innerHTML = "3";
			ia++;
			break;
		case 3:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor_a").innerHTML = "4";
			ia++;
			break;
		case 4:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor_a").innerHTML = "5";
			ia++;
			break;
		case 5:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor_a").innerHTML = "6";
			ia++;
			break;
		case 6:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor_a").innerHTML = "7";
			ia++;
			break;
		case 7:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor_a").innerHTML = "8";
			ia++;
			break;
		case 8:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor_a").innerHTML = "9";
			ia++;
			break;
		case 9:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10.png";
			document.getElementById("valor_a").innerHTML = "10";
			ia++;
			break;
	}
}

function disminuir_a_5 () {
	switch (ia) {
		case 10:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor_a").innerHTML = "9";
			ia--;
			break;
		case 9:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor_a").innerHTML = "8";
			ia--;
			break;
		case 8:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor_a").innerHTML = "7";
			ia--;
			break;
		case 7:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor_a").innerHTML = "6";
			ia--;
			break;
		case 6:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor_a").innerHTML = "5";
			ia--;
			break;
		case 5:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor_a").innerHTML = "4";
			ia--;
			break;
		case 4:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor_a").innerHTML = "3";
			ia--;
			break;
		case 3:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor_a").innerHTML = "2";
			ia--;
			break;
		case 2:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png";
			document.getElementById("valor_a").innerHTML = "1";
			ia--;
			break;
	}
}

function incrementar_b_5 () {
	switch (ib) {
		case 1:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor_b").innerHTML = "2";
			ib++;
			break;
		case 2:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor_b").innerHTML = "3";
			ib++;
			break;
		case 3:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor_b").innerHTML = "4";
			ib++;
			break;
		case 4:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor_b").innerHTML = "5";
			ib++;
			break;
		case 5:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor_b").innerHTML = "6";
			ib++;
			break;
		case 6:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor_b").innerHTML = "7";
			ib++;
			break;
		case 7:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor_b").innerHTML = "8";
			ib++;
			break;
		case 8:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor_b").innerHTML = "9";
			ib++;
			break;
		case 9:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10.png";
			document.getElementById("valor_b").innerHTML = "10";
			ib++;
			break;
	}
}

function disminuir_b_5 () {
	switch (ib) {
		case 10:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor_b").innerHTML = "9";
			ib--;
			break;
		case 9:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor_b").innerHTML = "8";
			ib--;
			break;
		case 8:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor_b").innerHTML = "7";
			ib--;
			break;
		case 7:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor_b").innerHTML = "6";
			ib--;
			break;
		case 6:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor_b").innerHTML = "5";
			ib--;
			break;
		case 5:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor_b").innerHTML = "4";
			ib--;
			break;
		case 4:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor_b").innerHTML = "3";
			ib--;
			break;
		case 3:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor_b").innerHTML = "2";
			ib--;
			break;
		case 2:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png";
			document.getElementById("valor_b").innerHTML = "1";
			ib--;
			break;
	}
}

function incrementar_c_5 () {
	switch (ic) {
		case 1:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor_c").innerHTML = "2";
			ic++;
			break;
		case 2:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor_c").innerHTML = "3";
			ic++;
			break;
		case 3:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor_c").innerHTML = "4";
			ic++;
			break;
		case 4:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor_c").innerHTML = "5";
			ic++;
			break;
		case 5:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor_c").innerHTML = "6";
			ic++;
			break;
		case 6:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor_c").innerHTML = "7";
			ic++;
			break;
		case 7:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor_c").innerHTML = "8";
			ic++;
			break;
		case 8:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor_c").innerHTML = "9";
			ic++;
			break;
		case 9:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10.png";
			document.getElementById("valor_c").innerHTML = "10";
			ic++;
			break;
	}
}

function disminuir_c_5 () {
	switch (ic) {
		case 10:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor_c").innerHTML = "9";
			ic--;
			break;
		case 9:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor_c").innerHTML = "8";
			ic--;
			break;
		case 8:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor_c").innerHTML = "7";
			ic--;
			break;
		case 7:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor_c").innerHTML = "6";
			ic--;
			break;
		case 6:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor_c").innerHTML = "5";
			ic--;
			break;
		case 5:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor_c").innerHTML = "4";
			ic--;
			break;
		case 4:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor_c").innerHTML = "3";
			ic--;
			break;
		case 3:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor_c").innerHTML = "2";
			ic--;
			break;
		case 2:
			document.getElementById("baguette_c").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png";
			document.getElementById("valor_c").innerHTML = "1";
			ic--;
			break;
	}
}

function incrementar_d_5 () {
	switch (id) {
		case 1:
			document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor_d").innerHTML = "2";
			id++;
			break;
		case 2:
			document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor_d").innerHTML = "3";
			id++;
			break;
		case 3:
			document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor_d").innerHTML = "4";
			id++;
			break;
		case 4:
			document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor_d").innerHTML = "5";
			id++;
			break;
		case 5:
			document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor_d").innerHTML = "6";
			id++;
			break;
		case 6:
			document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor_d").innerHTML = "7";
			id++;
			break;
		case 7:
			document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor_d").innerHTML = "8";
			id++;
			break;
		case 8:
			document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor_d").innerHTML = "9";
			id++;
			break;
		case 9:
			document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10.png";
			document.getElementById("valor_d").innerHTML = "10";
			id++;
			break;
	}
}

function disminuir_d_5 () {
	switch (id) {
		case 10:
			document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor_d").innerHTML = "9";
			id--;
			break;
		case 9:
			document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor_d").innerHTML = "8";
			id--;
			break;
		case 8:
			document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor_d").innerHTML = "7";
			id--;
			break;
		case 7:
			document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor_d").innerHTML = "6";
			id--;
			break;
		case 6:
			document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor_d").innerHTML = "5";
			id--;
			break;
		case 5:
			document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor_d").innerHTML = "4";
			id--;
			break;
		case 4:
			document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor_d").innerHTML = "3";
			id--;
			break;
		case 3:
			document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor_d").innerHTML = "2";
			id--;
			break;
		case 2:
			document.getElementById("baguette_d").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png";
			document.getElementById("valor_d").innerHTML = "1";
			id--;
			break;
	}
}

function validar_6 () {
	var equipo = document.getElementById('equipo').value;
	if (equipo == 2) {
		correcto();
	} else {
		error();
	};
}

function incrementar_a_9 () {
	switch (ia) {
		case 1:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor_a").innerHTML = "2";
			ia++;
			break;
		case 2:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor_a").innerHTML = "3";
			ia++;
			break;
		case 3:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor_a").innerHTML = "4";
			ia++;
			break;
		case 4:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor_a").innerHTML = "5";
			ia++;
			break;
		case 5:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor_a").innerHTML = "6";
			ia++;
			break;
		case 6:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor_a").innerHTML = "7";
			ia++;
			break;
		case 7:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor_a").innerHTML = "8";
			ia++;
			break;
		case 8:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor_a").innerHTML = "9";
			ia++;
			break;
		case 9:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10.png";
			document.getElementById("valor_a").innerHTML = "10";
			ia++;
			break;
	}
}

function disminuir_a_9 () {
	switch (ia) {
		case 10:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor_a").innerHTML = "9";
			ia--;
			break;
		case 9:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor_a").innerHTML = "8";
			ia--;
			break;
		case 8:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor_a").innerHTML = "7";
			ia--;
			break;
		case 7:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor_a").innerHTML = "6";
			ia--;
			break;
		case 6:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor_a").innerHTML = "5";
			ia--;
			break;
		case 5:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor_a").innerHTML = "4";
			ia--;
			break;
		case 4:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor_a").innerHTML = "3";
			ia--;
			break;
		case 3:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor_a").innerHTML = "2";
			ia--;
			break;
		case 2:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png";
			document.getElementById("valor_a").innerHTML = "1";
			ia--;
			break;
	}
}

function incrementar_b_9 () {
	switch (ib) {
		case 1:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor_b").innerHTML = "2";
			ib++;
			break;
		case 2:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor_b").innerHTML = "3";
			ib++;
			break;
		case 3:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor_b").innerHTML = "4";
			ib++;
			break;
		case 4:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor_b").innerHTML = "5";
			ib++;
			break;
		case 5:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor_b").innerHTML = "6";
			ib++;
			break;
		case 6:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor_b").innerHTML = "7";
			ib++;
			break;
		case 7:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor_b").innerHTML = "8";
			ib++;
			break;
		case 8:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor_b").innerHTML = "9";
			ib++;
			break;
		case 9:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10.png";
			document.getElementById("valor_b").innerHTML = "10";
			ib++;
			break;
	}
}

function disminuir_b_9 () {
	switch (ib) {
		case 10:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9.png";
			document.getElementById("valor_b").innerHTML = "9";
			ib--;
			break;
		case 9:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_8.png";
			document.getElementById("valor_b").innerHTML = "8";
			ib--;
			break;
		case 8:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_7.png";
			document.getElementById("valor_b").innerHTML = "7";
			ib--;
			break;
		case 7:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png";
			document.getElementById("valor_b").innerHTML = "6";
			ib--;
			break;
		case 6:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5.png";
			document.getElementById("valor_b").innerHTML = "5";
			ib--;
			break;
		case 5:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png";
			document.getElementById("valor_b").innerHTML = "4";
			ib--;
			break;
		case 4:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png";
			document.getElementById("valor_b").innerHTML = "3";
			ib--;
			break;
		case 3:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png";
			document.getElementById("valor_b").innerHTML = "2";
			ib--;
			break;
		case 2:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png";
			document.getElementById("valor_b").innerHTML = "1";
			ib--;
			break;
	}
}

function incrementar_a_10 () {
	switch (ia_0) {
		case 0:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10_white_1.png";
			document.getElementById("valor_a").innerHTML = "1";
			ia_0++;
			break;
		case 1:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10_white_2.png";
			document.getElementById("valor_a").innerHTML = "2";
			ia_0++;
			break;
		case 2:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10_white_3.png";
			document.getElementById("valor_a").innerHTML = "3";
			ia_0++;
			break;
		case 3:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10_white_4.png";
			document.getElementById("valor_a").innerHTML = "4";
			ia_0++;
			break;
		case 4:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10_white_5.png";
			document.getElementById("valor_a").innerHTML = "5";
			ia_0++;
			break;
		case 5:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10_white_6.png";
			document.getElementById("valor_a").innerHTML = "6";
			ia_0++;
			break;
		case 6:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10_white_7.png";
			document.getElementById("valor_a").innerHTML = "7";
			ia_0++;
			break;
		case 7:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10_white_8.png";
			document.getElementById("valor_a").innerHTML = "8";
			ia_0++;
			break;
		case 8:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10_white_9.png";
			document.getElementById("valor_a").innerHTML = "9";
			ia_0++;
			break;
		case 9:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10_white_10.png";
			document.getElementById("valor_a").innerHTML = "10";
			ia_0++;
			break;
	}
}

function disminuir_a_10 () {
	switch (ia_0) {
		case 10:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10_white_9.png";
			document.getElementById("valor_a").innerHTML = "9";
			ia_0--;
			break;
		case 9:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10_white_8.png";
			document.getElementById("valor_a").innerHTML = "8";
			ia_0--;
			break;
		case 8:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10_white_7.png";
			document.getElementById("valor_a").innerHTML = "7";
			ia_0--;
			break;
		case 7:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10_white_6.png";
			document.getElementById("valor_a").innerHTML = "6";
			ia_0--;
			break;
		case 6:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10_white_5.png";
			document.getElementById("valor_a").innerHTML = "5";
			ia_0--;
			break;
		case 5:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10_white_4.png";
			document.getElementById("valor_a").innerHTML = "4";
			ia_0--;
			break;
		case 4:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10_white_3.png";
			document.getElementById("valor_a").innerHTML = "3";
			ia_0--;
			break;
		case 3:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10_white_2.png";
			document.getElementById("valor_a").innerHTML = "2";
			ia_0--;
			break;
		case 2:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10_white_1.png";
			document.getElementById("valor_a").innerHTML = "1";
			ia_0--;
			break;
		case 1:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10_white.png";
			document.getElementById("valor_a").innerHTML = "1";
			ia_0--;
			break;
	}
}

function incrementar_b_10 () {
	switch (ib_0) {
		case 0:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5_yellow_1.png";
			document.getElementById("valor_b").innerHTML = "1";
			ib_0++;
			break;
		case 1:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5_yellow_2.png";
			document.getElementById("valor_b").innerHTML = "2";
			ib_0++;
			break;
		case 2:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5_yellow_3.png";
			document.getElementById("valor_b").innerHTML = "3";
			ib_0++;
			break;
		case 3:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5_yellow_4.png";
			document.getElementById("valor_b").innerHTML = "4";
			ib_0++;
			break;
		case 4:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5_yellow_5.png";
			document.getElementById("valor_b").innerHTML = "5";
			ib_0++;
			break;
	}
}

function disminuir_b_10 () {
	switch (ib_0) {
		case 5:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5_yellow_4.png";
			document.getElementById("valor_b").innerHTML = "4";
			ib_0--;
			break;
		case 4:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5_yellow_3.png";
			document.getElementById("valor_b").innerHTML = "3";
			ib_0--;
			break;
		case 3:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5_yellow_2.png";
			document.getElementById("valor_b").innerHTML = "2";
			ib_0--;
			break;
		case 2:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_5_yellow_1.png";
			document.getElementById("valor_b").innerHTML = "1";
			ib_0--;
			break;
		case 1:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_10_white.png";
			document.getElementById("valor_b").innerHTML = "1";
			ib_0--;
			break;
	}
}