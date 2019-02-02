<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
	<p>Una enfermera debe dar a un paciente un medicamento que debe mezclarse con agua para poderse tomar. El instructivo dice que el contenido en polvo del sobre, que contiene 160 mg, debe mezclarse con 2 ml de agua. Si un paciente necesita 200 mg del antibiótico, ¿qué cantidad de agua necesita agregar?</p>
	<p>Para resolver el problema, veamos un ejemplo más sencillo. Supongamos que lo que desea administrar al paciente es <b>la mitad</b> de medicamento en polvo, es decir 80 mg de medicamento. ¿Cuánta agua se debe utilizar en la mezcla?</p>
	<p>Para 160 mg deben utilizarse 2 ml de agua</p>
	<p>Para 80 mg deben utilizarse <input type="text" style="text-align: center" id="1" size="4" /> ml de agua</p>
	<p>Observa que si se administra <b>la mitad</b> de medicamento en polvo, se necesita <b>la mitad</b> de mililitros de agua</p>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>