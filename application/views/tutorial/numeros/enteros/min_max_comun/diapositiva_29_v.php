<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_15.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid" id="div_1" style="display: block">
	<p>Encuentra el número que al multiplicarse por si mismo 3 veces de 64.</p>
	<input class="input-sm input-top5" size="5"  type="text" id="1"/>
	<br />
	<label>Comprueba el resultado: </label><input class="input-sm input-top5" size="2"  type="text" id="2"/> <label><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xD7;</mo></math></label><input class="input-sm input-top5" size="2"  type="text" id="3"/><label><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xD7;</mo></math></label><input class="input-sm input-top5" size="2"  type="text" id="4"/>  <label> = </label><input class="input-sm input-top5" size="2"  type="text" id="5"/>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar29();" value="Verificar" />
	<input type="button" class="btn btn-success btn-sm" onclick="ejercicio2();" value="Más ejercicios" />
	<br />

</div>
<div class="container-fluid" id="div_2" style="display: none">
	<p>Encuentra el número que al multiplicarse por si mismo 3 veces de 125.</p>
	<input class="input-sm input-top5" size="5" type="text" id="6"/>
	<br />
	<label>Comprueba el resultado: </label><input class="input-sm input-top5" size="2" type="text" id="7"/> <label><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xD7;</mo></math></label><input class="input-sm input-top5" size="2" type="text" id="8"/><label> <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xD7;</mo></math> </label><input class="input-sm input-top5" size="2" type="text" id="9"/>  <label> = </label><input class="input-sm input-top5" size="2" type="text" id="10"/>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar29_1();" value="Verificar" />
	<input type="button" class="btn btn-success btn-sm" onclick="ejercicio3();" value="Más ejercicios" />
	<br />

</div>
<div class="container-fluid" id="div_3" style="display: none">
	<p>Encuentra el número que al multiplicarse por si mismo 3 veces de 27.</p>
	<input class="input-sm input-top5" size="5" type="text" id="11"/>
	<br />
	<label>Comprueba el resultado: </label><input class="input-sm input-top5" size="2" type="text" id="12"/> <label><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xD7;</mo></math></label><input class="input-sm input-top5" size="2" type="text" id="13"/><label> <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xD7;</mo></math></label><input class="input-sm input-top5" size="2" type="text" id="14"/>  <label> = </label><input class="input-sm input-top5" size="2" type="text" id="15"/>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar29_2();" value="Verificar" />
	<br />

</div>
<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
</div> 