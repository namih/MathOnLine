<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/trigonometria/coseno/coseno.js"></script>
<div class="container-fluid">
	<div>
		<p>Cuando el ángulo θ sea de 45°, es decir, de <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi>&#x3C0;</mi><mn>4</mn></mfrac></math> radianes, 
			¿cuánto vale el coseno de θ en este caso?</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>cos</mi><mo>&#xA0;</mo><mfrac><mi>&#x3C0;</mi><mn>4</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mi>C</mi><mi>a</mi><mi>t</mi><mi>e</mi><mi>t</mi><mi>o</mi><mo>&#xA0;</mo><mi>a</mi><mi>d</mi><mi>y</mi><mi>a</mi><mi>c</mi><mi>e</mi><mi>n</mi><mi>t</mi><mi>e</mi></mrow><mrow><mi>H</mi><mi>i</mi><mi>p</mi><mi>o</mi><mi>t</mi><mi>e</mi><mi>n</mi><mi>u</mi><mi>s</mi><mi>a</mi></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>x</mi><mi>r</mi></mfrac></math></p>
		<p>Para encontrar el valor del cateto adyacente podemos utilizar el teorema de Pitágoras:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><msup><mi>y</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><msup><mi>r</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1</mn></math></p>
		<p>Debemos tomar en cuenta que el triángulo que se forma en este caso es isósceles, ya que sus dos ángulos agudos son de <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi>&#x3C0;</mi><mn>4</mn></mfrac></math> radianes.</p>
		<p>Esto quiere decir que <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mi>y</mi></math>, por lo tanto tenemos: <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><msup><mi>y</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>2</mn><msup><mi>x</mi><mn>2</mn></msup><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>1</mn></math></p>
		<p>Despeja para encontrar el valor de <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math>.</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>
			<semantics>
				<annotation-xml encoding="application/xhtml+xml">
					<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="1" />
				</annotation-xml>
			</semantics>
		</mi><mi>
			<semantics>
				<annotation-xml encoding="application/xhtml+xml">
					<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="2" />
				</annotation-xml>
			</semantics>
		</mi></mfrac></math></p>
	</div>
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	</div>
</div>
