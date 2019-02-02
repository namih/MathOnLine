<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
	<p>¿Cuántas onzas de leche pueden prepararse con 6 medidas de polvo? ¿Y si son 20 medidas?</p>
	<p>Con 4 1/2 medidas de polvo de fórmula se preparan 9 onzas de leche</p>
	<p>Con 6 medidas de polvo se preparan <input type="text" style="text-align: center" id="1" size="4" /> onzas de leche.</p>
	<p>Con 20 medidas de polvo se preparan <input type="text" style="text-align: center" id="2" size="4" /> onzas de leche.</p>
	<p>¿Por qué número debes multiplicar la cantidad de medidas de polvo para obtener el número de onzas de leche? 
		<input type="text" style="text-align: center" id="3" size="4" /></p><br />
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>