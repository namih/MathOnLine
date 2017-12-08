<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/int_ecu_cuad_pt1.js"></script>

<div class="container-fluid">
	<p align="justify">Encuentra el valor o los valores de x en la siguiente ecuación cuadrática (deja las raíces indicadas cuando no sean enteras):</p>
	<h3><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>=</mo><mfrac><mn>1</mn><mn>2</mn></mfrac></math></h3>
	<h3><math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>x</mi><mn>1</mn></msub><mo>=</mo><mi>
		<semantics>
	  		<annotation-xml encoding="application/xhtml+xml">
	  			<input placeholder="a/b" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="1" id="valor_1" />
	  		</annotation-xml>
	  	</semantics>
	</mi><mo>,</mo><mo>&#xA0;</mo><msub><mi>x</mi><mn>2</mn></msub><mo>=</mo><mi>
		<semantics>
	  		<annotation-xml encoding="application/xhtml+xml">
	  			<input placeholder="a/b" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="1" id="valor_2" />
	  		</annotation-xml>
	  	</semantics>
	</mi></math></h3>
	<div class="form-check">
		<label class="form-check-label">
			<input type="checkbox" class="form-check-input" id="raiz">
			Raíz no entera
		</label>
	</div>
	<button onclick="validar_41()" type="button" class="btn btn-success">Verificar</button>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>