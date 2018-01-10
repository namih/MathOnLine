<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/rectas_ecu_lineales/rectas_ecu_lineales.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet0 = new GGBApplet({filename: base_url+"statics/example.ggb","showToolbar":false, height: 300	}, true);
	window.addEventListener("load", function() { applet0.inject('applet_container0'); });
</script>

<div class="container-fluid">
	<style type="text/css">
		.tema{
			color: #224EB5;
			text-align: justify;
			font-weight: bold;
		}
		.pregunta{
			color: #2e75b6;
			text-align: justify;
			font-weight: bold;
		}
		.instruccion{
			color: #000000;
			text-align: justify;
			font-weight: normal;
		}
	</style>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
		<div class="tema"><p>La recta - Recta que pasa por dos puntos.</p>
		</div>
		<div class="instruccion">
			<p></p>
		</div>
		<div id="boxEjemplos_1">
			<div id="box_1_ejemplo_0">
				<div class="pregunta"><p></p>
				</div>
				<div class="instruccion">
				<p></p>
				</div>
				<div class="row">
					<div align="left"><p><label></label></p></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
							<div class="paso_0">
								<p>Veamos otro ejemplo de recta que NO pasa por el origen. </p>
							</div><br>
							<div class="paso_1">
								<p>Tomemos como ejemplo la recta que pasa por los puntos <br> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>Q</mi><mo>(</mo><mo>&#xA0;</mo><mn>4</mn><mo>,</mo><mo>&#xA0;</mo><mn>2</mn><mo>&#xA0;</mo><mo>)</mo></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>R</mi><mo>(</mo><mo>&#xA0;</mo><mn>2</mn><mo>,</mo><mo>&#xA0;</mo><mn>6</mn><mo>&#xA0;</mo><mo>)</mo></math> </p>
							</div><br>
							<div class="paso_2">
								<p>Y consideremos el punto <br> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi><mo>(</mo><mo>&#xA0;</mo><mn>x</mn><mo>,</mo><mo>&#xA0;</mo><mn>y</mn><mo>&#xA0;</mo><mo>)</mo></math> sobre la recta</p>
								<p>Arrastra P y observa como cambian sus coordenadas <br> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi><mo>(</mo><mo>&#xA0;</mo><mn>5</mn><mo>,</mo><mo>&#xA0;</mo><mn>0</mn><mo>&#xA0;</mo><mo>)</mo></math> sobre la recta</p>
							</div><br>
							<div class="paso_3">
								<p>Nuevamente observamos que se forman dos triángulos semejantes <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>R</mi><mi>Q</mi><msub><mi>R</mi><mn>1</mn></msub></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi><mi>Q</mi><msub><mi>P</mi><mn>1</mn></msub></math></p>
							</div><br>
							<div class="paso_4">
								<p>Como en la lección anterior, restamos las coordenadas de R menos las coordenadas de Q, ambas en el mismo orden y hacemos el cociente <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mi>D</mi><mi>i</mi><mi>f</mi><mi>e</mi><mi>r</mi><mi>e</mi><mi>n</mi><mi>c</mi><mi>i</mi><mi>a</mi><mo>&#xA0;</mo><mi>d</mi><mi>e</mi><mo>&#xA0;</mo><mi>c</mi><mi>o</mi><mi>o</mi><mi>r</mi><mi>d</mi><mi>e</mi><mi>n</mi><mi>a</mi><mi>d</mi><mi>a</mi><mi>s</mi><mo>&#xA0;</mo><mi>y</mi></mrow><mrow><mi>D</mi><mi>i</mi><mi>f</mi><mi>e</mi><mi>r</mi><mi>e</mi><mi>n</mi><mi>c</mi><mi>i</mi><mi>a</mi><mo>&#xA0;</mo><mi>d</mi><mi>e</mi><mo>&#xA0;</mo><mi>c</mi><mi>o</mi><mi>o</mi><mi>r</mi><mi>d</mi><mi>e</mi><mi>n</mi><mi>a</mi><mi>d</mi><mi>a</mi><mi>s</mi><mo>&#xA0;</mo><mi>x</mi></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mfrac><mrow><mn>6</mn><mo>-</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>-</mo><mn>4</mn></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mfrac><mn>4</mn><mrow><mo>-</mo><mn>2</mn></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>-</mo><mfrac><mn>4</mn><mn>2</mn></mfrac></math></p>
							</div><br>
							<div class="paso_5">
								<p>Observa que el 4 y el 2 siguen siendo las longitudes del cateto vertical y del cateto horizontal del triángulo <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>R</mi><mi>Q</mi><msub><mi>R</mi><mn>1</mn></msub></math>, el signo (-) en el <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>-</mo><mfrac><mn>4</mn><mn>2</mn></mfrac></math> indica que la recta va de bajada conforme se recorre de izquierda a derecha.</p>
							</div><br>
							<div class="paso_6">
								<p>Este cociente es la pendiente de la recta.</p>
							</div><br>
							<div class="paso_7">
								<p>Si se resta la primera coordenada de P menos la primera coordenada de Q, en ese orden se obtiene: <input type="number"> </p>
							</div><br>
							<div class="paso_8">
								<p>Si se resta la segunda coordenada de P menos la segunda coordenada de Q, en ese orden se obtiene: <input type="number"> </p>
							</div><br>
							<div class="paso_9">
								<p>Comparamos los cocientes de las diferencias de coordenadas con los triángulos <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>R</mi><mi>Q</mi><mi>R</mi></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi><mi>Q</mi><mi>P</mi></math> </p>
								<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mi>D</mi><mi>i</mi><mi>f</mi><mi>e</mi><mi>r</mi><mi>e</mi><mi>n</mi><mi>c</mi><mi>i</mi><mi>a</mi><mo>&#xA0;</mo><mi>d</mi><mi>e</mi><mo>&#xA0;</mo><mi>c</mi><mi>o</mi><mi>o</mi><mi>r</mi><mi>d</mi><mi>e</mi><mi>n</mi><mi>a</mi><mi>d</mi><mi>a</mi><mi>s</mi><mo>&#xA0;</mo><mi>y</mi></mrow><mrow><mi>D</mi><mi>i</mi><mi>f</mi><mi>e</mi><mi>r</mi><mi>e</mi><mi>n</mi><mi>c</mi><mi>i</mi><mi>a</mi><mo>&#xA0;</mo><mi>d</mi><mi>e</mi><mo>&#xA0;</mo><mi>c</mi><mi>o</mi><mi>o</mi><mi>r</mi><mi>d</mi><mi>e</mi><mi>n</mi><mi>a</mi><mi>d</mi><mi>a</mi><mi>s</mi><mo>&#xA0;</mo><mi>x</mi></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mfrac><mrow><mi>y</mi><mo>-</mo><mn>2</mn></mrow><mrow><mi>x</mi><mo>-</mo><mn>4</mn></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mfrac><mrow><mn>6</mn><mo>-</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>-</mo><mn>4</mn></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>-</mo><mfrac><mn>4</mn><mn>2</mn></mfrac></math></p>
							</div><br>
							<div class="paso_10">
								<p>Comprueba que los cocientes son iguales para todo punto en la recta arrastrando el punto P </p>
								<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>0</mn><mo>-</mo><mn>2</mn></mrow><mrow><mn>5</mn><mo>-</mo><mn>4</mn></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mfrac><mrow><mo>-</mo><mn>2</mn></mrow><mn>1</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>-</mo><mn>2</mn><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mfrac><mn>4</mn><mrow><mo>-</mo><mn>2</mn></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>6</mn><mo>-</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>-</mo><mn>4</mn></mrow></mfrac></math></p>
							</div><br>
							<div class="paso_11">
								<p>Tenemos que <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2009;</mo><mfrac><mrow><mn>6</mn><mo>-</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>-</mo><mn>4</mn></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>-</mo><mfrac><mn>4</mn><mn>2</mn></mfrac></math> es la <b>pendiente</b> de la recta y se denota generalmente (pero no necesariamente) con una <b>m</b>. </p>
								<p>La pendiente nos dice qué tan inclinada está la recta. El signo nos indica si la recta va hacia arriba (+) o hacia abajo (-) conforme nos movemos en ella de izquierda a derecha.</p>
							</div><br>
							<div class="paso_12">
								<p>Si en <br> <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mi>y</mi><mo>-</mo><mn>2</mn></mrow><mrow><mi>x</mi><mo>-</mo><mn>4</mn></mrow></mfrac><mo>=</mo><mfrac><mrow><mn>6</mn><mo>-</mo><mn>2</mn></mrow><mrow><mn>2</mn><mo>-</mo><mn>4</mn></mrow></mfrac><mo>=</mo><mo>-</mo><mfrac><mn>4</mn><mn>2</mn></mfrac></math> <br> despejamos y, obtenemos: <br> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>-</mo><mn>2</mn><mo>=</mo><mo>-</mo><mfrac><mn>4</mn><mn>2</mn></mfrac><mo>(</mo><mi>x</mi><mo>-</mo><mn>4</mn><mo>)</mo></math> <br> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo><mo>-</mo><mfrac><mn>4</mn><mn>2</mn></mfrac><mo>(</mo><mi>x</mi><mo>-</mo><mn>4</mn><mo>)</mo><mo>+</mo><mn>2</mn></math><br> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo><mo>-</mo><mfrac><mn>4</mn><mn>2</mn></mfrac><mi>x</mi><mo>+</mo><mfrac><mn>16</mn><mn>2</mn></mfrac><mo>+</mo><mn>2</mn></math> <br> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo><mo>-</mo><mfrac><mn>4</mn><mn>2</mn></mfrac><mi>x</mi><mo>-</mo><mfrac><mn>20</mn><mn>2</mn></mfrac></math> </p>
								<p>Ésta es la ecuación de la recta que pasa por los puntos <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>Q</mi><mo>(</mo><mo>&#xA0;</mo><mn>4</mn><mo>,</mo><mn>2</mn><mo>&#xA0;</mo><mo>)</mo></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>R</mi><mo>(</mo><mo>&#xA0;</mo><mn>2</mn><mo>,</mo><mn>6</mn><mo>&#xA0;</mo><mo>)</mo></math>.</p>
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