<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt2.js"></script>

<div class="container-fluid">
	<p align="justify">En Autralia la población de aborígenes es de aproximadamente 410,000. ¿Qué porcentaje representa de la población total australiana, que es de de unos 22 millones? ¿A qué fracción equivale?</p>
	<p align="justify">Para resolver el problema, planteamos la siguiente relación de proporcionalidad. Puedes utilizar la regla de tres.</p>
	<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
		<table>
		  <tr>
		    <td align="center">22,000,000</td>
		    <td>--------></td> 
		    <td>100%</td>
		  </tr>
		  <tr>
		    <td>410,000</td>
		    <td>--------></td> 
		    <td align="center">X%</td>
		  </tr>
		</table>
	</div>
	
	<p align="justify">410,000 representa el <input onchange="validar_14()" style="text-align: center" size="5" type="text" id="porcentaje">% de la población australiana.</p>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>