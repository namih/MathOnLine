<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
	<p>¿Cuántos miligramos administra una enfermera que utilizó 5 mililitros de agua en la mezcla?</p>
	<p>Recordemos que:</p>
	<p>Para 160 mg deben utilizarse 2 ml de agua</p>
	<p>Ahora completa:</p>
	<p>Para <input type="text" style="text-align: center" id="1" size="4" /> mg deben utilizarse 1 ml de agua</p>
	<p>Para <input type="text" style="text-align: center" id="2" size="4" /> mg deben utilizarse 5 ml de agua</p>
	<p>¿Por qué número debes multiplicar el número de mililitros (5 ml) para obtener la cantidad de medicamento? <input type="text" style="text-align: center" id="3" size="4" /></p>
	<p>¿Cuántos miligramos de medicina debe de haber <b>por cada mililitro</b> de agua? <input type="text" style="text-align: center" id="4" size="4" /> mg</p>
	<p>Este número, corresponde a un mililitro de agua. se llama <b>valor unitario</b>.</p>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>