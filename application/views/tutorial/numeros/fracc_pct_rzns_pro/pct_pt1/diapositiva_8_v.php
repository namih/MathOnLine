<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt1.js"></script>

<div class="container-fluid">
	<p align="justify">Escribe la fracción como porcentaje. Para ello, utiliza las flechas parar encontrar una fracción equivalente a la fracción dada, con denominador 100. Observa como cambia la representación gráfica. Si no recuerda lo que es una fracción equivalente, consulta el tutorial de Equivalencia.</p>
	<br />
	<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
		<h3 id="fraccion"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>=</mo><mfrac><mn>1</mn><mn>2</mn></mfrac></math></h3>
		<div class="btn-group" id="opciones">
			<button onclick="disminuir_8()" type="button" class="btn btn-info"><</button>
			<button onclick="incrementar_8()" type="button" class="btn btn-info">></button>
		</div>
		<br />
		<br />
		<img id="player_a" width="50%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/percent_1_2.png" />
	</div>
	<div>
	  <h3 id="resultado" align="justify"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mo>?</mo><mn>100</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>?</mo><mo>&#xA0;</mo><mo>%</mo></math> <input placeholder="?" style="text-align: center" onchange="validar_8()" size="5" type="text" id="porcentaje"></h3>
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