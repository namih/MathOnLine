<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/trigonometria/problemas/problemas_trig.js"></script>
<div class="container-fluid">
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<p>Estudia los ejercicios que están a continuación. Completa los datos que se te piden para poder seguir avanzado.</p>
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<p><b>4. La gran Pirámide de Keops en Egipto tiene una base cuadrada que mide 230 m en cada uno de sus lados. Las caras triangulares de la pirámide forman un ángulo de 51° 50’ con respecto al piso horizontal. ¿Qué tan alta es la pirámide?</b></p>
			<p>El triángulo ABD representa uno de los lados triangulares de la pirámide. Debemos encontrar la distancia de la cúspide de la pirámide (B) a la base
				de la pirámide en línea vertical. Para ello, debemos calcular la distancia de B al punto medio C de la base AD. Al unir C con el vértice B, se forman dos triángulos rectángulos.</p>
			<p>En el triángulo ABC conocemos la medida del ángulo A = 51.83° (convirtiendo 50’ a decimales, 50/60 = 0.83333) y la longitud del cateto adyacente a él, b = 115, que es la mitad de la longitud de la base. Buscamos la longitud de su cateto opuesto.</p>
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
				<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi><mi>a</mi><mi>n</mi><mo>&#xA0;</mo><mn>51</mn><mo>.</mo><mn>83</mn><mo>&#xB0;</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo>
					<mfrac><mrow><mi>C</mi><mi>a</mi><mi>t</mi><mi>e</mi><mi>t</mi><mi>o</mi><mo>&#xA0;</mo><mi>o</mi><mi>p</mi><mi>u</mi><mi>e</mi><mi>s</mi><mi>t</mi><mi>o</mi></mrow>
					<mrow><mi>C</mi><mi>a</mi><mi>t</mi><mi>e</mi><mi>t</mi><mi>o</mi><mo>&#xA0;</mo><mi>a</mi><mi>d</mi><mi>y</mi><mi>a</mi><mi>c</mi><mi>e</mi><mi>n</mi><mi>t</mi><mi>e</mi></mrow></mfrac>
					<mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>a</mi><mn>115</mn></mfrac></math>
				</p>
			</div>
		</div>	
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<br />
			<img class="img-responsive" width="70%" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/trigonometria/problemas/diapositiva_16.png" align="center"/>
		</div>
	</div>
</div>
