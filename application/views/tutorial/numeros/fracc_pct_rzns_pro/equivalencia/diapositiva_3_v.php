<script type="text/javascript" charset="utf-8">
	function dividir_mas () {
		var porcentaje = document.getElementById('baguette_a').style.width;
		
		if (porcentaje == '0%') {
			document.getElementById("baguette_a").style.width = '50%';
			document.getElementById("baguette_a").innerHTML = '1';
		};
		if (porcentaje == '50%') {
			document.getElementById("baguette_a").style.width = '100%';
			document.getElementById("baguette_a").innerHTML = '2';
		};
	}
	function dividir_menos () {
		var porcentaje = document.getElementById('baguette_a').style.width;
		if (porcentaje == '50%') {
			document.getElementById("baguette_a").style.width = '0%';
			document.getElementById("baguette_a").innerHTML = '';
		};
		if (porcentaje == '100%') {
			document.getElementById("baguette_a").style.width = '50%';
			document.getElementById("baguette_a").innerHTML = '1';
		};
	}
	
	
	function validar() {
		var numerador = document.getElementById('numerador').value;
		var denominador = document.getElementById('denominador').value;
		console.log(numerador);
		console.log(denominador);
		if (numerador != "" && denominador != "") {
			if (numerador == 1 && denominador == 2) {
				$('#correcta').show();
				$("#correcta").fadeTo(2000, 500).slideUp(500, function(){
					$("#correcta").slideUp(500);
				});
		} else {
			$('#error').show();
			$("#error").fadeTo(2000, 500).slideUp(500, function(){
				$("#error").slideUp(500);
			});
		}
		}
	}
</script>

<div class="container-fluid">
	<p align="justify">Equipo 2</p>
	<p align="justify">Utiliza las flechas para dividir la baguette entre el número de partes iguales que creas necesarias. Después, escribe la fracción correspondiente que le toca a cada uno.</p>
	<p align="justify">Todos deben recibir la misma cantidad.</p>
	<br>
	<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
		<div class="col-xs-4 col-sm-4 col-lg-4">
			<div class="btn-group" id="opciones">
				<button onclick="dividir_menos()" type="button" class="btn btn-info"><</button>
				<button onclick="dividir_mas()" type="button" class="btn btn-info">></button>
			</div>
			<br />
			<br />
			<div class="progress">
				<div id="baguette_a" class="progress-bar" role="progressbar" aria-valuenow=""
					aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
					<span class="sr-only">60% completado</span>
				</div>			
			</div>
		</div>
		<div class="col-xs-4 col-sm-4 col-lg-4">
			<div class="btn-group" id="opciones">
				<button onclick="dividir_menos()" type="button" class="btn btn-warning"><</button>
				<button onclick="dividir_mas()" type="button" class="btn btn-warning">></button>
			</div>
			<br />
			<br />
			<div class="progress">
				<div id="baguette_b" class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow=""
					aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
					<span class="sr-only">60% completado</span>
				</div>			
			</div>
		</div>
		<div class="col-xs-4 col-sm-4 col-lg-4">
			<div class="btn-group" id="opciones">
				<button onclick="dividir_menos()" type="button" class="btn btn-danger"><</button>
				<button onclick="dividir_mas()" type="button" class="btn btn-danger">></button>
			</div>
			<br />
			<br />
			<div class="progress">
				<div id="baguette_c" class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow=""
					aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
					<span class="sr-only">60% completado</span>
				</div>			
			</div>
		</div>
		<br />
		<br />
		<div class="col-xs-12 col-sm-12 col-lg-12">
			<table>
				<tbody>
					<tr>
						<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
						<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
						<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
						<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div>
		<p align="justify">A cada uno le toca <input onchange="validar()" size="1" type="text" id="numerador"> / <input onchange="validar()" size="1" type="text" id="denominador"> de baguette</p>
	</div>
	 <br />
	 <br />		
	 <div id="correcta" style="display: none" class="alert alert-success">
	 	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	 </div>
	 <div id="error" style="display: none" class="alert alert-warning">
	 	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
	 </div>
</div>
