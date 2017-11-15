<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt2.js"></script>

<div class="container-fluid">
	<p align="justify">Compras un artículo cuyo precio, con IVA, es de $125.00 ¿Cuál es el precio del artículo sin IVA? Supongamos que el IVA es del 16%</p>
	<p align="justify">Utiliza la siguiente relación de proporcionalidad. Observa que, si asignamos el precio original un valor del 100%, el precio ya con IVA contituye el 16%:</p>
	<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
		<table>
		  <tr>
		    <td align="center">X</td>
		    <td>--------></td> 
		    <td>100%</td>
		  </tr>
		  <tr>
		    <td>$125.00</td>
		    <td>--------></td> 
		    <td align="center">116%</td>
		  </tr>
		</table>
	</div>
	
	<p align="justify">¿Cuál es el valor de x? <input onchange="validar_19_a()" style="text-align: center" size="5" type="text" id="cien_porciento"></p>
	<p align="justify">Resta el precio del artículo sin IVA al total para obtener lo que se paga de IVA <input onchange="validar_19_b()" style="text-align: center" size="5" type="text" id="total"></p>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>