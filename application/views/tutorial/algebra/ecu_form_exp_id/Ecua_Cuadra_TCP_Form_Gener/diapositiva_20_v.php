<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/ecua_cuadra_tcp_form_gener.js"></script>
<div class="container-fluid">
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>8</mn><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>16</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math></p>
    		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><msqrt><mn>1</mn></msqrt><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" id="1" size="4" /> &emsp;&emsp; &emsp;&emsp; <math xmlns="http://www.w3.org/1998/Math/MathML"><msqrt><mn>16</mn></msqrt><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" id="2" size="4" /></p>
		</div>	
		<div class="form-group has-feedback col-md-6  col-xs-12">
    		<p>En ocaciones, el lado izquierdo de la ecuación ya es un trinomio cuadrado perfecto.</p>
    		<p>Antes de empezar a completar el cuadrado, conviene verificar si la expresión dada se puede factorizar directamente en un binomio al cuadrado. Para esto, sacaremos la raíz cuadrada del coeficiente del término <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup></math> y la raíz cuadrada del término independiente.</p>
		</div>	
	</div>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>