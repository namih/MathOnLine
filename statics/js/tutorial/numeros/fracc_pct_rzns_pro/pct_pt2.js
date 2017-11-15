var ia = 0;

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

function validar_2_a () {
	var grupo_a = document.getElementById('grupo_a').value;
	if (grupo_a == 88.37) {
		correcto();
	} else{
		error();
	};
}

function validar_2_b () {
	var grupo_b = document.getElementById('grupo_b').value;
	if (grupo_b == 89.09) {
		correcto();
	} else{
		error();
	};
}

function validar_3 () {
	var grupo_a = document.getElementById('grupo_a').value;
	var grupo_b = document.getElementById('grupo_b').value;
	var grupo_c = document.getElementById('grupo_c').value;
	var grupo_d = document.getElementById('grupo_d').value;
	var grupo_e = document.getElementById('grupo_e').value;
	
	if (grupo_a == 88.3) {
		document.getElementById('grupo_a').style.backgroundColor = "Green";
		document.getElementById('grupo_a').style.color = "White";
	} else {
		document.getElementById('grupo_a').style.backgroundColor = "Red";
		document.getElementById('grupo_a').style.color = "White";
	};
	if (grupo_b == 89.1) {
		document.getElementById('grupo_b').style.backgroundColor = "Green";
		document.getElementById('grupo_b').style.color = "White";
	} else {
		document.getElementById('grupo_b').style.backgroundColor = "Red";
		document.getElementById('grupo_b').style.color = "White";
	};
	if (grupo_c == 89.3) {
		document.getElementById('grupo_c').style.backgroundColor = "Green";
		document.getElementById('grupo_c').style.color = "White";
	} else {
		document.getElementById('grupo_c').style.backgroundColor = "Red";
		document.getElementById('grupo_c').style.color = "White";
	};
	if (grupo_d == 77.1) {
		document.getElementById('grupo_d').style.backgroundColor = "Green";
		document.getElementById('grupo_d').style.color = "White";
	} else {
		document.getElementById('grupo_d').style.backgroundColor = "Red";
		document.getElementById('grupo_d').style.color = "White";
	};
	if (grupo_e == 75) {
		document.getElementById('grupo_e').style.backgroundColor = "Green";
		document.getElementById('grupo_e').style.color = "White";
	} else {
		document.getElementById('grupo_e').style.backgroundColor = "Red";
		document.getElementById('grupo_e').style.color = "White";
	};
}

function incrementar_5 () {
	switch (ia) {
		case 0:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_10.png";
			document.getElementById("valor_a").innerHTML = "10%";
			ia++;
			break;
		case 1:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_20.png";
			document.getElementById("valor_a").innerHTML = "20%";
			ia++;
			break;
		case 2:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_30.png";
			document.getElementById("valor_a").innerHTML = "30%";
			ia++;
			break;
		case 3:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_40.png";
			document.getElementById("valor_a").innerHTML = "40%";
			ia++;
			break;
		case 4:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_50.png";
			document.getElementById("valor_a").innerHTML = "50%";
			ia++;
			break;
		case 5:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_60.png";
			document.getElementById("valor_a").innerHTML = "60%";
			ia++;
			break;
		case 6:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_70.png";
			document.getElementById("valor_a").innerHTML = "70%";
			ia++;
			break;
		case 7:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_80.png";
			document.getElementById("valor_a").innerHTML = "80%";
			ia++;
			break;
		case 8:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_90.png";
			document.getElementById("valor_a").innerHTML = "90%";
			ia++;
			break;
		case 9:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_100.png";
			document.getElementById("valor_a").innerHTML = "100%";
			ia++;
			break;
		}
}

function disminuir_5 () {
	switch (ia) {
		case 1:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_0.png";
			document.getElementById("valor_a").innerHTML = "0%";
			ia--;
			break;
		case 2:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_10.png";
			document.getElementById("valor_a").innerHTML = "10%";
			ia--;
			break;
		case 3:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_20.png";
			document.getElementById("valor_a").innerHTML = "20%";
			ia--;
			break;
		case 4:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_30.png";
			document.getElementById("valor_a").innerHTML = "30%";
			ia--;
			break;
		case 5:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_40.png";
			document.getElementById("valor_a").innerHTML = "40%";
			ia--;
			break;
		case 6:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_50.png";
			document.getElementById("valor_a").innerHTML = "50%";
			ia--;
			break;
		case 7:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_60.png";
			document.getElementById("valor_a").innerHTML = "60%";
			ia--;
			break;
		case 8:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_70.png";
			document.getElementById("valor_a").innerHTML = "70%";
			ia--;
			break;
		case 9:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_80.png";
			document.getElementById("valor_a").innerHTML = "80%";
			ia--;
			break;
		case 10:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_90.png";
			document.getElementById("valor_a").innerHTML = "90%";
			ia--;
			break;
	}
}

function validar_5_a () {
	var poblacion_veces = document.getElementById('poblacion_veces').value;
	if (poblacion_veces == 2) {
		correcto();
	} else{
		error();
	};
}

function validar_5_b () {
	var poblacion_cantidad = document.getElementById('poblacion_cantidad').value;
	if (poblacion_cantidad == '1,040,000') {
		correcto();
	} else{
		error();
	};
}

