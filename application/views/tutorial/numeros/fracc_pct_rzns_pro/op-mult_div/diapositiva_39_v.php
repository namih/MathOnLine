 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-mult_div.js"></script>

<div class="container-fluid">
	
	<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<p align="justify"> Tengo <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>24</mn></math> centímetros de tela y quiero cortarla en tiras de <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math> centímetro de ancho. ¿Cuantas tiras voy a obtener?. Utiliza las flechas para dividir la tela en muchos trozos del mismo tamaño.</p>
			<img id="telar" width="60%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/telar_1_100.png"/>
			<br />
			<h4 id="tira">Número de tiras: <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn></math></h4>
			<div class="btn-group">
				<button onclick="incrementar_39 ()" type="button" class="btn btn-info">+</button>
				<button onclick="decrementar_39 ()" type="button" class="btn btn-info">-</button>
			</div>
		</div>
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<p align="left">¿Qué sucede a medida que disminuye el tamaño de los trozos?</p>
			<form >
				<div id="r1_a" align="justify" class="checkbox"> 
					<label><input onclick="respuesta_39_a ()" type="checkbox" value="1">Aumenta el número de trozos</label>
				</div>
			
				<div id="r2_a" align="justify" class="checkbox"> 
					<label><input onclick="respuesta_39_a ()"  type="checkbox" value="2">Disminuye el número de trozos</label>
				</div>
			</form>	
		</div>
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<p align="left">¿Qué sucede a medida que aumenta el tamaño de los trozos?</p>
			<form >
				<div id="r1_b" align="justify" class="checkbox"> 
					<label><input onclick="respuesta_39_b ()" type="checkbox" value="1">Aumenta el número de trozos</label>
				</div>
			
				<div id="r2_b" align="justify" class="checkbox"> 
					<label><input onclick="respuesta_39_b ()"  type="checkbox" value="2">Disminuye el número de trozos</label>
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