<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/trigonometria/problemas/problemas_trig.js"></script>
<div class="container-fluid">
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<p>Estudia los ejercicios que estan a continuacion. Completa los datos que se le pidan para poder seguir avanzado.</p>
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<p><b>6. Al viajar por una carretera horizontal, te das cuenta de que al levantar la vista para ver la cima de una montaña cercana se forma un ángulo de 3.5° con respecto al piso. Al avanzar otros 13 kilómetros, el ángulo de elevación a la cima de la montaña es de 9°. ¿Cuál es la altura de la montaña?
			</b></p>
			<p>En la figura, A es el primer punto de observación, D es el segundo punto de observación y B es la cima de la montaña</p>
			<p>C es el punto, a nivel del piso que está exactamente debajo de la cima de la montaña. Observa que este punto es inaccesible.</p>
			<p>Llamemos h a la altura de la montaña y x a la distancia de D a C.</p>
			<p>En el triangulo ACB tenemos que</p>
			<div style="text-align:center;" id="triangulo">
				<select onclick="acierto(<?php echo $paginador['actual']; ?>)" class="form-control" id="angulo" style="width:137px" disabled>
					<option value="0">Tangente</option>
				</select>
			</div>
			<div id="tangente">
				<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>tan</mi><mo>&#xA0;</mo><mn>3</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>h</mi><mrow><mi>x</mi><mo>+</mo><mn>13</mn></mrow></mfrac></math></p>
			</div>
		</div>	
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<br />
			<br />
			<br />
			<img class="img-responsive" width="90%" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/trigonometria/problemas/diapositiva_29.png" align="center"/>
		</div>
	</div>
	<p>Evalua la tangente usando una calculadora</p>
		<p>(*) <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4"/><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>h</mi><mrow><mi>x</mi><mo>+</mo><mn>13</mn></mrow></mfrac></math></p>
</div>
