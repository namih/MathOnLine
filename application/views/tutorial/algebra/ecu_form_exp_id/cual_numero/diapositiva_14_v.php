<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/cual_numero.js"></script>

<div class="container-fluid">
	<p align="justify">¿Cuál es el número Z que al restarle <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>4</mn></mfrac></math> da como resultado <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>4</mn></mfrac></math>?</p>
	<table>
		<tr>
			<td><h2>Z&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2></td>
			<td><h2>-&nbsp;&nbsp;&nbsp;&nbsp;</h2></td>
			<td><h2><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>4</mn></mfrac></math>&nbsp;&nbsp;&nbsp;&nbsp;</h2></td>
			<td><h2>=&nbsp;&nbsp;&nbsp;&nbsp;</h2></td>
			<td><h2><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>4</mn></mfrac></math></h2></td>
		</tr>
		<tr>
			<td><h2><input placeholder="Z" style="text-align: center" onchange="validar_14()" size="1" type="text" id="incognita"></h2></td>
			<td><h2>-</h2></td>
			<td><h2><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>4</mn></mfrac></math></h2></td>
			<td><h2>=</h2></td>
			<td><h2><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>9</mn><mn>4</mn></mfrac></math></h2></td>
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