<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/sucesiones/sucesiones.js"></script>
<div class="container-fluid">
	<div id="ejercicio1">
		<p>Una sucesión es una secuencia de números organizados de tal manera que cada uno de ellos se calcula a partir del anterior, siguiendo una regla específica.</p>
		<p>Intenta averiguar cuáles son los siguientes 3 términos de esta sucesión:</p>
		<p>10, 100, 1000, <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" />, 
			<input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="4" />, 
			<input onblur="acierto(<?php echo $paginador['actual']; ?>)" type="text" style="text-align: center" id="3" size="4" /></p>
		<input type="button" class="btn btn-success btn-sm" value="Más ejercicios" onclick="mostrar()" ><br /><br />
	</div>
	<div id="ejercicio2" style='display:none;'>
		<p>Una sucesión es una secuencia de números organizados de tal manera que cada uno de ellos se calcula a partir del anterior, siguiendo una regla específica.</p>
		<p>Intenta averiguar cuáles son los siguientes 3 términos de esta sucesión:</p>
		<p>6, 11, 16, <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="4" size="4" />, 
			<input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="5" size="4" />, 
			<input onblur="acierto(<?php echo $paginador['actual']; ?>)" type="text" style="text-align: center" id="6" size="4" /></p>
		<input type="button" class="btn btn-success btn-sm" value="Más ejercicios" onclick="mostrar1()" ><br /><br />
	</div>
	<div id="ejercicio3" style='display:none;'>
		<p>Una sucesión es una secuencia de números organizados de tal manera que cada uno de ellos se calcula a partir del anterior, siguiendo una regla específica.</p>
		<p>Intenta averiguar cuáles son los siguientes 3 términos de esta sucesión:</p>
		<p>1, 8, 27, <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="7" size="4" />, 
			<input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="8" size="4" />, 
			<input onblur="acierto(<?php echo $paginador['actual']; ?>)" type="text" style="text-align: center" id="9" size="4" /></p>
		<br /><br />
	</div>
	<div id="correcta" style="display: none" class="alert alert-success">
	 	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
	</div>
</div>
