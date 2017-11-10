<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/equivalencia.js"></script>

<div class="container-fluid">
	<p align="justify">Encuentra la fracción equivalente a <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>7</mn></mfrac></math>. Puedes arrastrar la figura de la derecha hacia la izquierda.</p>
	<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
		<div style="margin-bottom: 20px" class="col-xs-6 col-sm-6 col-lg-6">
			<img width="35%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/tres_septimos.png" />
		</div>
		<div style="margin-bottom: 20px" class="col-xs-6 col-sm-6 col-lg-6">
			<img id="veintiuno" width="35%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/veintiuno.png" />
			<div class="btn-group" id="opciones">
				<button onclick="disminuir_15()" type="button" class="btn btn-warning"><</button>
				<button onclick="incrementar_15()" type="button" class="btn btn-warning">></button>
			</div>
		</div>
	</div>
	<div>
		<h3 style="display: inline"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>7</mn></mfrac></math></h3><h3 id="desigualdad" style="display: inline"> > </h3><h3 id="fraccion" style="display: inline"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>21</mn></mfrac></math></h3></p>
		<button onclick="verificar_15()" type="button" class="btn btn-success">Verificar</button>
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
