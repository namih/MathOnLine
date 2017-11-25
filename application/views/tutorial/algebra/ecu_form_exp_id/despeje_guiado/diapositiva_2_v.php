<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/despeje_guiado.js"></script>

<div class="container-fluid">
	<p align="justify">Sigue las indicaciones para encontrar el valor de X</p>
	<div class="col-xs-12 col-sm-12 col-lg-12">
		<div class="panel panel-primary  col-xs-12 col-sm-12 col-lg-6">
			<div class="panel-heading"><b>Instrucciones</b></div>
			<div class="panel-body">
				<h4 id="instruction">Dividir ambos lados entre 8</h4>
				<div class="form-group">
					<select class="form-control-inline" id="sel1">
						<option>&divide;</option>
						<option>&times;</option>
						<option>-</option>
						<option>+</option>
					</select>
					<input style="text-align: center" type="text" class="form-control-inline" id="usr">
				</div>
				<button type="button" class="btn btn-success">Aplicar</button>
			</div>
		</div>
		<div class="panel panel-primary  col-xs-12 col-sm-12 col-lg-6">
			<div class="panel-heading"><b>Secuencia</b></div>
			<div id="secuencia" class="panel-body">
				<h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>8</mn><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>48</mn></math></h4>
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