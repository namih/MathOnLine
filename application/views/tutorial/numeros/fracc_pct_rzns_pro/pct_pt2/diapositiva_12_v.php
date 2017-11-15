<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt2.js"></script>

<div class="container-fluid">
	<p align="justify">El precio de un artículo aumentó en un 150%. Si el precio original era de $12.00, ¿Cuál es el precio ahora?</p>
	<p align="justify">Completa la regla de tres y calcula el nuevo precio.</p>
	<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
		<table>
		  <tr>
		    <td align="center">$12.00</td>
		    <td>--------></td> 
		    <td>100%</td>
		  </tr>
		  <tr>
		    <td align="center">X</td>
		    <td>--------></td> 
		    <td><input onchange="validar_12_a()" style="text-align: center" size="5" type="text" id="regla"> %</td>
		  </tr>
		</table>
	</div>
	<p align="justify">Nuevo precio del artículo: <input placeholder="$0.00" onchange="validar_12_b()" style="text-align: center" size="5" type="text" id="total"></p>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>