var i = 1;

var ia = 1;
var ib = 1;
var ic = 1;
var id = 1;

var ia_0 = 0;
var ib_0 = 0;

var correcta;

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
	if (numerador != "" && denominador != "") {
		if (numerador == 3 && denominador == 4) {
			correcto();
		} else {
			error();
		}
	}
}
	
function incrementar_a_3 () {
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
	if (numerador != "" && denominador != "") {
		if (numerador == 2 && denominador == 3) {
			correcto();
		} else {
			error();
		}
	}
}

function incrementar_a_4 () {
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

function incrementar_a_11 () {
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

function disminuir_a_11 () {
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

function incrementar_b_11 () {
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

function disminuir_b_11 () {
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

function incrementar_a_12 () {
	switch (ia_0) {
		case 0:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9_blue_1.png";
			document.getElementById("valor_a").innerHTML = "1";
			ia_0++;
			break;
		case 1:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9_blue_2.png";
			document.getElementById("valor_a").innerHTML = "2";
			ia_0++;
			break;
		case 2:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9_blue_3.png";
			document.getElementById("valor_a").innerHTML = "3";
			ia_0++;
			break;
		case 3:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9_blue_4.png";
			document.getElementById("valor_a").innerHTML = "4";
			ia_0++;
			break;
		case 4:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9_blue_5.png";
			document.getElementById("valor_a").innerHTML = "5";
			ia_0++;
			break;
		case 5:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9_blue_6.png";
			document.getElementById("valor_a").innerHTML = "6";
			ia_0++;
			break;
		case 6:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9_blue_7.png";
			document.getElementById("valor_a").innerHTML = "7";
			ia_0++;
			break;
		case 7:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9_blue_8.png";
			document.getElementById("valor_a").innerHTML = "8";
			ia_0++;
			break;
		case 8:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9_blue_9.png";
			document.getElementById("valor_a").innerHTML = "9";
			ia_0++;
			break;
	}
}

function disminuir_a_12 () {
	switch (ia_0) {
		case 9:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9_blue_8.png";
			document.getElementById("valor_a").innerHTML = "8";
			ia_0--;
			break;
		case 8:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9_blue_7.png";
			document.getElementById("valor_a").innerHTML = "7";
			ia_0--;
			break;
		case 7:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9_blue_6.png";
			document.getElementById("valor_a").innerHTML = "6";
			ia_0--;
			break;
		case 6:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9_blue_5.png";
			document.getElementById("valor_a").innerHTML = "5";
			ia_0--;
			break;
		case 5:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9_blue_4.png";
			document.getElementById("valor_a").innerHTML = "4";
			ia_0--;
			break;
		case 4:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9_blue_3.png";
			document.getElementById("valor_a").innerHTML = "3";
			ia_0--;
			break;
		case 3:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9_blue_2.png";
			document.getElementById("valor_a").innerHTML = "2";
			ia_0--;
			break;
		case 2:
			document.getElementById("baguette_a").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_9_blue_1.png";
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

function incrementar_b_12 () {
	switch (ib_0) {
		case 0:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3_yellow_1.png";
			document.getElementById("valor_b").innerHTML = "1";
			ib_0++;
			break;
		case 1:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3_yellow_2.png";
			document.getElementById("valor_b").innerHTML = "2";
			ib_0++;
			break;
		case 2:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3_yellow_3.png";
			document.getElementById("valor_b").innerHTML = "3";
			ib_0++;
			break;
	}
}

function disminuir_b_12 () {
	switch (ib_0) {
		case 3:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3_yellow_2.png";
			document.getElementById("valor_b").innerHTML = "2";
			ib_0--;
			break;
		case 2:
			document.getElementById("baguette_b").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3_yellow_1.png";
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

function incrementar_15 () {
	switch (ia_0) {
		case 0:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_1.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>21</mn></mfrac></math>';;;
			correcta = false;
			ia_0++;
			break;
		case 1:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_2.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>21</mn></mfrac></math>';;;
			correcta = false;
			ia_0++;
			break;
		case 2:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_3.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>21</mn></mfrac></math>';;;
			correcta = false;
			ia_0++;
			break;
		case 3:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_4.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0++;
			break;
		case 4:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_5.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0++;
			break;
		case 5:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_6.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0++;
			break;
		case 6:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_7.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>7</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0++;
			break;
		case 7:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_8.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0++;
			break;
		case 8:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_9.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>21</mn></mfrac></math>';;;
			correcta = true;
			ia_0++;
			break;
		case 9:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_10.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0++;
			break;
		case 10:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_11.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>11</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0++;
			break;
		case 11:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_12.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>12</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0++;
			break;
		case 12:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_13.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>13</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0++;
			break;
		case 13:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_14.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>14</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0++;
			break;
		case 14:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_15.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>15</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0++;
			break;
		case 15:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_16.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>16</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0++;
			break;
		case 16:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_17.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>17</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0++;
			break;
		case 17:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_18.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>18</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0++;
			break;
		case 18:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_19.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>19</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0++;
			break;
		case 19:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_20.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>20</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0++;
			break;
		case 20:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_21.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>21</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0++;
			break;
	}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function disminuir_15 () {
	switch (ia_0) {
		case 21:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_20.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>20</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0--;
			break;
		case 20:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_19.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>19</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0--;
			break;
		case 19:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_18.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>18</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0--;
			break;
		case 18:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_17.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>17</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0--;
			break;
		case 17:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_16.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>16</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0--;
			break;
		case 16:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_15.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>15</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0--;
			break;
		case 15:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_14.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>14</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0--;
			break;
		case 14:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_13.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>13</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0--;
			break;
		case 13:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_12.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>12</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0--;
			break;
		case 12:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_11.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>11</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0--;
			break;
		case 11:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_10.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0--;
			break;
		case 10:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_9.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>21</mn></mfrac></math>';;
			correcta = true;
			ia_0--;
			break;
		case 9:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_8.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0--;
			break;
		case 8:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_7.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>7</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0--;
			break;
		case 7:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_6.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0--;
			break;
		case 6:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_5.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0--;
			break;
		case 5:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_4.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0--;
			break;
		case 4:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_3.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0--;
			break;
		case 3:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_2.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0--;
			break;
		case 2:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno_1.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0--;
			break;
		case 1:
			document.getElementById("veintiuno").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>21</mn></mfrac></math>';;
			correcta = false;
			ia_0--;
			break;
	}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function verificar_15 () {
	if (correcta == true) {
		document.getElementById("desigualdad").innerHTML = ' = ';
		correcto();
	} else{
		document.getElementById("desigualdad").innerHTML = '>';
		error();
	};
}

function incrementar_16 () {
	switch (ia_0) {
		case 0:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_1.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0++;
			break;
		case 1:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_2.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0++;
			break;
		case 2:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_3.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0++;
			break;
		case 3:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_4.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0++;
			break;
		case 4:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_5.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0++;
			break;
		case 5:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_6.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0++;
			break;
		case 6:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_7.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>7</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0++;
			break;
		case 7:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_8.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0++;
			break;
		case 8:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_9.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>18</mn></mfrac></math>';;
			correcta = false;
			ia_0++;
			break;
		case 9:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_10.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0++;
			break;
		case 10:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_11.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>11</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0++;
			break;
		case 11:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_12.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>12</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0++;
			break;
		case 12:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_13.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>13</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0++;
			break;
		case 13:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_14.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>14</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0++;
			break;
		case 14:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_15.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>15</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0++;
			break;
		case 15:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_16.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>16</mn><mn>18</mn></mfrac></math>';
			correcta = true;
			ia_0++;
			break;
		case 16:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_17.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>17</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0++;
			break;
		case 17:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_18.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>18</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0++;
			break;
		}
		MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function disminuir_16 () {
	switch (ia_0) {
		case 18:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_17.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>17</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0--;
			break;
		case 17:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_16.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>16</mn><mn>18</mn></mfrac></math>';
			correcta = true;
			ia_0--;
			break;
		case 16:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_15.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>15</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0--;
			break;
		case 15:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_14.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>14</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0--;
			break;
		case 14:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_13.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>13</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0--;
			break;
		case 13:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_12.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>12</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0--;
			break;
		case 12:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_11.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>11</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0--;
			break;
		case 11:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_10.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0--;
			break;
		case 10:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_9.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0--;
			break;
		case 9:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_8.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>8</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0--;
			break;
		case 8:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_7.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>7</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0--;
			break;
		case 7:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_6.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0--;
			break;
		case 6:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_5.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>5</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0--;
			break;
		case 5:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_4.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0--;
			break;
		case 4:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_3.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0--;
			break;
		case 3:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_2.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0--;
			break;
		case 2:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho_1.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0--;
			break;
		case 1:
			document.getElementById("dieciocho").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dieciocho.png";
			document.getElementById("fraccion").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>18</mn></mfrac></math>';
			correcta = false;
			ia_0--;
			break;
	}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}
function verificar_16 () {
	if (correcta == true) {
		document.getElementById("desigualdad").innerHTML = ' = ';
		correcto();
	} else{
		document.getElementById("desigualdad").innerHTML = '>';
		error();
	};
}

function validar_17 () {
	var incognita = document.getElementById('incognita').value;
	if (incognita == 4) {
		correcto();
	} else{
		error();
	};
}

function incrementar_18() {
	switch (i) {
		case 1:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x2.png";
			document.getElementById("valor").innerHTML = "2";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac><mo>=</mo><mfrac><mn>4</mn><mn>14</mn></mfrac></math>';
			i++;
			break;
		case 2:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x3.png";
			document.getElementById("valor").innerHTML = "3";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>6</mn><mn>21</mn></mfrac></math>';
			i++;
			break;
		case 3:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x4.png";
			document.getElementById("valor").innerHTML = "4";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac><mo>=</mo><mfrac><mn>8</mn><mn>28</mn></mfrac></math>';
			i++;
			break;
		case 4:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x5.png";
			document.getElementById("valor").innerHTML = "5";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow></mfrac><mo>=</mo><mfrac><mn>10</mn><mn>35</mn></mfrac></math>';
			i++;
			break;
		case 5:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x6.png";
			document.getElementById("valor").innerHTML = "6";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac><mo>=</mo><mfrac><mn>12</mn><mn>42</mn></mfrac></math>';
			i++;
			break;
		case 6:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x7.png";
			document.getElementById("valor").innerHTML = "7";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>7</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>7</mn></mrow></mfrac><mo>=</mo><mfrac><mn>14</mn><mn>49</mn></mfrac></math>';
			i++;
			break;
	}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function disminuir_18() {
	switch (i) {
		case 7:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x6.png";
			document.getElementById("valor").innerHTML = "6";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac><mo>=</mo><mfrac><mn>12</mn><mn>42</mn></mfrac></math>';
			i--;
			break;
		case 6:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x5.png";
			document.getElementById("valor").innerHTML = "5";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow></mfrac><mo>=</mo><mfrac><mn>10</mn><mn>35</mn></mfrac></math>';
			i--;
			break;
		case 5:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x4.png";
			document.getElementById("valor").innerHTML = "4";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac><mo>=</mo><mfrac><mn>8</mn><mn>28</mn></mfrac></math>';
			i--;
			break;
		case 4:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x3.png";
			document.getElementById("valor").innerHTML = "3";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>6</mn><mn>21</mn></mfrac></math>';
			i--;
			break;
		case 3:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x2.png";
			document.getElementById("valor").innerHTML = "2";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac><mo>=</mo><mfrac><mn>4</mn><mn>14</mn></mfrac></math>';
			i--;
			break;
		case 2:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x1.png";
			document.getElementById("valor").innerHTML = "1";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow></mfrac><mo>=</mo><mfrac><mn>2</mn><mn>7</mn></mfrac></math>';
			i--;
			break;
	}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function incrementar_19() {
	switch (i) {
		case 1:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x2.png";
			document.getElementById("valor").innerHTML = "2";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac><mo>=</mo><mfrac><mn>4</mn><mn>14</mn></mfrac></math>';
			i++;
			break;
		case 2:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x3.png";
			document.getElementById("valor").innerHTML = "3";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>6</mn><mn>21</mn></mfrac></math>';
			i++;
			break;
		case 3:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x4.png";
			document.getElementById("valor").innerHTML = "4";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac><mo>=</mo><mfrac><mn>8</mn><mn>28</mn></mfrac></math>';
			i++;
			break;
		case 4:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x5.png";
			document.getElementById("valor").innerHTML = "5";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow></mfrac><mo>=</mo><mfrac><mn>10</mn><mn>35</mn></mfrac></math>';
			i++;
			break;
		case 5:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x6.png";
			document.getElementById("valor").innerHTML = "6";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac><mo>=</mo><mfrac><mn>12</mn><mn>42</mn></mfrac></math>';
			i++;
			break;
		case 6:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x7.png";
			document.getElementById("valor").innerHTML = "7";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>7</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>7</mn></mrow></mfrac><mo>=</mo><mfrac><mn>14</mn><mn>49</mn></mfrac></math>';
			i++;
			break;
	}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function disminuir_19() {
	switch (i) {
		case 7:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x6.png";
			document.getElementById("valor").innerHTML = "6";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>6</mn></mrow></mfrac><mo>=</mo><mfrac><mn>12</mn><mn>42</mn></mfrac></math>';
			i--;
			break;
		case 6:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x5.png";
			document.getElementById("valor").innerHTML = "5";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>5</mn></mrow></mfrac><mo>=</mo><mfrac><mn>10</mn><mn>35</mn></mfrac></math>';
			i--;
			break;
		case 5:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x4.png";
			document.getElementById("valor").innerHTML = "4";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>4</mn></mrow></mfrac><mo>=</mo><mfrac><mn>8</mn><mn>28</mn></mfrac></math>';
			i--;
			break;
		case 4:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x3.png";
			document.getElementById("valor").innerHTML = "3";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>6</mn><mn>21</mn></mfrac></math>';
			i--;
			break;
		case 3:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x2.png";
			document.getElementById("valor").innerHTML = "2";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow></mfrac><mo>=</mo><mfrac><mn>4</mn><mn>14</mn></mfrac></math>';
			i--;
			break;
		case 2:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_septimos_x1.png";
			document.getElementById("valor").innerHTML = "1";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>1</mn></mrow></mfrac><mo>=</mo><mfrac><mn>2</mn><mn>7</mn></mfrac></math>';
			i--;
			break;
	}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function incrementar_20() {
	switch (i) {
		case 1:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x2.png";
			document.getElementById("valor").innerHTML = "2";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>4</mn><mn>6</mn></mfrac></math>';
			i++;
			break;
		case 2:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x3.png";
			document.getElementById("valor").innerHTML = "3";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>6</mn><mn>9</mn></mfrac></math>';
			i++;
			break;
		case 3:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x4.png";
			document.getElementById("valor").innerHTML = "4";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>8</mn><mn>12</mn></mfrac></math>';
			i++;
			break;
		case 4:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x5.png";
			document.getElementById("valor").innerHTML = "5";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>10</mn><mn>15</mn></mfrac></math>';
			i++;
			break;
		case 5:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x6.png";
			document.getElementById("valor").innerHTML = "6";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>12</mn><mn>18</mn></mfrac></math>';
			i++;
			break;
		case 6:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x7.png";
			document.getElementById("valor").innerHTML = "7";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>14</mn><mn>21</mn></mfrac></math>';
			i++;
			break;
		case 7:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x8.png";
			document.getElementById("valor").innerHTML = "8";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>16</mn><mn>24</mn></mfrac></math>';
			i++;
			break;
		case 8:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x9.png";
			document.getElementById("valor").innerHTML = "9";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>18</mn><mn>27</mn></mfrac></math>';
			i++;
			break;
		case 9:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x10.png";
			document.getElementById("valor").innerHTML = "10";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>10</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>10</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>20</mn><mn>30</mn></mfrac></math>';
			i++;
			break;
	}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function disminuir_20() {
	switch (i) {
		case 10:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x9.png";
			document.getElementById("valor").innerHTML = "9";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>9</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>18</mn><mn>27</mn></mfrac></math>';
			i--;
			break;
		case 9:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x8.png";
			document.getElementById("valor").innerHTML = "8";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>8</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>16</mn><mn>24</mn></mfrac></math>';
			i--;
			break;
		case 8:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x7.png";
			document.getElementById("valor").innerHTML = "7";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>7</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>14</mn><mn>21</mn></mfrac></math>';
			i--;
			break;
		case 7:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x6.png";
			document.getElementById("valor").innerHTML = "6";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>6</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>12</mn><mn>18</mn></mfrac></math>';
			i--;
			break;
		case 6:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x5.png";
			document.getElementById("valor").innerHTML = "5";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>5</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>10</mn><mn>15</mn></mfrac></math>';
			i--;
			break;
		case 5:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x4.png";
			document.getElementById("valor").innerHTML = "4";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>8</mn><mn>12</mn></mfrac></math>';
			i--;
			break;
		case 4:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x3.png";
			document.getElementById("valor").innerHTML = "3";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>6</mn><mn>9</mn></mfrac></math>';
			i--;
			break;
		case 3:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x2.png";
			document.getElementById("valor").innerHTML = "2";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>4</mn><mn>6</mn></mfrac></math>';
			i--;
			break;
		case 2:
			document.getElementById("fraccion").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_x1.png";
			document.getElementById("valor").innerHTML = "1";
			document.getElementById("fraccion_mathjax").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>2</mn></mrow><mrow><mn>1</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mn>3</mn></mrow></mfrac><mo>=</mo><mfrac><mn>2</mn><mn>3</mn></mfrac></math>';
			i--;
			break;
		
	}
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function validar_21 () {
	var incognita = document.getElementById('incognita').value;
	if (incognita == 4) {
		correcto();
	} else{
		error();
	};
}

function validar_22 () {
	var incognita = document.getElementById('incognita').value;
	if (incognita == 8) {
		correcto();
	} else{
		error();
	};
}

function validar_23 () {
	var incognita = document.getElementById('incognita').value;
	if (incognita == 2) {
		correcto();
	} else{
		error();
	};
}

function validar_25 () {
	var incognita = document.getElementById('incognita').value;
	if (incognita == 4) {
		correcto();
	} else{
		error();
	};
}

function validar_27 () {
	var incognita = document.getElementById('incognita').value;
	var numerador = 3*incognita;
	var denominador = 4*incognita;
	document.getElementById("resultado").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mo>'+numerador+'</mo><mo>'+denominador+'</mo></mfrac><mo>=</mo><mfrac><mn>6</mn><mn>8</mn></mfrac></math>';
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function validar_28 () {
	var incognita = document.getElementById('incognita').value;
	var numerador = 9/incognita;
	var denominador = 15/incognita;
	document.getElementById("resultado").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mo>'+numerador+'</mo><mo>'+denominador+'</mo></mfrac><mo>=</mo><mfrac><mn>6</mn><mn>8</mn></mfrac></math>';
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function validar_29 () {
	var operacion = document.getElementById("operacion").value;
	var incognita = document.getElementById('incognita').value;
	
	if (operacion == 1) {
		var numerador = 3*incognita;
		var denominador = 4*incognita;
		document.getElementById("resultado").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mo>'+numerador+'</mo><mo>'+denominador+'</mo></mfrac><mo>=</mo><mfrac><mn>6</mn><mn>8</mn></mfrac></math>';
	};
	if (operacion == 2) {
		var numerador = 3/incognita;
		var denominador = 4/incognita;
		document.getElementById("resultado").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mo>'+numerador+'</mo><mo>'+denominador+'</mo></mfrac><mo>=</mo><mfrac><mn>6</mn><mn>8</mn></mfrac></math>';
	};
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function operacion_29 () {
	var operacion = document.getElementById("operacion").value;
	if (operacion == 0) {
		document.getElementById("mostrar").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#x2299;</mo><mo>&#xA0;</mo><mo>?</mo></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#x2299;</mo><mo>&#xA0;</mo><mo>?</mo></mrow></mfrac></math> <input placeholder="?" style="text-align: center" onchange="validar()" size="1" type="text" id="incognita">';
	};
	if (operacion == 1) {
		document.getElementById("mostrar").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mo>?</mo></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xD7;</mo><mo>&#xA0;</mo><mo>?</mo></mrow></mfrac></math> <input placeholder="?" style="text-align: center" onchange="validar()" size="1" type="text" id="incognita">';
	};
	if (operacion == 2) {
		document.getElementById("mostrar").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>3</mn><mo>&#xA0;</mo><mo>&#xF7;</mo><mo>&#xA0;</mo><mo>?</mo></mrow><mrow><mn>4</mn><mo>&#xA0;</mo><mo>&#xF7;</mo><mo>&#xA0;</mo><mo>?</mo></mrow></mfrac></math> <input placeholder="?" style="text-align: center" onchange="validar()" size="1" type="text" id="incognita">';
	};
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}

function validar_30 () {
	var incognita = document.getElementById('incognita').value;
	var numerador = 4/incognita;
	var denominador = 12/incognita;
	document.getElementById("resultado").innerHTML = '<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mo>'+numerador+'</mo><mo>'+denominador+'</mo></mfrac></math>';
	if (incognita == 4) {
		correcto();
	};
	MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
}