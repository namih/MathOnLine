<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt2.js"></script>

<div class="container-fluid">
	<p align="justify">Observa que, para encontrar la población del país, después de los 40 años, es posible obtener el 300% de la cantidad original de habitantes (el aumento) y sumarla a este número.</p>
	<p align="justify">Puedes encontrar el 300% utilizando una regla de tres, sabiendo que 520,000 equivale al 100%.</p>
	<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
		<table>
		  <tr>
		    <td align="center">520,000</td>
		    <td>--------></td> 
		    <td>100%</td>
		  </tr>
		  <tr>
		    <td align="center">X</td>
		    <td>--------></td> 
		    <td> 300%</td>
		  </tr>
		</table>
	</div>
	
	<p align="justify">El 300% de 520,000 es: <input onchange="validar_11_a()" style="text-align: center" size="10" type="text" id="poblacion_veces"></p>
	<p align="justify">La población al final de los 40 años es: <input onchange="validar_11_b()" style="text-align: center" size="10" type="text" id="poblacion_cantidad"></p>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>