function incrementar_6 () {
	switch (ia) {
		case 0:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_10_a.png";
			document.getElementById("valor_a").innerHTML = "10%";
			ia++;
			break;
		case 1:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_20_a.png";
			document.getElementById("valor_a").innerHTML = "20%";
			ia++;
			break;
		case 2:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_30_a.png";
			document.getElementById("valor_a").innerHTML = "30%";
			ia++;
			break;
		case 3:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_40_a.png";
			document.getElementById("valor_a").innerHTML = "40%";
			ia++;
			break;
		case 4:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_50_a.png";
			document.getElementById("valor_a").innerHTML = "50%";
			ia++;
			break;
		case 5:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_60_a.png";
			document.getElementById("valor_a").innerHTML = "60%";
			ia++;
			break;
		case 6:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_70_a.png";
			document.getElementById("valor_a").innerHTML = "70%";
			ia++;
			break;
		case 7:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_80_a.png";
			document.getElementById("valor_a").innerHTML = "80%";
			ia++;
			break;
		case 8:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_90_a.png";
			document.getElementById("valor_a").innerHTML = "90%";
			ia++;
			break;
		case 9:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_100_a.png";
			document.getElementById("valor_a").innerHTML = "100%";
			ia++;
			break;
		case 10:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_110_a.png";
			document.getElementById("valor_a").innerHTML = "110%";
			ia++;
			break;
		case 11:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_120_a.png";
			document.getElementById("valor_a").innerHTML = "120%";
			ia++;
			break;
		case 12:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_130_a.png";
			document.getElementById("valor_a").innerHTML = "130%";
			ia++;
			break;
		case 13:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_140_a.png";
			document.getElementById("valor_a").innerHTML = "140%";
			ia++;
			break;
		case 14:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_150_a.png";
			document.getElementById("valor_a").innerHTML = "150%";
			ia++;
			break;
		}
}

function disminuir_6 () {
	switch (ia) {
		case 1:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_0_a.png";
			document.getElementById("valor_a").innerHTML = "0%";
			ia--;
			break;
		case 2:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_10_a.png";
			document.getElementById("valor_a").innerHTML = "10%";
			ia--;
			break;
		case 3:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_20_a.png";
			document.getElementById("valor_a").innerHTML = "20%";
			ia--;
			break;
		case 4:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_30_a.png";
			document.getElementById("valor_a").innerHTML = "30%";
			ia--;
			break;
		case 5:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_40_a.png";
			document.getElementById("valor_a").innerHTML = "40%";
			ia--;
			break;
		case 6:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_50_a.png";
			document.getElementById("valor_a").innerHTML = "50%";
			ia--;
			break;
		case 7:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_60_a.png";
			document.getElementById("valor_a").innerHTML = "60%";
			ia--;
			break;
		case 8:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_70_a.png";
			document.getElementById("valor_a").innerHTML = "70%";
			ia--;
			break;
		case 9:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_80_a.png";
			document.getElementById("valor_a").innerHTML = "80%";
			ia--;
			break;
		case 10:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_90_a.png";
			document.getElementById("valor_a").innerHTML = "90%";
			ia--;
			break;
		case 11:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_100_a.png";
			document.getElementById("valor_a").innerHTML = "100%";
			ia--;
			break;
		case 12:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_110_a.png";
			document.getElementById("valor_a").innerHTML = "110%";
			ia--;
			break;
		case 13:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_120_a.png";
			document.getElementById("valor_a").innerHTML = "120%";
			ia--;
			break;
		case 14:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_130_a.png";
			document.getElementById("valor_a").innerHTML = "130%";
			ia--;
			break;
		case 15:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_140_a.png";
			document.getElementById("valor_a").innerHTML = "140%";
			ia--;
			break;
	}
}

function validar_6_a () {
	var poblacion_veces = document.getElementById('poblacion_veces').value;
	if (poblacion_veces == 2.5) {
		correcto();
	} else{
		error();
	};
}

function validar_6_b () {
	var poblacion_cantidad = document.getElementById('poblacion_cantidad').value;
	if (poblacion_cantidad == '1,300,000') {
		correcto();
	} else{
		error();
	};
}

function incrementar_7 () {
	switch (ia) {
		case 0:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_10_b.png";
			document.getElementById("valor_a").innerHTML = "10%";
			ia++;
			break;
		case 1:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_20_b.png";
			document.getElementById("valor_a").innerHTML = "20%";
			ia++;
			break;
		case 2:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_30_b.png";
			document.getElementById("valor_a").innerHTML = "30%";
			ia++;
			break;
		case 3:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_40_b.png";
			document.getElementById("valor_a").innerHTML = "40%";
			ia++;
			break;
		case 4:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_50_b.png";
			document.getElementById("valor_a").innerHTML = "50%";
			ia++;
			break;
	}
}

function disminuir_7 () {
	switch (ia) {
		case 1:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_0_b.png";
			document.getElementById("valor_a").innerHTML = "0%";
			ia--;
			break;
		case 2:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_10_b.png";
			document.getElementById("valor_a").innerHTML = "10%";
			ia--;
			break;
		case 3:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_20_b.png";
			document.getElementById("valor_a").innerHTML = "20%";
			ia--;
			break;
		case 4:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_30_b.png";
			document.getElementById("valor_a").innerHTML = "30%";
			ia--;
			break;
		case 5:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_40_b.png";
			document.getElementById("valor_a").innerHTML = "40%";
			ia--;
			break;
	}
}

function validar_7_a () {
	var poblacion_veces = document.getElementById('poblacion_veces').value;
	if (poblacion_veces == 0.5) {
		correcto();
	} else{
		error();
	};
}

function validar_7_b () {
	var poblacion_cantidad = document.getElementById('poblacion_cantidad').value;
	if (poblacion_cantidad == '780,000') {
		correcto();
	} else{
		error();
	};
}

