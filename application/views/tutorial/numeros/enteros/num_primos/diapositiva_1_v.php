 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/primos/diapositiva_1.js"></script>
<div class="container-fluid" id="div_1" style="display: block">
	<div>
		<p>Los multiplos de un número se obtienen multiplicando dicho número por un entero</p>
		<p>Escribe 5 multiplos de 7:</p>
	</div>
	<input  type="text"  id="1" value=""/>
	<input  type="text"  id="2" value=""/>
	<input  type="text"  id="3" value=""/>
	<input  type="text"  id="4" value=""/>
	<input  type="text"  id="5" value=""/>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="Verificar" />
	<input type="button" class="btn btn-success btn-sm" onclick="ejercicio2();" value="Más ejercicios" />
</div>
<div class="container-fluid" id="div_2" style="display: none">
	<div>
		<p>Los multiplos de un número se obtienen multiplicando dicho número por un entero</p>
		<p>Escribe 5 multiplos de 2:</p>
	</div>
	<input  type="text"  id="21" value=""/>
	<input  type="text"  id="22" value=""/>
	<input  type="text"  id="23" value=""/>
	<input  type="text"  id="24" value=""/>
	<input  type="text"  id="25" value=""/>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar2();" value="Verificar" />
	<input type="button" class="btn btn-success btn-sm" onclick="ejercicio3();" value="Más ejercicios" />
</div>
<div class="container-fluid" id="div_3" style="display: none">
	<div>
		<p>Los multiplos de un número se obtienen multiplicando dicho número por un entero</p>
		<p>Escribe 5 multiplos de 12:</p>
	</div>
	<input  type="text"  id="31" value=""/>
	<input  type="text"  id="32" value=""/>
	<input  type="text"  id="33" value=""/>
	<input  type="text"  id="34" value=""/>
	<input  type="text"  id="35" value=""/>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar3();" value="Verificar" />
</div>
<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
</div> 
