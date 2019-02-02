<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_inversa.js"></script>
<div class="container-fluid">
	<p>Ahora pensemos en el número de metros cuadrados que pintan los pintores.</p>
	<p>Recordemos que 2 pinores pintaban en 4 dias un muro de 120 <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>m</mi><mn>2</mn></msup></math></p>
	<p>¿Cuántos metros cuadrados pueden pintar 4 pintores en el mismo tiempo, es decir, 4 dias? <input type="text" style="text-align: center" id="1" size="4" /></p>
	<p>¿Cuántos metros cuadrados pinta un pintor solo en 4 dias? <input type="text" style="text-align: center" id="2" size="4" /></p>
	<p>¿Y si son 8 pintores? <input type="text" style="text-align: center" id="3" size="4" /></p>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>