function incrementar_8 () {
	switch (ia) {
		case 0:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_10_c.png";
			document.getElementById("valor_a").innerHTML = "10%";
			ia++;
			break;
		case 1:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_20_c.png";
			document.getElementById("valor_a").innerHTML = "20%";
			ia++;
			break;
		case 2:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_30_c.png";
			document.getElementById("valor_a").innerHTML = "30%";
			ia++;
			break;
		case 3:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_40_c.png";
			document.getElementById("valor_a").innerHTML = "40%";
			ia++;
			break;
		case 4:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_50_c.png";
			document.getElementById("valor_a").innerHTML = "50%";
			ia++;
			break;
		case 5:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_60_c.png";
			document.getElementById("valor_a").innerHTML = "60%";
			ia++;
			break;
		case 6:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_70_c.png";
			document.getElementById("valor_a").innerHTML = "70%";
			ia++;
			break;
		case 7:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_80_c.png";
			document.getElementById("valor_a").innerHTML = "80%";
			ia++;
			break;
		case 8:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_90_c.png";
			document.getElementById("valor_a").innerHTML = "90%";
			ia++;
			break;
		case 9:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_100_c.png";
			document.getElementById("valor_a").innerHTML = "100%";
			ia++;
			break;
		case 10:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_110_c.png";
			document.getElementById("valor_a").innerHTML = "110%";
			ia++;
			break;
		case 11:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_120_c.png";
			document.getElementById("valor_a").innerHTML = "120%";
			ia++;
			break;
		case 12:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_130_c.png";
			document.getElementById("valor_a").innerHTML = "130%";
			ia++;
			break;
		case 13:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_140_c.png";
			document.getElementById("valor_a").innerHTML = "140%";
			ia++;
			break;
		case 14:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_150_c.png";
			document.getElementById("valor_a").innerHTML = "150%";
			ia++;
			break;
		case 15:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_160_c.png";
			document.getElementById("valor_a").innerHTML = "160%";
			ia++;
			break;
		case 16:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_170_c.png";
			document.getElementById("valor_a").innerHTML = "170%";
			ia++;
			break;
		case 17:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_180_c.png";
			document.getElementById("valor_a").innerHTML = "180%";
			ia++;
			break;
		case 18:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_190_c.png";
			document.getElementById("valor_a").innerHTML = "190%";
			ia++;
			break;
		case 19:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_200_c.png";
			document.getElementById("valor_a").innerHTML = "200%";
			ia++;
			break;
		}
}

function disminuir_8 () {
	switch (ia) {
		case 1:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_0_c.png";
			document.getElementById("valor_a").innerHTML = "0%";
			ia--;
			break;
		case 2:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_10_c.png";
			document.getElementById("valor_a").innerHTML = "10%";
			ia--;
			break;
		case 3:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_20_c.png";
			document.getElementById("valor_a").innerHTML = "20%";
			ia--;
			break;
		case 4:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_30_c.png";
			document.getElementById("valor_a").innerHTML = "30%";
			ia--;
			break;
		case 5:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_40_c.png";
			document.getElementById("valor_a").innerHTML = "40%";
			ia--;
			break;
		case 6:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_50_c.png";
			document.getElementById("valor_a").innerHTML = "50%";
			ia--;
			break;
		case 7:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_60_c.png";
			document.getElementById("valor_a").innerHTML = "60%";
			ia--;
			break;
		case 8:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_70_c.png";
			document.getElementById("valor_a").innerHTML = "70%";
			ia--;
			break;
		case 9:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_80_c.png";
			document.getElementById("valor_a").innerHTML = "80%";
			ia--;
			break;
		case 10:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_90_c.png";
			document.getElementById("valor_a").innerHTML = "90%";
			ia--;
			break;
		case 11:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_100_c.png";
			document.getElementById("valor_a").innerHTML = "100%";
			ia--;
			break;
		case 12:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_110_c.png";
			document.getElementById("valor_a").innerHTML = "110%";
			ia--;
			break;
		case 13:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_120_c.png";
			document.getElementById("valor_a").innerHTML = "120%";
			ia--;
			break;
		case 14:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_130_c.png";
			document.getElementById("valor_a").innerHTML = "130%";
			ia--;
			break;
		case 15:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_140_c.png";
			document.getElementById("valor_a").innerHTML = "140%";
			ia--;
			break;
		case 16:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_150_c.png";
			document.getElementById("valor_a").innerHTML = "150%";
			ia--;
			break;
		case 17:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_160_c.png";
			document.getElementById("valor_a").innerHTML = "160%";
			ia--;
			break;
		case 18:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_170_c.png";
			document.getElementById("valor_a").innerHTML = "170%";
			ia--;
			break;
		case 19:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_180_c.png";
			document.getElementById("valor_a").innerHTML = "180%";
			ia--;
			break;
		case 20:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_190_c.png";
			document.getElementById("valor_a").innerHTML = "190%";
			ia--;
			break;
	}
}

function validar_8_a () {
	var poblacion_veces = document.getElementById('poblacion_veces').value;
	if (poblacion_veces == 3) {
		correcto();
	} else{
		error();
	};
}

function validar_8_b () {
	var poblacion_cantidad = document.getElementById('poblacion_cantidad').value;
	if (poblacion_cantidad == '1,560,000') {
		correcto();
	} else{
		error();
	};
}

