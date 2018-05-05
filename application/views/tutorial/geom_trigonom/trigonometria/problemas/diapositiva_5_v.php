<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/trigonometria/problemas/problemas_trig.js"></script>
<div class="container-fluid">
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<p>Estudia los ejercicios que están a continuación. Completa los datos que se te piden para poder seguir avanzado.</p>
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<p><b>1. Una escalera mide 5.20 metros. Recargada en la pared, forma una ángulo de 65° con el piso. ¿Cuál es la distancia vertical del piso a la parte más alta de la escalera?</b></p>
			<p>En el triángulo ABC conocemos la medida del ángulo A = 65° y la longitud de la hipotenusa. Buscamos la longitud del cateto opuesto al ángulo A</p>
			<p>¿Qué función trigonométrica relaciona el cateto opuesto y la hipotenusa en un triángulo rectángulo?</p>
			<div style="text-align:center;" id="triangulo">
				<select class="form-control" id="angulo" style="width:137px" disabled>
					<option value="0">Seno</option>
				</select>
			</div>
			<div id="seno">
				<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>s</mi><mi>e</mi><mi>n</mi><mo>&#xA0;</mo><mn>65</mn><mo>&#xBA;</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mi>C</mi><mi>a</mi><mi>t</mi><mi>e</mi><mi>t</mi><mi>o</mi><mo>&#xA0;</mo><mi>o</mi><mi>p</mi><mi>u</mi><mi>e</mi><mi>s</mi><mi>t</mi><mi>o</mi></mrow><mrow><mi>H</mi><mi>i</mi><mi>p</mi><mi>o</mi><mi>t</mi><mi>e</mi><mi>n</mi><mi>u</mi><mi>s</mi><mi>a</mi></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>a</mi><mrow><mn>5</mn><mo>.</mo><mn>2</mn></mrow></mfrac></math></p>
			</div>
			<br />
			<p>Despejamos <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi></math></p>
			<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>(</mo><mn>5</mn><mo>.</mo><mn>2</mn><mo>)</mo><mo>&#xA0;</mo><mi>s</mi><mi>e</mi><mi>n</mi><mo>&#xA0;</mo><mn>65</mn><mo>&#xB0;</mo></math></p>
		</div>	
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<div id="imagen">
				<img class="img-responsive" width="33%" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/trigonometria/problemas/diapositiva_1.png" align="center"/>
			</div>
			<div style='display:none;' id="imagen2">
				<img class="img-responsive" width="39%" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/trigonometria/problemas/diapositiva_5.png" align="center"/>
			</div>
		</div>
		
	</div>
	<p>Evaluamos el seno de 65° usando una calculadora, teniendo cuidado que esté trabajando en grados y no en radianes. (Utiliza 4 decimales de precisión)</p>
	<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>(</mo><mn>5</mn><mo>.</mo><mn>2</mn><mo>)</mo><mo>&#xA0;</mo><mo>(</mo></math>
		<input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" /><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>)</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math>
		<input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="4" /></p>
	<div id="resultado" style='display:none;'>
		<p>Asi que la escalera alcanzara una altura de 4.7127 metros.</p>
	</div>
	
</div>
