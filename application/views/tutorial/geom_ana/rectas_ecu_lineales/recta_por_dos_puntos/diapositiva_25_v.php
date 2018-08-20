<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
 <script type="text/javascript" src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.css">

<script type="text/javascript" charset="utf-8">
	var applet0 = new GGBApplet({filename: base_url+"statics/ggb/tutorial/geom_ana/rectas_ecu_lineales/recta_por_dos_puntos/diapositiva_25.ggb","showToolbar":false, height: 300	}, true);
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
					<div align="left"><p><label></label></p></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
							<div class="paso_7">
								<p>Arrastra el punto naranja que está sobre el punto <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>P</mi><mn>1</mn></msub><mo>&#xA0;</mo></math>, colócalo sobre el eje X.</p>
								<p>¿Cuánto mide la base del triángulo <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi><mi>Q</mi><msub><mi>P</mi><mn>1</mn></msub><mo>&#xA0;</mo></math>? </p>
								<p><input type="number" id="base_t" onchange="validaInputRelacion('4','base_t','');" onkeypress="return validarSoloNumero(event);" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" size="5" readonly="readonly" disabled="disabled" value="4"></p>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left" id="error_base_t">
								</div>
							</div><br>
							<div class="paso_8">
								<p>Arrastra el punto morado que está sobre el punto <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>P</mi><mn>1</mn></msub><mo>&#xA0;</mo></math>, colócalo sobre el eje Y.</p>
								<p>¿Cuánto mide la altura del triángulo <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi><mi>Q</mi><msub><mi>P</mi><mn>1</mn></msub><mo>&#xA0;</mo></math>? </p>
								<p><input type="number" id="altura_t" onchange="validaInputRelacion('2','altura_t','.67');" onkeypress="return validarSoloNumero(event);" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" size="5" readonly="readonly" disabled="disabled" value="2.67"></p>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left" id="error_altura_t">
								</div>
							</div><br><div class="paso_9">
								<p>Al comparar los cocientes entre los catetos de los triángulos semejantes <math xmlns="http://www.w3.org/1998/Math/MathML"><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mi mathcolor="#191919">R</mi><mi mathcolor="#191919">P</mi><msub mathcolor="#191919"><mi mathcolor="#191919">R</mi><mn>1</mn></msub><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi mathcolor="#191919">P</mi><mi mathcolor="#191919">Q</mi><msub mathcolor="#191919"><mi mathcolor="#191919">P</mi><mn>1</mn></msub><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo></math> obtenemos <math xmlns="http://www.w3.org/1998/Math/MathML"><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mfrac mathcolor="#191919"><mrow><mi mathcolor="#A442D1">y</mi><mo mathcolor="#A442D1">-</mo><mn mathcolor="#A442D1">1</mn></mrow><mrow><mi mathcolor="#E5771D">x</mi><mo mathcolor="#E5771D">-</mo><mn mathcolor="#E5771D">1</mn></mrow></mfrac><mo mathcolor="#191919">=</mo><mfrac mathcolor="#191919"><mrow><mn mathcolor="#0000FF">3</mn><mo mathcolor="#0000FF">-</mo><mn mathcolor="#0000FF">1</mn></mrow><mrow><mn mathcolor="#FF00FF">4</mn><mo mathcolor="#FF00FF">-</mo><mn mathcolor="#FF00FF">1</mn></mrow></mfrac></math> </p>
							</div><br>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="center" style="border: 1px solid;">
							<div style="display: block" align="center" class="col-xs-12 col-sm-12 col-lg-12" id="applet_container0"></div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left">
							<div class="paso_10">
								<p>Comprueba que los cocientes son iguales para todo punto en la recta arrastrando el punto <b>P</b> (utiliza el deslizador para arrastrar el punto) <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac mathcolor="#191919"><mrow><mn mathcolor="#A442D1">3</mn><mo mathcolor="#A442D1">.</mo><mn mathcolor="#A442D1">37</mn><mo mathcolor="#A442D1">-</mo><mn mathcolor="#A442D1">1</mn></mrow><mrow><mn mathcolor="#E5771D">5</mn><mo mathcolor="#E5771D">-</mo><mn mathcolor="#E5771D">1</mn></mrow></mfrac><mo mathcolor="#191919">=</mo><mfrac mathcolor="#191919"><mrow><mn mathcolor="#A442D1">2</mn><mo mathcolor="#A442D1">.</mo><mn mathcolor="#A442D1">67</mn></mrow><mn mathcolor="#E5771D">4</mn></mfrac><mo mathcolor="#191919">=</mo><mn mathcolor="#191919">0</mn><mo mathcolor="#191919">.</mo><mn mathcolor="#191919">67</mn><mo mathcolor="#191919">=</mo><mfrac mathcolor="#191919"><mn mathcolor="#0000FF">2</mn><mn mathcolor="#FF00FF">3</mn></mfrac><mo mathcolor="#191919">=</mo><mfrac mathcolor="#191919"><mrow><mn mathcolor="#0000FF">3</mn><mo mathcolor="#0000FF">-</mo><mn mathcolor="#0000FF">1</mn></mrow><mrow><mn mathcolor="#FF00FF">4</mn><mo mathcolor="#FF00FF">-</mo><mn mathcolor="#FF00FF">1</mn></mrow></mfrac></math> </p>
							</div><br>
							<div class="paso_11">
								<p>Tenemos que <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac mathcolor="#191919"><mrow><mn mathcolor="#0000FF">3</mn><mo mathcolor="#0000FF">-</mo><mn mathcolor="#0000FF">1</mn></mrow><mrow><mn mathcolor="#FF00FF">4</mn><mo mathcolor="#FF00FF">-</mo><mn mathcolor="#FF00FF">1</mn></mrow></mfrac><mo mathcolor="#191919">=</mo><mfrac mathcolor="#191919"><mn mathcolor="#0000FF">2</mn><mn mathcolor="#FF00FF">3</mn></mfrac></math> es la <b>pendiente</b> de la recta y se denota generalmente (pero no necesariamente) con una <b>m</b>. </p>
								<p>La pendiente nos dice qué tan inclinada está la recta.</p>
							</div><br>
						</div>
					</div>										
				</div><br>
			</div><br><br>
		</div>
	</div>
	<br><br>
  </div>
