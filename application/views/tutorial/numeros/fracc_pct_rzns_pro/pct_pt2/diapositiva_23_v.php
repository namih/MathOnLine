<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt2.js"></script>

<div class="container-fluid">
	<p align="justify">Completa el recibo de honorarios.</p>
		
	<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
		<table>
		  <tr>
		    <td>Honorarios </td>
		    <td align="right">$ <input style="text-align: right" size="10" type="text" id="honorarios"></td> 
		  </tr>
		  <tr>
		    <td>IVA (16% de honorarios): </td>
		    <td align="right">$ <input style="text-align: right" size="10" type="text" id="iva"></td> 
		  </tr>
		  <tr>
		    <td>Subtotal: </td>
		    <td align="right">$6,325.00</td> 
		  </tr>
		  <tr>
		    <td>Retención IVA (2/3 del IVA): </td>
		    <td align="right">$ <input style="text-align: right" size="10" type="text" id="retencion_iva"></td> 
		  </tr>
		  <tr>
		    <td>ISR (10% de honorarios): </td>
		    <td align="right">$ <input style="text-align: right" size="10" type="text" id="isr"></td> 
		  </tr>
		  <tr>
		    <td>Total: </td>
		    <td align="right">$ <input style="text-align: right" size="10" type="text" id="total"></td> 
		  </tr>
		</table>
	</div>
	<button onclick="validar_21()" type="button" class="btn btn-success">Validar</button>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>