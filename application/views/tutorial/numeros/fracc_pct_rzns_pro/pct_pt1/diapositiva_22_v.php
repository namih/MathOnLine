<script type="text/javascript" charset="utf-8">
	function validar() {
		var a_e1 = document.getElementById('a_e1').value;
		var a_e2 = document.getElementById('a_e2').value;
		
		var b_e1 = document.getElementById('b_e1').value;
		var b_e2 = document.getElementById('b_e2').value;
		
		var c_e1 = document.getElementById('c_e1').value;
		var c_e2 = document.getElementById('c_e2').value;
		
		var d_e1 = document.getElementById('d_e1').value;
		var d_e2 = document.getElementById('d_e2').value;
		
		var e_e1 = document.getElementById('e_e1').value;
		var e_e2 = document.getElementById('e_e2').value;
		
		if (a_e1 == 40) {
			document.getElementById('a_e1').style.backgroundColor = "Green";
			document.getElementById('a_e1').style.color = "White";
		} else {
			document.getElementById('a_e1').style.backgroundColor = "Red";
			document.getElementById('a_e1').style.color = "White";
		};
		if (a_e2 == 50) {
			document.getElementById('a_e2').style.backgroundColor = "Green";
			document.getElementById('a_e2').style.color = "White";
		} else {
			document.getElementById('a_e2').style.backgroundColor = "Red";
			document.getElementById('a_e2').style.color = "White";
		};
		
		if (b_e1 == 30) {
			document.getElementById('b_e1').style.backgroundColor = "Green";
			document.getElementById('b_e1').style.color = "White";
		} else {
			document.getElementById('b_e1').style.backgroundColor = "Red";
			document.getElementById('b_e1').style.color = "White";
		};
		if (b_e2 == 40) {
			document.getElementById('b_e2').style.backgroundColor = "Green";
			document.getElementById('b_e2').style.color = "White";
		} else {
			document.getElementById('b_e2').style.backgroundColor = "Red";
			document.getElementById('b_e2').style.color = "White";
		};
		
		if (c_e1 == 10) {
			document.getElementById('c_e1').style.backgroundColor = "Green";
			document.getElementById('c_e1').style.color = "White";
		} else {
			document.getElementById('c_e1').style.backgroundColor = "Red";
			document.getElementById('c_e1').style.color = "White";
		};
		if (c_e2 == 10) {
			document.getElementById('c_e2').style.backgroundColor = "Green";
			document.getElementById('c_e2').style.color = "White";
		} else {
			document.getElementById('c_e2').style.backgroundColor = "Red";
			document.getElementById('c_e2').style.color = "White";
		};
		
		if (d_e1 == '30/40') {
			document.getElementById('d_e1').style.backgroundColor = "Green";
			document.getElementById('d_e1').style.color = "White";
		} else {
			document.getElementById('d_e1').style.backgroundColor = "Red";
			document.getElementById('d_e1').style.color = "White";
		};
		if (d_e2 == '40/50') {
			document.getElementById('d_e2').style.backgroundColor = "Green";
			document.getElementById('d_e2').style.color = "White";
		} else {
			document.getElementById('d_e2').style.backgroundColor = "Red";
			document.getElementById('d_e2').style.color = "White";
		};
		
		if (e_e1 == '30/40') {
			document.getElementById('e_e1').style.backgroundColor = "Green";
			document.getElementById('e_e1').style.color = "White";
		} else {
			document.getElementById('e_e1').style.backgroundColor = "Red";
			document.getElementById('e_e1').style.color = "White";
		};
		if (e_e2 == '40/50') {
			document.getElementById('e_e2').style.backgroundColor = "Green";
			document.getElementById('e_e2').style.color = "White";
		} else {
			document.getElementById('e_e2').style.backgroundColor = "Red";
			document.getElementById('e_e2').style.color = "White";
		};
	}
</script>
<div class="container-fluid">
		<div class="col-xs-12 col-sm-12 col-lg-12">
		  <div style="margin-bottom: 20px" class="col-xs-12 col-sm-6 col-lg-6">
		  	<p>E1</p>
			<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/parking_e1.png" />
		  </div>
		  <div style="margin-bottom: 20px" class="col-xs-12 col-sm-6 col-lg-6">
		  	<p>E2</p>
			<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/parking_e2.png" />
		  </div>
		</div>
		<p align="justify">Completa los letreros que informan a los conductores sobre la disponibilidad de cada estacionamiento:</p>
		<div class="col-xs-12 col-sm-12 col-lg-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th></th>
						<th>E1</th>
						<th>E2</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Número de espacios</td>
						<td><input style="text-align: center" size="1" type="text" id="a_e1"></td>
						<td><input style="text-align: center" size="1" type="text" id="a_e2"></td>
					</tr>
					<tr>
						<td>Número de espacios ocupados</td>
						<td><input style="text-align: center" size="1" type="text" id="b_e1"></td>
						<td><input style="text-align: center" size="1" type="text" id="b_e2"></td>
					</tr>
					<tr>
						<td>Número de espacios disponibles</td>
						<td><input style="text-align: center" size="1" type="text" id="c_e1"></td>
						<td><input style="text-align: center" size="1" type="text" id="c_e2"></td>
					</tr>
					<tr>
						<td>Fracción de espacios ocupados</td>
						<td><input placeholder="a/b" style="text-align: center" size="1" type="text" id="d_e1"></td>
						<td><input placeholder="a/b" style="text-align: center" size="1" type="text" id="d_e2"></td>
					</tr>
					<tr>
						<td>Fracción de espacios disponibles</td>
						<td><input placeholder="a/b" style="text-align: center" size="1" type="text" id="e_e1"></td>
						<td><input placeholder="a/b" style="text-align: center" size="1" type="text" id="e_e2"></td>
					</tr>
				</tbody>
			</table>
			<button onclick="validar()" type="button" class="btn btn-success">Validar</button>
		</div>
		<p align="justify">¿Cuál crees que está más lleno?</p>
		<div align="justify" class="col-xs-12 col-sm-12 col-lg-12">
			<div class="radio">
				<label><input onclick="error()" type="radio" name="optradio">E1</label>
			</div>
			<div class="radio">
				<label><input onclick="correcto()" type="radio" name="optradio">E2</label>
			</div>
			<div class="radio">
				<label><input onclick="error()" type="radio" name="optradio">Iguales</label>
			</div>
		</div>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>