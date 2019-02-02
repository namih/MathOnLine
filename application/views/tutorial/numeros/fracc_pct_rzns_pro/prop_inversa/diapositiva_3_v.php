<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_inversa.js"></script>
<div class="container-fluid">
		<p>Recuerda el problema inicial en el que los dos pintores tardaban 4 dias en pintar un muro de 120 <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>m</mi><mn>2</mn></msup></math>. En esta situación, 4 pintores tardarian, en pintar la misma superficie, 2 dias. Esto quiere decir, que al aumentar al doble el número de pintores, el número de dias:</p>
		<form method="post" action="#">
			<table>
				<td align="left">
					<input type="checkbox" id="1" /> Aumenta el doble<br />
					<input type="checkbox" id="2" /> Disminuye a la mitad<br />
					<input type="checkbox" id="3" /> Aumenta al triple<br /><br />
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