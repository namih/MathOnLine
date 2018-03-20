<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/trigonometria/problemas/problemas_trig.js"></script>
<div class="container-fluid">
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<p>Estudia los ejercicios que estan a continuacion. Completa los datos que se le pidan para poder seguir avanzado.</p>
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<p><b>3. Un submarino desciende desde la superficie del mar formando un ángulo de 18° con respecto a ella. Si avanza 500 metros en línea recta, ¿cuál será su profundidad?</b></p>
			<p>En el triángulo ABC conocemos el ángulo A = 18°  y la hipotenusa. Buscamos el cateto opuesto a A.</p>
			<p>¿Qué función trigonométrica relaciona el cateto opuesto y la hipotenusa?</p>
			<div style="text-align:center;" id="triangulo">
				<select onclick="acierto(<?php echo $paginador['actual']; ?>)" class="form-control" id="angulo" style="width:137px">
					<option value="0"></option>
					<option value="1">Seno</option>
					<option value="2">Coseno</option>
					<option value="3">Tangente</option>
				</select>
			</div>
			<div id="seno" style='display:none;'>
				<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>s</mi><mi>e</mi><mi>n</mi><mo>&#xA0;</mo><mn>18</mn><mo>&#xB0;</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mi>C</mi><mi>a</mi><mi>t</mi><mi>e</mi><mi>t</mi><mi>o</mi><mo>&#xA0;</mo><mi>o</mi><mi>p</mi><mi>u</mi><mi>e</mi><mi>s</mi><mi>t</mi><mi>o</mi></mrow><mrow><mi>H</mi><mi>i</mi><mi>p</mi><mi>o</mi><mi>t</mi><mi>e</mi><mi>n</mi><mi>u</mi><mi>s</mi><mi>a</mi></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>a</mi><mrow><mn>500</mn></mrow></mfrac></math></p>
			</div>
		</div>	
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<br />
			<br />
			<br />
			<img class="img-responsive" width="90%" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/trigonometria/problemas/diapositiva_11.png" align="center"/>
		</div>
	</div>
</div>
