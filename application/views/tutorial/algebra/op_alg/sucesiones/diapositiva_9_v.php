<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/sucesiones/sucesiones.js"></script>
<div class="container-fluid">
	<div>
		<p>Una sucesión es una secuencia de números organizados de tal manera que cada uno de ellos se calcula a partir del anterior, siguiendo una regla específica.</p>
		<p>Intenta averiguar cuales son los siguientes 3 términos de esta sucesión:</p>
		<p>90, 170, 240, <input type="text" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" />, <input type="text" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="4" />, <input onblur="acierto(<?php echo $paginador['actual']; ?>)" type="text" id="3" size="4" /></p>
	</div>
	<div id="correcta" style="display: none" class="alert alert-success">
	 	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	</div>
</div>