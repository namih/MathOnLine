<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_inversa.js"></script>
<div class="container-fluid">
	<p>Dos albañiles construyen un muro de 12 <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>m</mi><mn>2</mn></msup></math> en 2 horas. ¿Cuántos albañiles se necesitan para construir la misma superficie en una hora?</p>
	<form method="post" action="#">
		<table>
			<td align="left">
				<input type="checkbox" id="1" /> 2 albañiles<br />
				<input type="checkbox" id="2" /> 1 albañil<br />
				<input type="checkbox" id="3" /> 4 albañiles<br /><br />
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
