var i = 1;

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

function validar_1 () {
	var incognita = document.getElementById('incognita').value;
	if (incognita == 10) {
		correcto();
	} else{
		error();
	};
}

function incrementar_2 () {
	switch (i) {
		case 1:
			document.getElementById("balanza").src = base_url+"statics/img/tutorial/algebra/ecu_form_exp_id/balanza_1.png";
			i++;
			break;
		case 2:
			document.getElementById("balanza").src = base_url+"statics/img/tutorial/algebra/ecu_form_exp_id/balanza_2.png";
			i++;
			break;
		case 3:
			document.getElementById("balanza").src = base_url+"statics/img/tutorial/algebra/ecu_form_exp_id/balanza_3.png";
			i++;
			break;
		case 4:
			document.getElementById("balanza").src = base_url+"statics/img/tutorial/algebra/ecu_form_exp_id/balanza_4.png";
			i++;
			break;
		case 5:
			document.getElementById("balanza").src = base_url+"statics/img/tutorial/algebra/ecu_form_exp_id/balanza_5.png";
			i++;
			break;
		case 6:
			document.getElementById("balanza").src = base_url+"statics/img/tutorial/algebra/ecu_form_exp_id/balanza_6.png";
			i++;
			break;
		case 7:
			document.getElementById("balanza").src = base_url+"statics/img/tutorial/algebra/ecu_form_exp_id/balanza_7.png";
			i++;
			break;
		case 8:
			document.getElementById("balanza").src = base_url+"statics/img/tutorial/algebra/ecu_form_exp_id/balanza_8.png";
			i++;
			break;
	}
}
	
function disminuir_2 () {
	switch (i) {
		case 9:
			document.getElementById("balanza").src = base_url+"statics/img/tutorial/algebra/ecu_form_exp_id/balanza_7.png";
			i--;
			break;
		case 8:
			document.getElementById("balanza").src = base_url+"statics/img/tutorial/algebra/ecu_form_exp_id/balanza_6.png";
			i--;
			break;
		case 7:
			document.getElementById("balanza").src = base_url+"statics/img/tutorial/algebra/ecu_form_exp_id/balanza_5.png";
			i--;
			break;
		case 6:
			document.getElementById("balanza").src = base_url+"statics/img/tutorial/algebra/ecu_form_exp_id/balanza_4.png";
			i--;
			break;
		case 5:
			document.getElementById("balanza").src = base_url+"statics/img/tutorial/algebra/ecu_form_exp_id/balanza_3.png";
			i--;
			break;
		case 4:
			document.getElementById("balanza").src = base_url+"statics/img/tutorial/algebra/ecu_form_exp_id/balanza_2.png";
			i--;
			break;
		case 3:
			document.getElementById("balanza").src = base_url+"statics/img/tutorial/algebra/ecu_form_exp_id/balanza_1.png";
			i--;
			break;
		case 2:
			document.getElementById("balanza").src = base_url+"statics/img/tutorial/algebra/ecu_form_exp_id/balanza_0.png";
			i--;
			break;
	}
}

function validar_2 () {
	var incognita = document.getElementById('incognita').value;
	if (incognita == 5) {
		correcto();
	} else{
		error();
	};
}