<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/trigonometria/problemas/problemas_trig.js"></script>
<div class="container-fluid">
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<p>Estudia los ejercicios que están a continuación. Completa los datos que se te piden para poder seguir avanzado.</p>
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<p><b>3. Un submarino desciende desde la superficie del mar formando un ángulo de 18° con respecto a ella. Si avanza 500 metros en línea recta, ¿cuál será su profundidad?</b></p>
			<p>En el triángulo ABC conocemos la medida del ángulo A = 18° y la longitud de la  hipotenusa. Buscamos la longitud del cateto opuesto a A.</p>
			<p>¿Qué función trigonométrica relaciona el cateto opuesto y la hipotenusa en un triángulo rectángulo?</p>
			<div style="text-align:center;" id="triangulo">
				<select class="form-control" id="angulo" style="width:137px" disabled>
					<option value="0">Seno</option>
				</select>
			</div>
			<div id="seno">
				<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>s</mi><mi>e</mi><mi>n</mi><mo>&#xA0;</mo><mn>18</mn><mo>&#xB0;</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mi>C</mi><mi>a</mi><mi>t</mi><mi>e</mi><mi>t</mi><mi>o</mi><mo>&#xA0;</mo><mi>o</mi><mi>p</mi><mi>u</mi><mi>e</mi><mi>s</mi><mi>t</mi><mi>o</mi></mrow><mrow><mi>H</mi><mi>i</mi><mi>p</mi><mi>o</mi><mi>t</mi><mi>e</mi><mi>n</mi><mi>u</mi><mi>s</mi><mi>a</mi></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>a</mi><mrow><mn>500</mn></mrow></mfrac></math></p>
			</div>
			<p>Despejamos <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi></math></p>
			<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>(</mo><mn>500</mn><mo>)</mo><mo>&#xA0;</mo><mi>s</mi><mi>e</mi><mi>n</mi><mo>&#xA0;</mo><mn>18</mn><mo>&#xB0;</mo></math></p>
		</div>	
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<br />
			<br />
			<br />
			<div id="imagen">
				<img class="img-responsive" width="90%" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/trigonometria/problemas/diapositiva_11.png" align="center"/>
			</div>
			<div style='display:none;' id="imagen2">
				<img class="img-responsive" width="100%" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/trigonometria/problemas/diapositiva_15.png" align="center"/>
			</div>
		</div>
	</div>
	<p>Evaluamos el seno de 18° usando una calculadora, teniendo cuidado que esté trabajando en grados y no en radianes. (Utiliza 4 decimales de precisión)</p>
	<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>(</mo><mn>500</mn><mo>)</mo><mo>&#xA0;</mo><mo>(</mo></math><input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" /><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>)</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="4" /></p>
	<div id="resultado" style='display:none;'>
		<p>Así que el submarino está a una profundidad de 154.51 metros.</p>
	</div>
	<div id="correcta" style="display: none" class="alert alert-success">
	 	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	</div>
</div>