function incrementar_9 () {
	switch (ia) {
		case 0:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_10_d.png";
			document.getElementById("valor_a").innerHTML = "10%";
			ia++;
			break;
		case 1:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_20_d.png";
			document.getElementById("valor_a").innerHTML = "20%";
			ia++;
			break;
		case 2:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_30_d.png";
			document.getElementById("valor_a").innerHTML = "30%";
			ia++;
			break;
		case 3:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_40_d.png";
			document.getElementById("valor_a").innerHTML = "40%";
			ia++;
			break;
		case 4:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_50_d.png";
			document.getElementById("valor_a").innerHTML = "50%";
			ia++;
			break;
		case 5:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_60_d.png";
			document.getElementById("valor_a").innerHTML = "60%";
			ia++;
			break;
		case 6:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_70_d.png";
			document.getElementById("valor_a").innerHTML = "70%";
			ia++;
			break;
		case 7:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_80_d.png";
			document.getElementById("valor_a").innerHTML = "80%";
			ia++;
			break;
		case 8:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_90_d.png";
			document.getElementById("valor_a").innerHTML = "90%";
			ia++;
			break;
		case 9:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_100_d.png";
			document.getElementById("valor_a").innerHTML = "100%";
			ia++;
			break;
		case 10:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_110_d.png";
			document.getElementById("valor_a").innerHTML = "110%";
			ia++;
			break;
		case 11:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_120_d.png";
			document.getElementById("valor_a").innerHTML = "120%";
			ia++;
			break;
		case 12:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_130_d.png";
			document.getElementById("valor_a").innerHTML = "130%";
			ia++;
			break;
		case 13:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_140_d.png";
			document.getElementById("valor_a").innerHTML = "140%";
			ia++;
			break;
		case 14:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_150_d.png";
			document.getElementById("valor_a").innerHTML = "150%";
			ia++;
			break;
		case 15:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_160_d.png";
			document.getElementById("valor_a").innerHTML = "160%";
			ia++;
			break;
		case 16:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_170_d.png";
			document.getElementById("valor_a").innerHTML = "170%";
			ia++;
			break;
		case 17:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_180_d.png";
			document.getElementById("valor_a").innerHTML = "180%";
			ia++;
			break;
		case 18:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_190_d.png";
			document.getElementById("valor_a").innerHTML = "190%";
			ia++;
			break;
		case 19:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_200_d.png";
			document.getElementById("valor_a").innerHTML = "200%";
			ia++;
			break;
		case 20:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_210_d.png";
			document.getElementById("valor_a").innerHTML = "210%";
			ia++;
			break;
		case 21:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_220_d.png";
			document.getElementById("valor_a").innerHTML = "220%";
			ia++;
			break;
		case 22:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_230_d.png";
			document.getElementById("valor_a").innerHTML = "230%";
			ia++;
			break;
		case 23:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_240_d.png";
			document.getElementById("valor_a").innerHTML = "240%";
			ia++;
			break;
		case 24:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_250_d.png";
			document.getElementById("valor_a").innerHTML = "250%";
			ia++;
			break;
		}
}

function disminuir_9 () {
	switch (ia) {
		case 1:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_0_d.png";
			document.getElementById("valor_a").innerHTML = "0%";
			ia--;
			break;
		case 2:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_10_d.png";
			document.getElementById("valor_a").innerHTML = "10%";
			ia--;
			break;
		case 3:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_20_d.png";
			document.getElementById("valor_a").innerHTML = "20%";
			ia--;
			break;
		case 4:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_30_d.png";
			document.getElementById("valor_a").innerHTML = "30%";
			ia--;
			break;
		case 5:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_40_d.png";
			document.getElementById("valor_a").innerHTML = "40%";
			ia--;
			break;
		case 6:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_50_d.png";
			document.getElementById("valor_a").innerHTML = "50%";
			ia--;
			break;
		case 7:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_60_d.png";
			document.getElementById("valor_a").innerHTML = "60%";
			ia--;
			break;
		case 8:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_70_d.png";
			document.getElementById("valor_a").innerHTML = "70%";
			ia--;
			break;
		case 9:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_80_d.png";
			document.getElementById("valor_a").innerHTML = "80%";
			ia--;
			break;
		case 10:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_90_d.png";
			document.getElementById("valor_a").innerHTML = "90%";
			ia--;
			break;
		case 11:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_100_d.png";
			document.getElementById("valor_a").innerHTML = "100%";
			ia--;
			break;
		case 12:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_110_d.png";
			document.getElementById("valor_a").innerHTML = "110%";
			ia--;
			break;
		case 13:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_120_d.png";
			document.getElementById("valor_a").innerHTML = "120%";
			ia--;
			break;
		case 14:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_130_d.png";
			document.getElementById("valor_a").innerHTML = "130%";
			ia--;
			break;
		case 15:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_140_d.png";
			document.getElementById("valor_a").innerHTML = "140%";
			ia--;
			break;
		case 16:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_150_d.png";
			document.getElementById("valor_a").innerHTML = "150%";
			ia--;
			break;
		case 17:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_160_d.png";
			document.getElementById("valor_a").innerHTML = "160%";
			ia--;
			break;
		case 18:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_170_d.png";
			document.getElementById("valor_a").innerHTML = "170%";
			ia--;
			break;
		case 19:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_180_d.png";
			document.getElementById("valor_a").innerHTML = "180%";
			ia--;
			break;
		case 20:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_190_d.png";
			document.getElementById("valor_a").innerHTML = "190%";
			ia--;
			break;
		case 21:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_200_d.png";
			document.getElementById("valor_a").innerHTML = "200%";
			ia--;
			break;
		case 22:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_210_d.png";
			document.getElementById("valor_a").innerHTML = "210%";
			ia--;
			break;
		case 23:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_220_d.png";
			document.getElementById("valor_a").innerHTML = "220%";
			ia--;
			break;
		case 24:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_230_d.png";
			document.getElementById("valor_a").innerHTML = "230%";
			ia--;
			break;
		case 25:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_240_d.png";
			document.getElementById("valor_a").innerHTML = "240%";
			ia--;
			break;
	}
}

function validar_9_a () {
	var poblacion_veces = document.getElementById('poblacion_veces').value;
	if (poblacion_veces == 3.5) {
		correcto();
	} else{
		error();
	};
}

