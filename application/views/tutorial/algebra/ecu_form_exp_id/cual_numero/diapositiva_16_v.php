<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/cual_numero.js"></script>

<div class="container-fluid">
	<p align="justify">¿Cuál es el número X que al multiplicarle 4 da como resultado -12?</p>
	<table>
		<tr>
			<td><h2>X&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2></td>
			<td><h2>x&nbsp;&nbsp;&nbsp;&nbsp;</h2></td>
			<td><h2>4&nbsp;&nbsp;&nbsp;&nbsp;</h2></td>
			<td><h2>=&nbsp;&nbsp;&nbsp;&nbsp;</h2></td>
			<td><h2>-12</h2></td>
		</tr>
		<tr>
			<td><h2><input placeholder="X" style="text-align: center" onchange="validar_16()" size="1" type="text" id="incognita"></h2></td>
			<td><h2>x</h2></td>
			<td><h2>4</h2></td>
			<td><h2>=</h2></td>
			<td><h2>-12</h2></td>
		</tr>
	</table>
	<div align="right">
		<button disabled="disabled" type="button" class="btn btn-primary">Otro ejercicio</button>
	</div>	
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>