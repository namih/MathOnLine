<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
	<p>¡Cuántas medidas de polvo se necesitan si se utilizan 8 onzas de agua?</p>
	<p>Por cada 9 onzas de agua esterilizada deben añadir 4 1/2 de polvo de fórmula.</p>
	<p>Para 8 onzas de agua deben utilizarce <input type="text" style="text-align: center" id="1" size="4" /> medidas de polvo.</p>
	<p>Para contestar esta pregunta, puedes calcular primero la cantidad de polvo que se debe agregar <b>por cada onza</b> de 
		agua, es decir, calcular <b>el valor unitario</b>.<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>