<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
	<p>En el cunero del hospital, las enfermeras deben preparar leche a base de fórmula para los bebés. Por cada 9 onzas 
		de agua esterilizada deben añadir 4 1/2 medidas de polvo de fórmula.</p>
	<p>Si se necesitan 3 onzas de leche para bebé, ¡cuántas medidas de formula se deben utilizar?
		<input type="text" style="text-align: center" id="1" size="4" /></p>
	<p>¿Y si son 12 onzas? <input type="text" style="text-align: center" id="2" size="4" /></p>
	<p>¿Y si son 1.5 onzas? <input type="text" style="text-align: center" id="3" size="4" /></p><br />
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>