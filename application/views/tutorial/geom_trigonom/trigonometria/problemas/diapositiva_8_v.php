<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/trigonometria/problemas/problemas_trig.js"></script>
<div class="container-fluid">
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<p>Estudia los ejercicios que están a continuación. Completa los datos que se te piden para poder seguir avanzado.</p>
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<p><b>2. Los aviones comerciales vuelan a una altitud aproximada de 10 km. Los pilotos inician su descenso al aeropuerto cuando están bastante lejos para que el ángulo de depresión no sea demasiado grande. Si el piloto quiere que el angulo de depresion sea de 3° con respecto al suelo, ¿a qué distancia horizontal del aeropuerto debe iniciar su descenso?</b></p>
			<p>En el triángulo ABC conocemos la medida del ángulo A = 3° y la longitud del cateto opuesto a él, a = 10. Buscamos la longitud del cateto adyacente.</p>
			<p>¿Qué función trigonométrica relaciona el cateto opuesto y el cateto adyacente en un triángulo rectángulo?</p>
			<div style="text-align:center;" id="triangulo">
				<select onclick="acierto(<?php echo $paginador['actual']; ?>)" class="form-control" id="angulo" style="width:137px">
					<option value="0"></option>
					<option value="1">Seno</option>
					<option value="2">Coseno</option>
					<option value="3">Tangente</option>
				</select>
			</div>
			<div id="tangente" style='display:none;'>
				<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi><mi>a</mi><mi>n</mi><mo>&#xA0;</mo><mn>3</mn><mo>°</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mi>C</mi><mi>a</mi><mi>t</mi><mi>e</mi><mi>t</mi><mi>o</mi><mo>&#xA0;</mo><mi>o</mi><mi>p</mi><mi>u</mi><mi>e</mi><mi>s</mi><mi>t</mi><mi>o</mi></mrow><mrow><mi>C</mi><mi>a</mi><mi>t</mi><mi>e</mi><mi>t</mi><mi>o</mi><mo>&#xA0;</mo><mi>a</mi><mi>d</mi><mi>y</mi><mi>a</mi><mi>c</mi><mi>e</mi><mi>n</mi><mi>t</mi><mi>e</mi></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>10</mn><mi>b</mi></mfrac></math></p>
			</div>
		</div>	
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<br />
			<br />
			<br />
			<img class="img-responsive" width="100%" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/trigonometria/problemas/diapositiva_6.png" align="center"/>
		</div>
	</div>
</div>
