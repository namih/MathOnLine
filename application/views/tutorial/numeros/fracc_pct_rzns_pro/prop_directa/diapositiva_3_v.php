<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
	<p>Veamos otro caso. ¿Qué sucede si la enfermera debe administrar la cuarta parte de medicamento en polvo?</p>
	<p>Para 160 mg deben utilizarse 2 ml de agua</p>
	<p>Para 40 mg deben utilizarse <input type="text" style="text-align: center" id="1" size="4" /> ml de agua</p>
	<p>Observa que si se administra <b>la cuarta parte</b> de medicamento en polvo, se necesita <b>la cuarta parte</b> de mililitros de agua.</p>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>