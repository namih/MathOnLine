<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/int_ecu_cuad_pt1.js"></script>

<div class="container-fluid">
	<p align="justify">Escribe los valores de a, b y c para la siguiente ecuación cuadrática:</p>
	<h3><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mn>0</mn><mi>x</mi><mo>+</mo><mn>8</mn><mo>=</mo><mn>0</mn></math></h3>
	<h3><input placeholder="a" style="text-align: center" onchange="validar_12()" size="1" type="text" id="factor_a"> <input placeholder="b" style="text-align: center" onchange="validar_12()" size="1" type="text" id="factor_b"> <input placeholder="c" style="text-align: center" onchange="validar_12()" size="1" type="text" id="factor_c"></h3>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>