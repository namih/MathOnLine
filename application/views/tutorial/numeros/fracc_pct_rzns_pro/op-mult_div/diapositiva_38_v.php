 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-mult_div.js"></script>

<div class="container-fluid">
	<p align="justify">Tengo <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>24</mn></math> centímetros de tela y quiero cortarla en tiras de <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math> centímetro de ancho. ¿Cuantas tiras voy a obtener?.</p>
	<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
		<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
			<h1><img width="50%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/telar_vacio.png"/> </h1>
		</div>
		
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<form >
				<div id="r1" align="justify" class="checkbox"> 
					<label><input onclick="respuesta_38 ()" type="checkbox" value="1">Más de 24 tiras</label>
				</div>
			
				<div id="r2" align="justify" class="checkbox"> 
					<label><input onclick="respuesta_38 ()"  type="checkbox" value="2">Menos de 24 tiras</label>
				</div>
			</form>	
		</div>
	</div>
</div>

<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> 
</div>