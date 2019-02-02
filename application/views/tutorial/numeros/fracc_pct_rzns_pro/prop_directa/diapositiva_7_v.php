<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
	<p>¿Qué sucede con la cantidad de agua que debe utilizar la enfermera a medida que la cantidad necesaria de medicamento en polvo <b>aumenta</b>?</p>
	<form method="post" action="#">
			<table>
				<td align="left">
					<input type="checkbox" id="1" /> Aumenta de la misma manera<br />
					<input type="checkbox" id="2" /> Disminuye de la misma manera<br />
					<input type="checkbox" id="3" /> Se queda igual<br /><br />
				</td>
			</table>
	</form>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>