<script type="text/javascript" charset="utf-8">
	function validar () {
		var equipo = document.getElementById('equipo').value;
		if (equipo == 2) {
			$('#correcta').show();
				$("#correcta").fadeTo(2000, 500).slideUp(500, function(){
					$("#correcta").slideUp(500);
				});
		} else {
			$('#error').show();
				$("#error").fadeTo(2000, 500).slideUp(500, function(){
					$("#error").slideUp(500);
				});
		};
	}
</script>

<div class="container-fluid">
	<p align="justify">¿Qué equipo tiene la mayor cantidad de baguettes para comer por persona?</p>
	<p align="justify">Puedes arrastrar las barras y comparar tus tamaños</p>
	<br>
	<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
		<div style="margin-bottom: 20px" class="col-xs-12 col-sm-6 col-lg-6">
			<h4>Equipo 1 <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced><mfrac><mn>1</mn><mn>2</mn></mfrac></mfenced></math></h4>
			<table>
				<tbody>
					<tr>
						<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
						<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
					</tr>
				</tbody>
			</table>
			<br />
			<img id="baguette_a" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_2.png" />
		</div>
		<div style="margin-bottom: 20px" class="col-xs-12 col-sm-6 col-lg-6">
			<h4>Equipo 2 <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced><mfrac><mn>3</mn><mn>4</mn></mfrac></mfenced></math></h4>
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
			<br />
			<img id="baguette_a" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png" />
			<br />
			<img id="baguette_a" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png" />
			<br />
			<img id="baguette_a" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_4.png" />
		</div>
		<div style="margin-bottom: 20px" class="col-xs-12 col-sm-6 col-lg-6">
			<h4>Equipo 3 <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced><mfrac><mn>2</mn><mn>3</mn></mfrac></mfenced></math></h4>
			<table>
				<tbody>
					<tr>
						<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
						<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
						<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
					</tr>
				</tbody>
			</table>
			<br />
			<img id="baguette_a" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png" />
			<br />
			<img id="baguette_a" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_3.png" />
		</div>
		<div style="margin-bottom: 20px" class="col-xs-12 col-sm-6 col-lg-6">
			<h4>Equipo 4 <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced><mfrac><mn>4</mn><mn>6</mn></mfrac></mfenced></math></h4>
			<table>
				<tbody>
					<tr>
						<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
						<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
						<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
						<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
						<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
						<td align="center"><img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" /></td>
					</tr>
				</tbody>
			</table>
			<br />
			<img id="baguette_a" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png" />
			<br />
			<img id="baguette_a" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png" />
			<br />
			<img id="baguette_a" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png" />
			<br />
			<img id="baguette_a" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_6.png" />
		</div>
		
	</div>
	<div>
		<p align="justify">El equipo <input style="text-align: center" onchange="validar()" size="1" type="text" id="equipo"> tiene mayor cantidad de baguette por persona</p>
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
