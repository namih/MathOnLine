<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_15.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid" id="div_1" style="display: block">
	<p>Encuentra el número que al multiplicarse por si mismo de 49.</p>
	<input type="text" id="1"/>
	<br /><br /><br /> 
	<label>Comprueba el resultado: </label><input type="text" id="2" readonly=""/> <label> X </label><input type="text" id="3" readonly/> <label> = </label><input type="text" id="4" readonly/>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar28();" value="Verificar" />
		<input type="button" class="btn btn-success btn-sm" onclick="ejercicio2();" value="Más ejercicios" />
	<br />
</div>
<div class="container-fluid" id="div_2" style="display: none">
	<p>Encuentra el número que al multiplicarse por si mismo de 144.</p>
	<input type="text" id="5"/>
	<br /><br /><br /> 
	<label>Comprueba el resultado: </label><input type="text" id="6" readonly=""/> <label> X </label><input type="text" id="7" readonly/> <label> = </label><input type="text" id="8" readonly/>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar28_1();" value="Verificar" />
		<input type="button" class="btn btn-success btn-sm" onclick="ejercicio3();" value="Más ejercicios" />
	<br />
</div>
<div class="container-fluid" id="div_3" style="display: none">
	<p>Encuentra el número que al multiplicarse por si mismo de 36.</p>
	<input type="text" id="9"/>
	<br /><br /><br /> 
	<label>Comprueba el resultado: </label><input type="text" id="10" readonly=""/> <label> X </label><input type="text" id="11" readonly/> <label> = </label><input type="text" id="12" readonly/>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar28_2();" value="Verificar" />
	<br />
</div>
<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
</div> 