function validar_9_b () {
	var poblacion_cantidad = document.getElementById('poblacion_cantidad').value;
	if (poblacion_cantidad == '1,820,000') {
		correcto();
	} else{
		error();
	};
}

function incrementar_10 () {
	switch (ia) {
		case 0:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_10_e.png";
			document.getElementById("valor_a").innerHTML = "10%";
			ia++;
			break;
		case 1:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_20_e.png";
			document.getElementById("valor_a").innerHTML = "20%";
			ia++;
			break;
		case 2:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_30_e.png";
			document.getElementById("valor_a").innerHTML = "30%";
			ia++;
			break;
		case 3:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_40_e.png";
			document.getElementById("valor_a").innerHTML = "40%";
			ia++;
			break;
		case 4:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_50_e.png";
			document.getElementById("valor_a").innerHTML = "50%";
			ia++;
			break;
		case 5:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_60_e.png";
			document.getElementById("valor_a").innerHTML = "60%";
			ia++;
			break;
		case 6:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_70_e.png";
			document.getElementById("valor_a").innerHTML = "70%";
			ia++;
			break;
		case 7:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_80_e.png";
			document.getElementById("valor_a").innerHTML = "80%";
			ia++;
			break;
		case 8:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_90_e.png";
			document.getElementById("valor_a").innerHTML = "90%";
			ia++;
			break;
		case 9:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_100_e.png";
			document.getElementById("valor_a").innerHTML = "100%";
			ia++;
			break;
		case 10:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_110_e.png";
			document.getElementById("valor_a").innerHTML = "110%";
			ia++;
			break;
		case 11:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_120_e.png";
			document.getElementById("valor_a").innerHTML = "120%";
			ia++;
			break;
		case 12:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_130_e.png";
			document.getElementById("valor_a").innerHTML = "130%";
			ia++;
			break;
		case 13:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_140_e.png";
			document.getElementById("valor_a").innerHTML = "140%";
			ia++;
			break;
		case 14:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_150_e.png";
			document.getElementById("valor_a").innerHTML = "150%";
			ia++;
			break;
		case 15:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_160_e.png";
			document.getElementById("valor_a").innerHTML = "160%";
			ia++;
			break;
		case 16:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_170_e.png";
			document.getElementById("valor_a").innerHTML = "170%";
			ia++;
			break;
		case 17:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_180_e.png";
			document.getElementById("valor_a").innerHTML = "180%";
			ia++;
			break;
		case 18:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_190_e.png";
			document.getElementById("valor_a").innerHTML = "190%";
			ia++;
			break;
		case 19:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_200_e.png";
			document.getElementById("valor_a").innerHTML = "200%";
			ia++;
			break;
		case 20:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_210_e.png";
			document.getElementById("valor_a").innerHTML = "210%";
			ia++;
			break;
		case 21:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_220_e.png";
			document.getElementById("valor_a").innerHTML = "220%";
			ia++;
			break;
		case 22:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_230_e.png";
			document.getElementById("valor_a").innerHTML = "230%";
			ia++;
			break;
		case 23:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_240_e.png";
			document.getElementById("valor_a").innerHTML = "240%";
			ia++;
			break;
		case 24:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_250_e.png";
			document.getElementById("valor_a").innerHTML = "250%";
			ia++;
			break;
		case 25:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_260_e.png";
			document.getElementById("valor_a").innerHTML = "260%";
			ia++;
			break;
		case 26:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_270_e.png";
			document.getElementById("valor_a").innerHTML = "270%";
			ia++;
			break;
		case 27:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_280_e.png";
			document.getElementById("valor_a").innerHTML = "280%";
			ia++;
			break;
		case 28:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_290_e.png";
			document.getElementById("valor_a").innerHTML = "290%";
			ia++;
			break;
		case 29:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_300_e.png";
			document.getElementById("valor_a").innerHTML = "300%";
			ia++;
			break;
		}
}

