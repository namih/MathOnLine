<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/rectas_ecu_lineales/rectas_ecu_lineales.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet0 = new GGBApplet({filename: base_url+"statics/example.ggb","showToolbar":false, height: 300	}, true);
	window.addEventListener("load", function() { applet0.inject('applet_container0'); });
</script>

<div class="container-fluid">
 
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
		<div class="tema"><p>La recta - Recta que pasa por dos puntos.</p>
		</div>
		<div class="instruccion">
			<p>
			<br></p>
		</div>
		<div id="boxEjemplos_1">
			<div id="box_1_ejemplo_0">
				<div class="pregunta"><p></p>
				</div>
				<div class="instruccion">
				<p>Queremos ahora obtener la ecuación de cualquier recta.</p>
				</div>
				<div class="row">
					<div align="left"><p><label></label></p></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
							<div class="paso_0">
								<p>Supongamos que esta recta pasa por los puntos</p>
								<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>Q</mi><mo>(</mo><mo>&#xA0;</mo><msub><mi>x</mi><mn>1</mn></msub><mo>,</mo><mo>&#xA0;</mo><msub><mi>y</mi><mn>1</mn></msub><mo>&#xA0;</mo><mo>)</mo></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>R</mi><mo>(</mo><mo>&#xA0;</mo><msub><mi>x</mi><mn>2</mn></msub><mo>,</mo><mo>&#xA0;</mo><msub><mi>y</mi><mn>2</mn></msub><mo>&#xA0;</mo><mo>)</mo></math> </p>
								<p>Nota: Recuerda que escribimos subíndices cuando queremos denotar puntos particulares en la recta. </p>
							</div><br>
							<div class="paso_1">
								<p>Nuevamente observamos que se forman dos triángulos semejantes <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>R</mi><mi>Q</mi><msup><mi>R</mi><mo>'</mo></msup></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>Q</mi><mi>P</mi><msup><mi>Q</mi><mo>'</mo></msup></math></p>
								<p>Al comparar los cocientes entre los catetos tenemos: </p>
								<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mi>y</mi><mo>-</mo><msub><mi>y</mi><mn>1</mn></msub></mrow><mrow><mi>x</mi><mo>-</mo><msub><mi>x</mi><mn>1</mn></msub></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><msub><mi>y</mi><mn>2</mn></msub><mo>-</mo><msub><mi>y</mi><mn>1</mn></msub></mrow><mrow><msub><mi>x</mi><mn>2</mn></msub><mo>-</mo><msub><mi>x</mi><mn>1</mn></msub></mrow></mfrac></math></p>
							</div><br>
							<div class="paso_2">
								<p>Comprueba que los cocientes son iguales para todo punto en la recta arrastrando el punto P.</p>
								<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>.</mo><mn>5</mn><mo>-</mo><mn>2</mn></mrow><mrow><mn>10</mn><mo>-</mo><mn>1</mn></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>4</mn><mo>.</mo><mn>5</mn></mrow><mn>9</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn><mo>.</mo><mn>5</mn></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>-</mo><mn>2</mn></mrow><mrow><mn>5</mn><mo>-</mo><mn>1</mn></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>2</mn><mn>4</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>0</mn><mo>.</mo><mn>5</mn></math></p>
							</div><br>
							<div class="paso_3">
								<p>Tenemos que <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><msub><mi>y</mi><mn>2</mn></msub><mo>-</mo><msub><mi>y</mi><mn>1</mn></msub></mrow><mrow><msub><mi>x</mi><mn>2</mn></msub><mo>-</mo><msub><mi>x</mi><mn>1</mn></msub></mrow></mfrac></math> es la pendiente de la recta, recordemos que se denota generalmente (aunque no siempre) con la letra <b>m</b>. </p>
							</div><br>
							<div class="paso_4">
								<p>A partir de <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mi>y</mi><mo>-</mo><msub><mi>y</mi><mn>1</mn></msub></mrow><mrow><mi>x</mi><mo>-</mo><msub><mi>x</mi><mn>1</mn></msub></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mi>m</mi><mo>&#xA0;</mo></math> </p>
								<p>Obtenemos </p>
								<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>-</mo><msub><mi>y</mi><mn>1</mn></msub><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mi>m</mi><mo>(</mo><mo>&#xA0;</mo><mi>x</mi><mo>-</mo><msub><mi>x</mi><mn>1</mn></msub><mo>&#xA0;</mo><mo>)</mo></math></p>
								<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo><mi>m</mi><mi>x</mi><mo>-</mo><mi>m</mi><msub><mi>x</mi><mn>1</mn></msub><mo>+</mo><msub><mi>y</mi><mn>1</mn></msub></math></p>
								<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo><mi>m</mi><mi>x</mi><mo>+</mo><mo>(</mo><msub><mi>y</mi><mn>1</mn></msub><mo>-</mo><mi>m</mi><msub><mi>x</mi><mn>1</mn></msub><mo>)</mo></math></p>
								<p>que es la ecuación de la recta que pasa por los puntos <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>Q</mi><mo>(</mo><mo>&#xA0;</mo><msub><mi>x</mi><mn>1</mn></msub><mo>,</mo><mo>&#xA0;</mo><msub><mi>y</mi><mn>1</mn></msub><mo>&#xA0;</mo><mo>)</mo></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>R</mi><mo>(</mo><mo>&#xA0;</mo><msub><mi>x</mi><mn>2</mn></msub><mo>,</mo><mo>&#xA0;</mo><msub><mi>y</mi><mn>2</mn></msub><mo>&#xA0;</mo><mo>)</mo></math></p>
								<p>Observa que <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>(</mo><msub><mi>y</mi><mn>1</mn></msub><mo>-</mo><mi>m</mi><msub><mi>x</mi><mn>1</mn></msub><mo>)</mo></math> es constante, a este número se le suele denotar por <b>b</b>.</p>
							</div><br>
							<div class="paso_5">
								<p>También, como el triángulo <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>R</mi><mi>Q</mi><msup><mi>R</mi><mo>'</mo></msup></math> es un triángulo rectángulo. tenemos que </p>
								<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>tan</mi><mi>&#x3B1;</mi><mo>=</mo><mfrac><mrow><msub><mi>y</mi><mn>2</mn></msub><mo>-</mo><msub><mi>y</mi><mn>1</mn></msub></mrow><mrow><msub><mi>x</mi><mn>2</mn></msub><mo>-</mo><msub><mi>x</mi><mn>1</mn></msub></mrow></mfrac></math></p>
								<p>Como <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&#x3B1;</mi></math> también es el ángulo que forma la recta con el eje X, entonces tenemos que la pendiente es la tangente del ángulo que forma la recta con el eje de las absisas (X).</p>
							</div><br>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="center" style="border: 1px solid;">
							<div style="display: block" align="center" class="col-xs-12 col-sm-12 col-lg-12" id="applet_container0"></div>
						</div>
					</div>
				</div><br>
			</div><br><br>
		</div>
	</div>
	<br><br>
  </div>