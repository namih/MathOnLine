<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/equivalencia.js"></script>

<div class="container-fluid">
	<p align="justify">Equipo 2</p>
	<p align="justify">Utiliza las flechas para dividir la baguette entre el número de partes iguales que creas necesarias. Después, escribe la fracción correspondiente que le toca a cada uno.</p>
	<p align="justify">Todos deben recibir la misma cantidad.</p>
	<br>
	<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
		<div style="margin-bottom: 20px" class="col-xs-12 col-sm-4 col-lg-4">
			<div class="btn-group" id="opciones">
				<button onclick="disminuir_a_3()" type="button" class="btn btn-info"><</button>
				<button id="valor_a" type="button" class="btn">1</button>
				<button onclick="incrementar_a_3()" type="button" class="btn btn-info">></button>
			</div>
			<br />
			<br />
			<img id="baguette_a" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png" />
		</div>
		<div style="margin-bottom: 20px" class="col-xs-12 col-sm-4 col-lg-4">
			<div class="btn-group" id="opciones">
				<button onclick="disminuir_b_3()" type="button" class="btn btn-warning"><</button>
				<button id="valor_b" type="button" class="btn">1</button>
				<button onclick="incrementar_b_3()" type="button" class="btn btn-warning">></button>
			</div>
			<br />
			<br />
			<img id="baguette_b" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png" />
		</div>
		<div style="margin-bottom: 20px" class="col-xs-12 col-sm-4 col-lg-4">
			<div class="btn-group" id="opciones">
				<button onclick="disminuir_c_3()" type="button" class="btn btn-danger"><</button>
				<button id="valor_c" type="button" class="btn">1</button>
				<button onclick="incrementar_c_3()" type="button" class="btn btn-danger">></button>
			</div>
			<br />
			<br />
			<img id="baguette_c" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/entre_1.png" />
		</div>
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
		<p align="justify">A cada uno le toca <input style="text-align: center" onchange="validar_3()" size="5" type="text" id="numerador"> / <input style="text-align: center" onchange="validar_3()" size="5" type="text" id="denominador"> de baguette</p>
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