function disminuir_10 () {
	switch (ia) {
		case 1:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_0_e.png";
			document.getElementById("valor_a").innerHTML = "0%";
			ia--;
			break;
		case 2:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_10_e.png";
			document.getElementById("valor_a").innerHTML = "10%";
			ia--;
			break;
		case 3:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_20_e.png";
			document.getElementById("valor_a").innerHTML = "20%";
			ia--;
			break;
		case 4:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_30_e.png";
			document.getElementById("valor_a").innerHTML = "30%";
			ia--;
			break;
		case 5:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_40_e.png";
			document.getElementById("valor_a").innerHTML = "40%";
			ia--;
			break;
		case 6:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_50_e.png";
			document.getElementById("valor_a").innerHTML = "50%";
			ia--;
			break;
		case 7:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_60_e.png";
			document.getElementById("valor_a").innerHTML = "60%";
			ia--;
			break;
		case 8:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_70_e.png";
			document.getElementById("valor_a").innerHTML = "70%";
			ia--;
			break;
		case 9:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_80_e.png";
			document.getElementById("valor_a").innerHTML = "80%";
			ia--;
			break;
		case 10:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_90_e.png";
			document.getElementById("valor_a").innerHTML = "90%";
			ia--;
			break;
		case 11:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_100_e.png";
			document.getElementById("valor_a").innerHTML = "100%";
			ia--;
			break;
		case 12:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_110_e.png";
			document.getElementById("valor_a").innerHTML = "110%";
			ia--;
			break;
		case 13:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_120_e.png";
			document.getElementById("valor_a").innerHTML = "120%";
			ia--;
			break;
		case 14:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_130_e.png";
			document.getElementById("valor_a").innerHTML = "130%";
			ia--;
			break;
		case 15:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_140_e.png";
			document.getElementById("valor_a").innerHTML = "140%";
			ia--;
			break;
		case 16:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_150_e.png";
			document.getElementById("valor_a").innerHTML = "150%";
			ia--;
			break;
		case 17:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_160_e.png";
			document.getElementById("valor_a").innerHTML = "160%";
			ia--;
			break;
		case 18:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_170_e.png";
			document.getElementById("valor_a").innerHTML = "170%";
			ia--;
			break;
		case 19:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_180_e.png";
			document.getElementById("valor_a").innerHTML = "180%";
			ia--;
			break;
		case 20:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_190_e.png";
			document.getElementById("valor_a").innerHTML = "190%";
			ia--;
			break;
		case 21:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_200_e.png";
			document.getElementById("valor_a").innerHTML = "200%";
			ia--;
			break;
		case 22:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_210_e.png";
			document.getElementById("valor_a").innerHTML = "210%";
			ia--;
			break;
		case 23:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_220_e.png";
			document.getElementById("valor_a").innerHTML = "220%";
			ia--;
			break;
		case 24:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_230_e.png";
			document.getElementById("valor_a").innerHTML = "230%";
			ia--;
			break;
		case 25:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_240_e.png";
			document.getElementById("valor_a").innerHTML = "240%";
			ia--;
			break;
		case 26:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_250_e.png";
			document.getElementById("valor_a").innerHTML = "250%";
			ia--;
			break;
		case 27:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_260_e.png";
			document.getElementById("valor_a").innerHTML = "260%";
			ia--;
			break;
		case 28:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_270_e.png";
			document.getElementById("valor_a").innerHTML = "270%";
			ia--;
			break;
		case 29:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_280_e.png";
			document.getElementById("valor_a").innerHTML = "280%";
			ia--;
			break;
		case 30:
			document.getElementById("poblacion_img").src = base_url+"statics/img/tutorial/numeros/fracc_pct_rzns_pro/poblacion_290_e.png";
			document.getElementById("valor_a").innerHTML = "290%";
			ia--;
			break;
	}
}

function validar_10_a () {
	var poblacion_veces = document.getElementById('poblacion_veces').value;
	if (poblacion_veces == 4) {
		correcto();
	} else{
		error();
	};
}

function validar_10_b () {
	var poblacion_cantidad = document.getElementById('poblacion_cantidad').value;
	if (poblacion_cantidad == '2,080,000') {
		correcto();
	} else{
		error();
	};
}

function validar_11_a () {
	var poblacion_veces = document.getElementById('poblacion_veces').value;
	if (poblacion_veces == '1,560,000') {
		correcto();
	} else{
		error();
	};
}

function validar_11_b () {
	var poblacion_cantidad = document.getElementById('poblacion_cantidad').value;
	if (poblacion_cantidad == '2,080,000') {
		correcto();
	} else{
		error();
	};
}

function validar_12_a () {
	var regla = document.getElementById('regla').value;
	if (regla == 150) {
		correcto();
	} else{
		error();
	};
}

function validar_12_b () {
	var total = document.getElementById('total').value;
	if (total == '30.00') {
		correcto();
	} else{
		error();
	};
}

function validar_14 () {
	var porcentaje = document.getElementById('porcentaje').value;
	if (porcentaje == 1.86) {
		correcto();
	} else{
		error();
	};
}

function validar_15 () {
	var porcentaje = document.getElementById('porcentaje').value;
	if (porcentaje == 31.25) {
		correcto();
	} else{
		error();
	};
}

function validar_17_a () {
	var peso_pablo = document.getElementById('peso_pablo').value;
	if (peso_pablo == 84) {
		correcto();
	} else{
		error();
	};
}

function validar_17_b () {
	var porcentaje_pablo = document.getElementById('porcentaje_pablo').value;
	if (porcentaje_pablo == 33.6) {
		correcto();
	} else{
		error();
	};
}

function validar_17_c () {
	var peso_tere = document.getElementById('peso_tere').value;
	if (peso_tere == 50.4) {
		correcto();
	} else{
		error();
	};
}

function validar_18_a () {
	var iva = document.getElementById('iva').value;
	if (iva == 20) {
		correcto();
	} else{
		error();
	};
}

function validar_18_b () {
	var total = document.getElementById('total').value;
	if (total == 145) {
		correcto();
	} else{
		error();
	};
}

function validar_19_a () {
	var cien_porciento = document.getElementById('cien_porciento').value;
	if (cien_porciento == 107.76) {
		correcto();
	} else{
		error();
	};
}

function validar_19_b () {
	var total = document.getElementById('total').value;
	if (total == 17.24) {
		correcto();
	} else{
		error();
	};
}

function validar_20 () {
	var iva = document.getElementById('iva').value;
	var subtotal = document.getElementById('subtotal').value;
	var retencion_iva = document.getElementById('retencion_iva').value;
	var isr = document.getElementById('isr').value;
	var total = document.getElementById('total').value;
	
	if (iva == '2,400.00') {
		document.getElementById('iva').style.backgroundColor = "Green";
		document.getElementById('iva').style.color = "White";
	} else {
		document.getElementById('iva').style.backgroundColor = "Red";
		document.getElementById('iva').style.color = "White";
	};
	if (subtotal == '17,400.00') {
		document.getElementById('subtotal').style.backgroundColor = "Green";
		document.getElementById('subtotal').style.color = "White";
	} else {
		document.getElementById('subtotal').style.backgroundColor = "Red";
		document.getElementById('subtotal').style.color = "White";
	};
	if (retencion_iva == '1,600.00') {
		document.getElementById('retencion_iva').style.backgroundColor = "Green";
		document.getElementById('retencion_iva').style.color = "White";
	} else {
		document.getElementById('retencion_iva').style.backgroundColor = "Red";
		document.getElementById('retencion_iva').style.color = "White";
	};
	if (isr == '1,500.00') {
		document.getElementById('isr').style.backgroundColor = "Green";
		document.getElementById('isr').style.color = "White";
	} else {
		document.getElementById('isr').style.backgroundColor = "Red";
		document.getElementById('isr').style.color = "White";
	};
	if (total == '14,300.00') {
		document.getElementById('total').style.backgroundColor = "Green";
		document.getElementById('total').style.color = "White";
	} else {
		document.getElementById('total').style.backgroundColor = "Red";
		document.getElementById('total').style.color = "White";
	};
}

