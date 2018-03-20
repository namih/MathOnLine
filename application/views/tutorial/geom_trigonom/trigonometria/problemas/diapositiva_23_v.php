<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/trigonometria/problemas/problemas_trig.js"></script>
<div class="container-fluid">
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<p>Estudia los ejercicios que estan a continuacion. Completa los datos que se le pidan para poder seguir avanzado.</p>
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<p><b>5. Al despegar, un avión forma un ángulo de elevación de 18° con respecto al piso. Si su velocidad es de 300 Km/h,
				 ¿cuál será la altitud del avión después de 1 minuto?, ¿cuánto tardará el avión en alcanzar una altitud de 3000 metros?
			</b></p>
			<p>Debemos encontrar la altura, a, del avión después de 1 minuto. Necesitamos calcular primero cuánto ha recorrido, c, en 1 minuto si va a 300 km/h.</p>
			<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math>
				<input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" placeholder="5" disabled/>
				<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xA0;</mo><mi>k</mi><mi>m</mi></math>
			</p>
			<p>En el triangulo ABC conocemos el ángulo a = 18° y la hipotenusa. Buscamos el cateto opuesto a A.</p>
			<p>¿Qué función trigonométrica relaciona el cateto opuesto y la hipotenusa?</p>
			<div style="text-align:center;" id="triangulo">
				<select onclick="acierto(<?php echo $paginador['actual']; ?>)" class="form-control" id="angulo" style="width:137px" disabled>
					<option value="0">Seno</option>
				</select>
			</div>
			<div id="seno">
				<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>s</mi><mi>e</mi><mi>n</mi><mo>&#xA0;</mo><mn>18</mn><mo>&#xB0;</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mi>C</mi><mi>a</mi><mi>t</mi><mi>e</mi><mi>t</mi><mi>o</mi><mo>&#xA0;</mo><mi>o</mi><mi>p</mi><mi>u</mi><mi>e</mi><mi>s</mi><mi>t</mi><mi>o</mi></mrow><mrow><mi>H</mi><mi>i</mi><mi>p</mi><mi>o</mi><mi>t</mi><mi>e</mi><mi>n</mi><mi>u</mi><mi>s</mi><mi>a</mi></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>a</mi><mrow><mn>5</mn></mrow></mfrac></math></p>
			</div>
			<p>Despejamos a</p>
			<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>(</mo><mn>5</mn><mo>)</mo><mo>&#xA0;</mo><mi>s</mi><mi>e</mi><mi>n</mi><mo>&#xA0;</mo><mn>18</mn><mo>&#xB0;</mo></math></p>
		</div>	
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<br />
			<br />
			<br />
			<img class="img-responsive" width="90%" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/trigonometria/problemas/diapositiva_21.png" align="center"/>
		</div>
	</div>
</div>
