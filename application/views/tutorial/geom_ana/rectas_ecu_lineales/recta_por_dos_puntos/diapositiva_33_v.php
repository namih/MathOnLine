<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
 <script type="text/javascript" src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.css">

<script type="text/javascript" charset="utf-8">
	var applet0 = new GGBApplet({filename: base_url+"statics/ggb/tutorial/geom_ana/rectas_ecu_lineales/recta_por_dos_puntos/diapositiva_33.ggb","showToolbar":false, height: 300	}, true);
	window.addEventListener("load", function() { applet0.inject('applet_container0'); });
</script>


<div class="container-fluid">
 
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
				<div class="pregunta">
				</div>
				<div class="instruccion">
				</div>
				<div class="row">
					<div align="left"><p><label>Ejemplo 3</label></p></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
							<div class="pregunta paso_0">
								<p><b>¿Cómo es la ecuación de una recta que no pasa por el origen?</b></p>
							</div><br>
							<div class="paso_1">
								<p>Por ejemplo la recta que pasa por los puntos <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>Q</mi><mo>(</mo><mo>&#xA0;</mo><mn>3</mn><mo>,</mo><mn>3</mn><mo>&#xA0;</mo><mo>)</mo></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xA0;</mo><mi>R</mi><mo>(</mo><mo>&#xA0;</mo><mn>5</mn><mo>,</mo><mn>6</mn><mo>&#xA0;</mo><mo>)</mo></math></p>
							</div><br>
							<div class="paso_2">
								<p>Tomemos un punto <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi><mo>(</mo><mo>&#xA0;</mo><mi>x</mi><mo>,</mo><mi>y</mi><mo>&#xA0;</mo><mo>)</mo></math> cualquiera sobre la recta. Arrastra P y observa cómo cambian sus coordenadas. <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi><mo>(</mo><mo>&#xA0;</mo><mn>5</mn><mo>,</mo><mo>&#xA0;</mo><mn>6</mn><mo>&#xA0;</mo><mo>)</mo></math></p>
							</div><br>
							<div class="paso_3">
								<p>Observa que se forman dos triángulos semejantes <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>R</mi><mi>Q</mi><msub><mi>R</mi><mn>1</mn></msub><mo>&#xA0;</mo></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi><mi>Q</mi><msub><mi>P</mi><mn>1</mn></msub><mo>&#xA0;</mo></math></p>
							</div><br>
							<div class="paso_4">
								<p>Arrastra el punto magenta que está sobre <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>R</mi><mn>1</mn></msub><mo>&#xA0;</mo></math>, colócalo sobre el eje X. ¿Cuánto mide la base del triángulo <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>R</mi><mi>Q</mi><msub><mi>R</mi><mn>1</mn></msub><mo>&#xA0;</mo></math>? <input type="number" id="base_t" onkeypress="return validarSoloNumero(event,'base_t');" onchange="validaInputRelacion('2','base_t','');"  xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" size="5" value="2" readonly="readonly" disabled="disabled"></p>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_base_t">
								</div>
							</div><br>
							<div class="paso_5">
								<p>Ahora arrastra el punto azul que está sobre <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>R</mi><mn>1</mn></msub><mo>&#xA0;</mo></math>, y colócalo sobre el eje Y. ¿Cuánto mide la altura del triángulo <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>R</mi><mi>Q</mi><msub><mi>R</mi><mn>1</mn></msub><mo>&#xA0;</mo></math>? <input type="number" id="altura_t" onchange="validaInputRelacion('3','altura_t','');" onkeypress="return validarSoloNumero(event);" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" size="5" readonly="readonly" disabled="disabled" value="3"></p>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left" id="error_altura_t">
								</div>
							</div><br>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="center" style="border: 1px solid;">
							<div style="display: block" align="center" class="col-xs-12 col-sm-12 col-lg-12" id="applet_container0"></div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left">
							<div class="paso_6">
								<p>El cociente de los catetos del triángulo <math xmlns="http://www.w3.org/1998/Math/MathML"><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mfrac mathcolor="#191919"><mrow><mn mathcolor="#0000FF">6</mn><mo mathcolor="#0000FF">-</mo><mn mathcolor="#0000FF">3</mn></mrow><mrow><mn mathcolor="#FF00FF">5</mn><mo mathcolor="#FF00FF">-</mo><mn mathcolor="#FF00FF">3</mn></mrow></mfrac><mo mathcolor="#191919">=</mo><mfrac mathcolor="#191919"><mn mathcolor="#0000FF">3</mn><mn mathcolor="#FF00FF">2</mn></mfrac><mo mathcolor="#191919">=</mo><mn mathcolor="#191919">1</mn><mo mathcolor="#191919">.</mo><mn mathcolor="#191919">5</mn><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo></math> <br> Este cociente es la pendiente de la recta.</p>
								<p>La pendiente nos indica qué tan inclinada está la recta.</p>
							</div><br>
						</div>
					</div>					
				</div><br>
			</div><br><br>
		</div>
	</div>
	<br><br>
  </div>
