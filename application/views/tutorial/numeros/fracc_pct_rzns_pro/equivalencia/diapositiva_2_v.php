<div class="container-fluid">
	<p align="justify">Equipo 1</p>
	<p align="justify">Utiliza las flechas para dividir la baguette entre el número de partes iguales que creas necesarias. Después, escribe la fracción correspondiente que le toca a cada uno.</p>
	<p align="justify">Todos deben recibir la misma cantidad.</p>
	<br>
	<div>
		<div class="col-xs-6 col-sm-6 col-lg-6">
			<div class="btn-group" id="opciones">
				<button onclick="" type="button" class="btn btn-info"><</button>
				<button onclick="" type="button" class="btn btn-info">></button>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-lg-6">
			<div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow=""
					aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
					<span class="sr-only">60% completado</span>
				</div>			
			</div>
			<div class="col-xs-6 col-sm-6 col-lg-6">
			  <img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" />
			</div>
			<div class="col-xs-6 col-sm-6 col-lg-6">
			  <img width="10%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/circulo.png" />
			</div>	
		</div>
	</div>
	<p align="justify">A cada uno le toca <input size="1" type="text" id="numerador"> / <input size="1" type="text" id="denominador"> de baguette</p>
	<p align="justify">Si este ejercicio te resulta dificil, necesitas repasar la representación de fracciones.</p>
	 <br />
	 <br />		
	 <div id="correcta" style="display: none" class="alert alert-success">
	 	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	 </div>
	 <div id="error" style="display: none" class="alert alert-warning">
	 	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
	 </div>
</div>