function validar_21 () {
	var iva = document.getElementById('iva').value;
	var subtotal = document.getElementById('subtotal').value;
	var retencion_iva = document.getElementById('retencion_iva').value;
	var isr = document.getElementById('isr').value;
	var total = document.getElementById('total').value;
	
	if (iva == '1,600.00') {
		document.getElementById('iva').style.backgroundColor = "Green";
		document.getElementById('iva').style.color = "White";
	} else {
		document.getElementById('iva').style.backgroundColor = "Red";
		document.getElementById('iva').style.color = "White";
	};
	if (subtotal == '11,600.00') {
		document.getElementById('subtotal').style.backgroundColor = "Green";
		document.getElementById('subtotal').style.color = "White";
	} else {
		document.getElementById('subtotal').style.backgroundColor = "Red";
		document.getElementById('subtotal').style.color = "White";
	};
	if (retencion_iva == '1,066.67') {
		document.getElementById('retencion_iva').style.backgroundColor = "Green";
		document.getElementById('retencion_iva').style.color = "White";
	} else {
		document.getElementById('retencion_iva').style.backgroundColor = "Red";
		document.getElementById('retencion_iva').style.color = "White";
	};
	if (isr == '1,000.00') {
		document.getElementById('isr').style.backgroundColor = "Green";
		document.getElementById('isr').style.color = "White";
	} else {
		document.getElementById('isr').style.backgroundColor = "Red";
		document.getElementById('isr').style.color = "White";
	};
	if (total == '9,533.33') {
		document.getElementById('total').style.backgroundColor = "Green";
		document.getElementById('total').style.color = "White";
	} else {
		document.getElementById('total').style.backgroundColor = "Red";
		document.getElementById('total').style.color = "White";
	};
}

function validar_22 () {
	var honorarios = document.getElementById('honorarios').value;
	var subtotal = document.getElementById('subtotal').value;
	var retencion_iva = document.getElementById('retencion_iva').value;
	var isr = document.getElementById('isr').value;
	var total = document.getElementById('total').value;
	
	if (honorarios == '11,250,00') {
		document.getElementById('honorarios').style.backgroundColor = "Green";
		document.getElementById('honorarios').style.color = "White";
	} else {
		document.getElementById('honorarios').style.backgroundColor = "Red";
		document.getElementById('honorarios').style.color = "White";
	};
	if (subtotal == '13,050.00') {
		document.getElementById('subtotal').style.backgroundColor = "Green";
		document.getElementById('subtotal').style.color = "White";
	} else {
		document.getElementById('subtotal').style.backgroundColor = "Red";
		document.getElementById('subtotal').style.color = "White";
	};
	if (retencion_iva == '1,200.00') {
		document.getElementById('retencion_iva').style.backgroundColor = "Green";
		document.getElementById('retencion_iva').style.color = "White";
	} else {
		document.getElementById('retencion_iva').style.backgroundColor = "Red";
		document.getElementById('retencion_iva').style.color = "White";
	};
	if (isr == '1,125.00') {
		document.getElementById('isr').style.backgroundColor = "Green";
		document.getElementById('isr').style.color = "White";
	} else {
		document.getElementById('isr').style.backgroundColor = "Red";
		document.getElementById('isr').style.color = "White";
	};
	if (total == '10,725.00') {
		document.getElementById('total').style.backgroundColor = "Green";
		document.getElementById('total').style.color = "White";
	} else {
		document.getElementById('total').style.backgroundColor = "Red";
		document.getElementById('total').style.color = "White";
	};
}

function validar_23 () {
	var honorarios = document.getElementById('honorarios').value;
	var iva = document.getElementById('iva').value;
	var retencion_iva = document.getElementById('retencion_iva').value;
	var isr = document.getElementById('isr').value;
	var total = document.getElementById('total').value;
	
	if (honorarios == '5,452.59') {
		document.getElementById('honorarios').style.backgroundColor = "Green";
		document.getElementById('honorarios').style.color = "White";
	} else {
		document.getElementById('honorarios').style.backgroundColor = "Red";
		document.getElementById('honorarios').style.color = "White";
	};
	if (iva == '872.41') {
		document.getElementById('iva').style.backgroundColor = "Green";
		document.getElementById('iva').style.color = "White";
	} else {
		document.getElementById('iva').style.backgroundColor = "Red";
		document.getElementById('iva').style.color = "White";
	};
	if (retencion_iva == '581.61') {
		document.getElementById('retencion_iva').style.backgroundColor = "Green";
		document.getElementById('retencion_iva').style.color = "White";
	} else {
		document.getElementById('retencion_iva').style.backgroundColor = "Red";
		document.getElementById('retencion_iva').style.color = "White";
	};
	if (isr == '545.26') {
		document.getElementById('isr').style.backgroundColor = "Green";
		document.getElementById('isr').style.color = "White";
	} else {
		document.getElementById('isr').style.backgroundColor = "Red";
		document.getElementById('isr').style.color = "White";
	};
	if (total == '5,198.14') {
		document.getElementById('total').style.backgroundColor = "Green";
		document.getElementById('total').style.color = "White";
	} else {
		document.getElementById('total').style.backgroundColor = "Red";
		document.getElementById('total').style.color = "White";
	};
}

