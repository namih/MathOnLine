<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/trigonometria/problemas/problemas_trig.js"></script>
<div class="container-fluid">
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<p>Estudia los ejercicios que están a continuación. Completa los datos que se te piden para poder seguir avanzado.</p>
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<p><b>6. Al viajar por una carretera horizontal, te das cuenta de que al levantar la vista para ver la cima de una montaña cercana se forma un ángulo de 3.5° con respecto al piso. Al avanzar otros 13 kilómetros, el ángulo de elevación a la cima de la montaña es de 9°. ¿Cuál es la altura de la montaña?
			</b></p>
			<p>En la figura, A es el primer punto de observación, D es el segundo punto de observación, el triángulo rosa representa la montaña en el que B es la cima, 
				C es el punto, a nivel del piso, que está exactamente debajo de la cima de la montaña.</p>
			<p>Llamemos h a la altura de la montaña y x a la distancia de D a C.</p>
			<p>En el triángulo ABC tenemos que la medida del ángulo A = 3.5°, conocemos la distancia de A a D que es 13k, la distancia de A a C que es 13 + x k, que corresponde al cateto adyacente, y buscamos la altura h, que corresponde a la hipotenusa. 
				¿Qué función trigonométrica relaciona el cateto adyacente y la hipotenusa en un triángulo rectángulo?</p>
			<div style="text-align:center;" id="triangulo_1">
				<select onclick="acierto(<?php echo $paginador['actual']; ?>)" class="form-control" id="angulo_1" style="width:137px" disabled>
					<option value="0">Tangente</option>
				</select>
			</div>
			<div id="tangente_1">
				<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi><mi>a</mi><mi>n</mi><mo>&#xA0;</mo><mn>3</mn><mo>.</mo><mn>5°</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>h</mi><mrow><mi>x</mi><mo>+</mo><mn>13</mn></mrow></mfrac></math></p>
			</div>
		</div>	
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<br />
			<br />
			<br />
			<img class="img-responsive" width="90%" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/trigonometria/problemas/diapositiva_29.png" align="center"/>
		</div>
	</div>
	<div>
		<p>Evaluamos la tangente:</p>
		<p>(*) <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" placeholder="0.0611" disabled/><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>h</mi><mrow><mi>x</mi><mo>+</mo><mn>13</mn></mrow></mfrac></math></p>
		<p>Ahora, en el triángulo DCB tenemos una situación similar.</p>
		<p>¿Qué función trigonométrica relaciona el cateto adyacente y la hipotenusa en un triángulo rectángulo? 
			<div style="text-align:center;" id="triangulo">
				<select onclick="acierto(<?php echo $paginador['actual']; ?>)" class="form-control" id="angulo" style="width:137px" disabled>
					<option value="3">Tangente</option>
				</select>
			</div>
			<div id="tangente">
				<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi><mi>a</mi><mi>n</mi><mo>&#xA0;</mo><mn>9°</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>h</mi><mi>x</mi></mfrac></math></p>
			</div>
		</p>
		<p>Evaluamos la tangente:</p>
		<p><input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="4" placeholder="0.1583" disabled/><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>h</mi><mrow><mi>x</mi></mrow></mfrac></math></p>
		<p>Despejamos a x: <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>h</mi><mrow><mn>0</mn><mo>.</mo><mn>15838</mn></mrow></mfrac><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo></math> y lo sustituimos en la ecuación (*)</p>
	</div>
</div>
