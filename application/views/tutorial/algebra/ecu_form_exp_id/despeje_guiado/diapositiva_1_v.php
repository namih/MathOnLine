<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/despeje_guiado.js"></script>

<div class="container-fluid">
	<p align="justify">Sigue las indicaciones para encontrar el valor de X</p>
	<div class="col-xs-12 col-sm-12 col-lg-12">
		<div class="panel panel-success  col-xs-12 col-sm-12 col-lg-6">
			<div class="panel-heading"><b>Instrucciones</b></div>
			<div class="panel-body">
				<div style="margin-bottom: 10px" class="btn-group btn-group-lg">
					<button id="division" onclick="change_1_a()" type="button" class="btn btn-primary">&divide;</button>
					<button id="multiplication" type="button" class="btn btn-primary">&times;</button>
					<button id="subtraction" type="button" class="btn btn-primary">-</button>
					<button id="sum" type="button" class="btn btn-primary">+</button>
				</div>
				<h4 id="instruction">Divide ambos lados de la ecuación entre 8</h4>
				<table>
					<tr>
						<td><h1>*&nbsp;&nbsp;</h1></td>
						<td><input /></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="panel panel-success  col-xs-12 col-sm-12 col-lg-6">
			<div class="panel-heading"><b>Visualizador</b></div>
			<div class="panel-body">
				<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>8</mn><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>48</mn></math></p>
			</div>
		</div>
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