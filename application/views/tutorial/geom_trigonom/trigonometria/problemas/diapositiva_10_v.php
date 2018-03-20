<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/trigonometria/problemas/problemas_trig.js"></script>
<div class="container-fluid">
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<p>Estudia los ejercicios que estan a continuacion. Completa los datos que se le pidan para poder seguir avanzado.</p>
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<p><b>2. Los aviones comerciales vuelan a una altitud aproximada de 10 km. Los pilotos inician su descenso al aeropuerto cuando están bastante lejos para que el ángulo de depresión no sea demasiado grande. Si el piloto quiere que el angulo de depresion sea de 3° con respecto al suelo, ¿a que distancia horizontal del aeropuerto debe iniciar su descenso?</b></p>
			<p>En el triángulo ABC conocemos el ángulo A = 3° y el cateto opuesto a el: a=10. Buscamos su cateto adyacente.</p>
			<p>¿Qué función trigonométrica relaciona el cateto opuesto y el cateto adyacente?</p>
			<div style="text-align:center;" id="triangulo">
				<select class="form-control" id="angulo" style="width:137px" disabled>
					<option value="0">Tangente</option>
				</select>
			</div>
			<div id="tangente">
				<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>tan</mi><mo>&#xA0;</mo><mn>3</mn><mo>&#xBA;</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mi>C</mi><mi>a</mi><mi>t</mi><mi>e</mi><mi>t</mi><mi>o</mi><mo>&#xA0;</mo><mi>o</mi><mi>p</mi><mi>u</mi><mi>e</mi><mi>s</mi><mi>t</mi><mi>o</mi></mrow><mrow><mi>C</mi><mi>a</mi><mi>t</mi><mi>e</mi><mi>t</mi><mi>o</mi><mo>&#xA0;</mo><mi>a</mi><mi>d</mi><mi>y</mi><mi>a</mi><mi>c</mi><mi>e</mi><mi>n</mi><mi>t</mi><mi>e</mi></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>10</mn><mi>b</mi></mfrac></math></p>
			</div>
			<p>Despejamos <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi></math></p>
			<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>10</mn><mrow><mi>tan</mi><mo>&#xA0;</mo><mn>3</mn><mo>&#xB0;</mo></mrow></mfrac></math></p>
		</div>	
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<br />
			<br />
			<br />
			<div id="imagen">
				<img class="img-responsive" width="100%" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/trigonometria/problemas/diapositiva_6.png" align="center"/>
			</div>
			<div style='display:none;' id="imagen2">
				<img class="img-responsive" width="100%" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/trigonometria/problemas/diapositiva_10.png" align="center"/>
			</div>
		</div>
	</div>
	<p>Evaluamos la tangente de 3° usando una calculadora, teniendo cuidado que esté tabajando en grados y no en radianes.</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>b</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>10</mn><mi>
			<semantics>
				  <annotation-xml encoding="application/xhtml+xml">
				  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="1" />
				  </annotation-xml>
			</semantics>
			</mi></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="4" /></p>
	<div id="resultado" style='display:none;'>
		<p>Así que el avión empieza a descender cuando está a 190.81 km del aeropuerto.</p>
	</div>
	<div id="correcta" style="display: none" class="alert alert-success">
	 	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	</div>
</div>
