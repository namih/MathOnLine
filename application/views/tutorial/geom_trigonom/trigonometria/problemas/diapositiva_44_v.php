<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/trigonometria/problemas/problemas_trig.js"></script>
<div class="container-fluid">
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<p>Estudia los ejercicios que están a continuación. Completa los datos que se te piden para poder seguir avanzado.</p>
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<p><b>7. Las curvas en las carreteras deben estar peraltadas para evitar que los coches derrapen. El ángulo de 
				peralte depende de la velocidad de los vehículos que circulen en esa curva. La fórmula siguiente relaciona el 
				ángulo de peralte , la velocidad v (en metros sobre segundos), el radio de la curva r (en metros) y g = 
				9.8 <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi></math>/<math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>s</mi><mn>2</mn></msup></math>, 
				que es la constante gravitacional.
			</b></p>
			<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi><mi>a</mi><mi>n</mi><mo>&#xA0;</mo><mi>&#x3B8;</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><msup><mi>v</mi><mn>2</mn></msup><mrow><mi>r</mi><mi>g</mi></mrow></mfrac></math></p>
			<p><b>Si una curva de una carretera está peraltada 10° y el radio de la curva es de 1.7 km, ¿para qué velocidad está diseñada la curva?</b></p>
			<p>Conocemos <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&#x3B8;</mi><mo>=</mo><mn>10</mn><mo>,</mo><mo>&#xA0;</mo><mi>r</mi><mo>=</mo><mn>1700</mn><mi>m</mi></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>g</mi><mo>=</mo><mn>9</mn><mo>.</mo><mn>8</mn><mi>m</mi><mo>/</mo><msup><mi>s</mi><mn>2</mn></msup></math>, sustituyéndolos en la ecuación anterior.</p>
			<p>Haz las operaciones pertinentes y escribe los valores correctos en los cuadros de texto.</p>
			<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi><mi>a</mi><mi>n</mi><mo>&#xA0;</mo><mn>10°</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><msup><mi>v</mi><mn>2</mn></msup><mrow><mo>(</mo><mn>1700</mn><mo>)</mo><mo>(</mo><mn>9</mn><mo>.</mo><mn>8</mn><mo>)</mo></mrow></mfrac></math></p>
			<p><input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" placeholder="0.1763" disabled/>
				<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><msup><mi>v</mi><mn>2</mn></msup><mi>
				<semantics>
				  	<annotation-xml encoding="application/xhtml+xml">
				  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="2" placeholder="16660" disabled/>
					</annotation-xml>
				</semantics>
				</mi></mfrac></math>
			</p>
		</div>	
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<br />
			<br />
			<br />
			<img class="img-responsive" width="90%" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/trigonometria/problemas/diapositiva_41_2.png" align="center"/>
		</div>
	</div>
	<div>
		<p>Despejamos <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>v</mi></math> y efectuamos las operaciones indicadas: 
			<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>v</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><msqrt><mo>(</mo><mn>0</mn><mo>.</mo><mn>1763</mn><mo>)</mo><mo>(</mo><mn>16660</mn><mo>)</mo></msqrt><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math>
			<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="3" placeholder="54.1955" disabled/>
			<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xA0;</mo><mi>m</mi><mo>/</mo><mi>s</mi></math>
		</p>
		<p>Si queremos la velocidad en Km/h, multiplicamos por 3.6:</p>
		<p>(Utiliza 4 números después del punto decimal)</p> 
		<p> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>v</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math>
			<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="5" id="4" />
		</p>
	</div>
	<div id="correcta" style="display: none" class="alert alert-success">
	 	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	</div>
</div>
