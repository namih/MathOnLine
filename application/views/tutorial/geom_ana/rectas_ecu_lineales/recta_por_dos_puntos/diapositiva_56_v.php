<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
 <script type="text/javascript" src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.css">
 
<script type="text/javascript" charset="utf-8">
	var applet0 = new GGBApplet({filename: base_url+"statics/ggb/tutorial/geom_ana/rectas_ecu_lineales/recta_por_dos_puntos/diapositiva_56.ggb","showToolbar":false, height: 300	}, true);
	window.addEventListener("load", function() { applet0.inject('applet_container0'); });
</script>

<div class="container-fluid">
 
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
				<p><b>Veamos otro ejemplo de recta que NO pasa por el origen. </b></p>
				</div>
				<div class="row">
					<div align="left"><p><label></label></p></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
							<div class="paso_7">
								<p>Si se resta la primera coordenada de <b>P</b> menos la primera coordenada de <b>Q</b>, en ese orden se obtiene: <math xmlns="http://www.w3.org/1998/Math/MathML"><mo><semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input class="n_float" type="text" name="input_1" id="input_1" onchange="validaInputRelacion('1','input_1','');" onkeypress="return validarSoloNumero(event);" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" size="5" readonly="readonly" disabled="disabled" value="1" />
											</annotation-xml>
										</semantics></mo></math> </p>
									<p>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_input_1">
										</div>
									</p>
							</div><br>
							<div class="paso_8">
								<p>Si se resta la segunda coordenada de P menos la segunda coordenada de Q, en ese orden se obtiene: <math xmlns="http://www.w3.org/1998/Math/MathML"><mo><semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input class="n_float" type="text" name="input_2" id="input_2" onchange="validaInputRelacion('0','input_2','');" onkeypress="return validarSoloNumero(event);" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" size="5" readonly="readonly" disabled="disabled" value="-2" />
											</annotation-xml>
										</semantics></mo></math> </p>
									<p>
										<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_input_2">
										</div>
									</p>
							</div><br>
							<div class="paso_9">
								<p>Comparamos los cocientes de las diferencias de coordenadas con los triángulos <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>R</mi><mi>Q</mi><mi>R</mi></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi><mi>Q</mi><mi>P</mi></math> <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac mathcolor="#191919"><mrow><mi>D</mi><mi>i</mi><mi>f</mi><mi>e</mi><mi>r</mi><mi>e</mi><mi>n</mi><mi>c</mi><mi>i</mi><mi>a</mi><mo>&#xA0;</mo><mi>d</mi><mi>e</mi><mo>&#xA0;</mo><mi>c</mi><mi>o</mi><mi>o</mi><mi>r</mi><mi>d</mi><mi>e</mi><mi>n</mi><mi>a</mi><mi>d</mi><mi>a</mi><mi>s</mi><mo>&#xA0;</mo><mi>y</mi></mrow><mrow><mi>D</mi><mi>i</mi><mi>f</mi><mi>e</mi><mi>r</mi><mi>e</mi><mi>n</mi><mi>c</mi><mi>i</mi><mi>a</mi><mo>&#xA0;</mo><mi>d</mi><mi>e</mi><mo>&#xA0;</mo><mi>c</mi><mi>o</mi><mi>o</mi><mi>r</mi><mi>d</mi><mi>e</mi><mi>n</mi><mi>a</mi><mi>d</mi><mi>a</mi><mi>s</mi><mo>&#xA0;</mo><mi>x</mi></mrow></mfrac><mo mathcolor="#191919">=</mo><mfrac mathcolor="#191919"><mrow><mi mathcolor="#A442D1">y</mi><mo mathcolor="#A442D1">-</mo><mn mathcolor="#A442D1">2</mn></mrow><mrow><mi mathcolor="#E5771D">x</mi><mo mathcolor="#E5771D">-</mo><mn mathcolor="#E5771D">4</mn></mrow></mfrac><mo mathcolor="#191919">=</mo><mfrac mathcolor="#191919"><mrow><mn mathcolor="#0000FF">6</mn><mo mathcolor="#0000FF">-</mo><mn mathcolor="#0000FF">2</mn></mrow><mrow><mn mathcolor="#FF00FF">2</mn><mo mathcolor="#FF00FF">-</mo><mn mathcolor="#FF00FF">4</mn></mrow></mfrac><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">=</mo><mo mathcolor="#191919">&#x2009;</mo><mo mathcolor="#191919">-</mo><mfrac mathcolor="#191919"><mn>4</mn><mn>2</mn></mfrac></math></p>
							</div><br>
							<div class="paso_10">
								<p>Comprueba que los cocientes son iguales para todo punto en la recta arrastrando el punto <b>P</b> (utiliza el deslizador para arrastrar el punto)<math xmlns="http://www.w3.org/1998/Math/MathML"><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mfrac mathcolor="#191919"><mrow><mn mathcolor="#A442D1">0</mn><mo mathcolor="#A442D1">-</mo><mn mathcolor="#A442D1">2</mn></mrow><mrow><mn mathcolor="#E5771D">5</mn><mo mathcolor="#E5771D">-</mo><mn mathcolor="#E5771D">4</mn></mrow></mfrac><mo mathcolor="#191919">=</mo><mfrac mathcolor="#191919"><mrow><mo mathcolor="#A442D1">-</mo><mn mathcolor="#A442D1">2</mn></mrow><mn mathcolor="#E5771D">1</mn></mfrac><mo mathcolor="#191919">=</mo><mo mathcolor="#191919">-</mo><mn mathcolor="#191919">2</mn><mo mathcolor="#191919">=</mo><mfrac mathcolor="#191919"><mn mathcolor="#0000FF">4</mn><mrow><mo mathcolor="#FF00FF">-</mo><mn mathcolor="#FF00FF">2</mn></mrow></mfrac><mo mathcolor="#191919">=</mo><mfrac mathcolor="#191919"><mrow><mn mathcolor="#0000FF">6</mn><mo mathcolor="#0000FF">-</mo><mn mathcolor="#0000FF">2</mn></mrow><mrow><mn mathcolor="#FF00FF">2</mn><mo mathcolor="#FF00FF">-</mo><mn mathcolor="#FF00FF">4</mn></mrow></mfrac><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo></math></p>
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