function validar_24 () {
	var honorarios = document.getElementById('honorarios').value;
	var iva = document.getElementById('iva').value;
	var subtotal = document.getElementById('subtotal').value;
	var isr = document.getElementById('isr').value;
	var total = document.getElementById('total').value;
	
	if (honorarios == '32,343.75') {
		document.getElementById('honorarios').style.backgroundColor = "Green";
		document.getElementById('honorarios').style.color = "White";
	} else {
		document.getElementById('honorarios').style.backgroundColor = "Red";
		document.getElementById('honorarios').style.color = "White";
	};
	if (iva == '5,175.00') {
		document.getElementById('iva').style.backgroundColor = "Green";
		document.getElementById('iva').style.color = "White";
	} else {
		document.getElementById('iva').style.backgroundColor = "Red";
		document.getElementById('iva').style.color = "White";
	};
	if (subtotal == '37,518.75') {
		document.getElementById('subtotal').style.backgroundColor = "Green";
		document.getElementById('subtotal').style.color = "White";
	} else {
		document.getElementById('retencion_iva').style.backgroundColor = "Red";
		document.getElementById('retencion_iva').style.color = "White";
	};
	if (isr == '3,234.38') {
		document.getElementById('isr').style.backgroundColor = "Green";
		document.getElementById('isr').style.color = "White";
	} else {
		document.getElementById('isr').style.backgroundColor = "Red";
		document.getElementById('isr').style.color = "White";
	};
	if (total == '30,834.38') {
		document.getElementById('total').style.backgroundColor = "Green";
		document.getElementById('total').style.color = "White";
	} else {
		document.getElementById('total').style.backgroundColor = "Red";
		document.getElementById('total').style.color = "White";
	};
}

function validar_25 () {
	var honorarios = document.getElementById('honorarios').value;
	var iva = document.getElementById('iva').value;
	var subtotal = document.getElementById('subtotal').value;
	var retencion_iva = document.getElementById('retencion_iva').value;
	var total = document.getElementById('total').value;
	
	if (honorarios == '34,500.00') {
		document.getElementById('honorarios').style.backgroundColor = "Green";
		document.getElementById('honorarios').style.color = "White";
	} else {
		document.getElementById('honorarios').style.backgroundColor = "Red";
		document.getElementById('honorarios').style.color = "White";
	};
	if (iva == '5,520.00') {
		document.getElementById('iva').style.backgroundColor = "Green";
		document.getElementById('iva').style.color = "White";
	} else {
		document.getElementById('iva').style.backgroundColor = "Red";
		document.getElementById('iva').style.color = "White";
	};
	if (subtotal == '40,0250.00') {
		document.getElementById('subtotal').style.backgroundColor = "Green";
		document.getElementById('subtotal').style.color = "White";
	} else {
		document.getElementById('retencion_iva').style.backgroundColor = "Red";
		document.getElementById('retencion_iva').style.color = "White";
	};
	if (retencion_iva == '3,680.00') {
		document.getElementById('retencion_iva').style.backgroundColor = "Green";
		document.getElementById('retencion_iva').style.color = "White";
	} else {
		document.getElementById('retencion_iva').style.backgroundColor = "Red";
		document.getElementById('retencion_iva').style.color = "White";
	};
	if (total == '32,890.00') {
		document.getElementById('total').style.backgroundColor = "Green";
		document.getElementById('total').style.color = "White";
	} else {
		document.getElementById('total').style.backgroundColor = "Red";
		document.getElementById('total').style.color = "White";
	};
}

function validar_26 () {
	var honorarios = document.getElementById('honorarios').value;
	var iva = document.getElementById('iva').value;
	var subtotal = document.getElementById('subtotal').value;
	var retencion_iva = document.getElementById('retencion_iva').value;
	var isr = document.getElementById('isr').value;
	
	if (honorarios == '14,475.00') {
		document.getElementById('honorarios').style.backgroundColor = "Green";
		document.getElementById('honorarios').style.color = "White";
	} else {
		document.getElementById('honorarios').style.backgroundColor = "Red";
		document.getElementById('honorarios').style.color = "White";
	};
	if (iva == '2,316.00') {
		document.getElementById('iva').style.backgroundColor = "Green";
		document.getElementById('iva').style.color = "White";
	} else {
		document.getElementById('iva').style.backgroundColor = "Red";
		document.getElementById('iva').style.color = "White";
	};
	if (subtotal == '16,791.00') {
		document.getElementById('subtotal').style.backgroundColor = "Green";
		document.getElementById('subtotal').style.color = "White";
	} else {
		document.getElementById('retencion_iva').style.backgroundColor = "Red";
		document.getElementById('retencion_iva').style.color = "White";
	};
	if (retencion_iva == '1,544.00') {
		document.getElementById('retencion_iva').style.backgroundColor = "Green";
		document.getElementById('retencion_iva').style.color = "White";
	} else {
		document.getElementById('retencion_iva').style.backgroundColor = "Red";
		document.getElementById('retencion_iva').style.color = "White";
	};
	if (isr == '1,447.50') {
		document.getElementById('isr').style.backgroundColor = "Green";
		document.getElementById('isr').style.color = "White";
	} else {
		document.getElementById('isr').style.backgroundColor = "Red";
		document.getElementById('isr').style.color = "White";
	};
}

function validar_27_a () {
	var sin_iva = document.getElementById('sin_iva').value;
	if (sin_iva == '1,077.59') {
		correcto();
	} else{
		error();
	};
}

function validar_27_b () {
	var iva = document.getElementById('iva').value;
	if (iva == '172.41') {
		correcto();
	} else{
		error();
	};
}