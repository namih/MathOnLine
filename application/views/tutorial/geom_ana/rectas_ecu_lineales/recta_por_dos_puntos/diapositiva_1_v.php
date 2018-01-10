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
			<p>	En este tutorial aprenderás cómo encontrar la ecuación de la recta que pasa por dos puntos.
			<br>
			Lee con atención cada paso de las explicaciones y dedícale suficiente tiempo a los ejercicios hasta que domines el tema.<br></p>
		</div>
		<div id="boxEjemplos_1">
			<div id="box_1_ejemplo_0">
				<div class="pregunta"><p>¿Cómo es Ia ecuación de una recta que no pasa por el origen?</p>
				</div>
				<div class="instruccion">
				</div>
				<div class="row">
					<div align="left"><p><label>Ejemplo</label></p></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
							<div class="paso_0">
								<p></p>
							</div><br>
							<div class="paso_1">
								<p>Por ejemplo la recta que pasa por los puntos <mn>1</mn><mo>,</mo><mn>2</mn><mo>&#xA0;</mo><mo>)</mo></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xA0;</mo><mi>R</mi><mo>(</mo><mo>&#xA0;</mo><mn>4</mn><mo>,</mo><mn>6</mn><mo>&#xA0;</mo><mo>)</mo></math></p>
							</div><br>
							<div class="paso_2">
								<p>Tomemos un punto <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi><mo>(</mo><mo>&#xA0;</mo><mi>x</mi><mo>,</mo><mi>y</mi><mo>&#xA0;</mo><mo>)</mo></math> cualquiera sobre la recta. Arrastra P y observa cómo cambian sus coordenadas. <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi><mo>(</mo><mo>&#xA0;</mo><mn>5</mn><mo>,</mo><mo>&#xA0;</mo><mn>7</mn><mo>.</mo><mn>33</mn><mo>&#xA0;</mo><mo>)</mo></math></p>
							</div><br>
							<div class="paso_3">
								<p>Observa que se forman dos triángulos semejantes <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>R</mi><mi>Q</mi><msub><mi>R</mi><mn>1</mn></msub><mo>&#xA0;</mo></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi><mi>Q</mi><msub><mi>P</mi><mn>1</mn></msub><mo>&#xA0;</mo></math></p>

							</div><br>
							<div class="paso_4">
								<p>Arrastra el punto magenta que está sobre <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>R</mi><mn>1</mn></msub><mo>&#xA0;</mo></math>, colócalo sobre el eje X. ¿Cuánto mide la base del triángulo <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>R</mi><mi>Q</mi><msub><mi>R</mi><mn>1</mn></msub><mo>&#xA0;</mo></math>?</p>
								<p><input type="number" id="base_t"></p>
							</div><br>
							<div class="paso_5">
								<p>Ahora arrastra el punto azul que está sobre <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>R</mi><mn>1</mn></msub><mo>&#xA0;</mo></math>, y colócalo sobre el eje Y. ¿Cuánto mide la altura del triángulo <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>R</mi><mi>Q</mi><msub><mi>R</mi><mn>1</mn></msub><mo>&#xA0;</mo></math>?</p>
								<p><input type="number" id="altura_t"></p>
							</div><br>
							<div class="paso_6">
								<p>El cociente de los catetos del triángulo <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>R</mi><mi>Q</mi><msub><mi>R</mi><mn>1</mn></msub><mo>&#xA0;</mo></math>? es <br> <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>-</mo><mn>2</mn></mrow><mrow><mn>4</mn><mo>-</mo><mn>1</mn></mrow></mfrac><mo>=</mo><mfrac><mn>4</mn><mn>3</mn></mfrac><mo>=</mo><mn>1</mn><mo>.</mo><mn>33</mn></math> <br> Este cociente es la pendiente de la recta.</p>
								<p>La pendiente nos indica qué tan inclinada está la recta.</p>
							</div><br>
							<div class="paso_7">
								<p>Arrastra el punto naranja que está sobre el punto <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>P</mi><mn>1</mn></msub><mo>&#xA0;</mo></math>, colócalo sobre el eje X.</p>
								<p>La base del triángulo <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi><mi>Q</mi><msub><mi>P</mi><mn>1</mn></msub><mo>&#xA0;</mo></math> mide x-1</p>
							</div><br>
							<div class="paso_8">
								<p>Arrastra el punto morado que está sobre el punto <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>P</mi><mn>1</mn></msub><mo>&#xA0;</mo></math>, colócalo sobre el eje Y.</p>
								<p>La altura del triángulo <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi><mi>Q</mi><msub><mi>P</mi><mn>1</mn></msub><mo>&#xA0;</mo></math> mide y-2</p>
							</div><br>
							<div class="paso_9">
								<p>Al comparar los cocientes entre los catetos de los triángulos semejantes <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>R</mi><mi>P</mi><msub><mi>R</mi><mn>1</mn></msub><mo>&#xA0;</mo></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi><mi>Q</mi><msub><mi>P</mi><mn>1</mn></msub><mo>&#xA0;</mo></math> obtenemos <br> <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mi>y</mi><mo>-</mo><mn>2</mn></mrow><mrow><mi>x</mi><mo>-</mo><mn>1</mn></mrow></mfrac><mo>=</mo><mfrac><mrow><mn>6</mn><mo>-</mo><mn>2</mn></mrow><mrow><mn>4</mn><mo>-</mo><mn>1</mn></mrow></mfrac></math> </p>
							</div><br>
							<div class="paso_10">
								<p>Comprueba que los cocientes son iguales para todo punto en la recta arrastrando el punto P <br> <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>7</mn><mo>.</mo><mn>33</mn><mo>-</mo><mn>2</mn></mrow><mrow><mn>5</mn><mo>-</mo><mn>1</mn></mrow></mfrac><mo>=</mo><mfrac><mrow><mn>5</mn><mo>.</mo><mn>33</mn></mrow><mn>4</mn></mfrac><mo>=</mo><mn>1</mn><mo>.</mo><mn>33</mn><mo>=</mo><mfrac><mn>4</mn><mn>3</mn></mfrac><mo>=</mo><mfrac><mrow><mn>6</mn><mo>-</mo><mn>2</mn></mrow><mrow><mn>4</mn><mo>-</mo><mn>1</mn></mrow></mfrac></math> </p>
							</div><br>
							<div class="paso_11">
								<p>Tenemos que <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>6</mn><mo>-</mo><mn>2</mn></mrow><mrow><mn>4</mn><mo>-</mo><mn>1</mn></mrow></mfrac><mo>=</mo><mfrac><mn>4</mn><mn>3</mn></mfrac></math> es la <b>pendiente</b> de la recta y se denota generalmente (pero no necesariamente) con una <b>m</b>. </p>
								<p>La pendiente nos dice qué tan inclinada está la recta.</p>
							</div><br>
							<div class="paso_12">
								<p>Si en <br> <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mi>y</mi><mo>-</mo><mn>2</mn></mrow><mrow><mi>x</mi><mo>-</mo><mn>1</mn></mrow></mfrac><mo>=</mo><mfrac><mrow><mn>6</mn><mo>-</mo><mn>2</mn></mrow><mrow><mn>4</mn><mo>-</mo><mn>1</mn></mrow></mfrac><mo>=</mo><mfrac><mn>4</mn><mn>3</mn></mfrac></math> <br> despejamos y, obtenemos: <br> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>-</mo><mn>2</mn><mo>=</mo><mfrac><mn>4</mn><mn>3</mn></mfrac><mo>(</mo><mi>x</mi><mo>-</mo><mn>1</mn><mo>)</mo></math> <br> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo><mfrac><mn>4</mn><mn>3</mn></mfrac><mo>(</mo><mi>x</mi><mo>-</mo><mn>1</mn><mo>)</mo><mo>+</mo><mn>2</mn></math><br> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo><mfrac><mn>4</mn><mn>3</mn></mfrac><mi>x</mi><mo>-</mo><mfrac><mn>4</mn><mn>3</mn></mfrac><mo>+</mo><mn>2</mn></math> <br> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo><mfrac><mn>4</mn><mn>3</mn></mfrac><mi>x</mi><mo>+</mo><mfrac><mn>2</mn><mn>3</mn></mfrac></math> </p>
								<p>Ésta es la ecuación de la recta que pasa por los puntos <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>Q</mi><mo>(</mo><mo>&#xA0;</mo><mn>1</mn><mo>,</mo><mn>2</mn><mo>&#xA0;</mo><mo>)</mo></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>R</mi><mo>(</mo><mo>&#xA0;</mo><mn>4</mn><mo>,</mo><mn>6</mn><mo>&#xA0;</mo><mo>)</mo></math>.</p>
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
