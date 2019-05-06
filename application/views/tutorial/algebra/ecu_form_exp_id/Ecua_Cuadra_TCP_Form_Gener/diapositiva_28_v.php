<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/ecua_cuadra_tcp_form_gener.js"></script>
<div class="container-fluid">
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>4</mn><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>3</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn></math></p>
    		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>4</mn><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" id="1" size="4" /></p>
		</div>	
		<div class="form-group has-feedback col-md-6  col-xs-12">
    		<p>Resta en ambos lados 3 para escribir la ecuación de la forma <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>2</mn><mi>d</mi><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>-</mo><mo>&#xA0;</mo><mi>d</mi></math>.</p>
    		<p>Divide el coeficiente de <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>4</mn><mi>x</mi></math> entre <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn></math> para escribir la expresión de la ixquierda como <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>2</mn><mi>d</mi><mi>x</mi></math>. ¿Cuánto vale <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>d</mi></math>?</p>
    		<p>Suma <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>d</mi><mn>2</mn></msup></math> de ambos lados de la ecuación para que el lado izquierdo sea de la forma <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>2</mn><mi>d</mi><mi>x</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><msup><mi>d</mi><mn>2</mn></msup></math>.</p>
    		<p>Simplifica el lado derecho.</p>
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