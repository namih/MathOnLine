<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
 <script type="text/javascript" src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.css">
 
<script type="text/javascript" charset="utf-8">
	var applet0 = new GGBApplet({filename: base_url+"statics/ggb/tutorial/geom_ana/rectas_ecu_lineales/recta_por_dos_puntos/diapositiva_93.ggb","showToolbar":false, height: 300	}, true);
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
								<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi mathcolor="#0000FF">Q</mi><mo mathcolor="#0000FF">(</mo><msub mathcolor="#0000FF"><mi mathcolor="#0000FF">x</mi><mn>1</mn></msub><mo mathcolor="#0000FF">,</mo><msub mathcolor="#0000FF"><mi mathcolor="#0000FF">y</mi><mn>1</mn></msub><mo mathcolor="#0000FF">)</mo><mo mathcolor="#0000FF">&#xA0;</mo><mo mathcolor="#191919">&#xA0;</mo><mi mathcolor="#191919">y</mi><mo mathcolor="#0000FF">&#xA0;</mo><mo mathcolor="#0000FF">&#xA0;</mo><mi mathcolor="#007F00">R</mi><mo mathcolor="#007F00">(</mo><msub mathcolor="#007F00"><mi mathcolor="#007F00">x</mi><mn>2</mn></msub><mo mathcolor="#007F00">,</mo><msub mathcolor="#007F00"><mi mathcolor="#007F00">y</mi><mn>2</mn></msub><mo mathcolor="#007F00">)</mo></math> </p>
								<p>Nota: Recuerda que escribimos subíndices cuando queremos denotar puntos particulares en la recta. </p>
							</div><br>
							<div class="paso_1">
								<p>Nuevamente observamos que se forman dos triángulos semejantes <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>R</mi><mi>Q</mi><msup><mi>R</mi><mo>'</mo></msup></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>Q</mi><mi>P</mi><msup><mi>Q</mi><mo>'</mo></msup></math></p>
								<p>Al comparar los cocientes entre los catetos tenemos:  <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xA0;</mo><mo>&#xA0;</mo><mfrac><mrow><mi mathcolor="#FF0000">y</mi><mo>-</mo><msub mathcolor="#0000FF"><mi mathcolor="#0000FF">y</mi><mn>1</mn></msub></mrow><mrow><mi mathcolor="#FF0000">x</mi><mo>-</mo><msub mathcolor="#0000FF"><mi mathcolor="#0000FF">x</mi><mn>1</mn></msub></mrow></mfrac><mo>=</mo><mfrac><mrow><mi mathcolor="#007F00">y</mi><mn mathcolor="#007F00">2</mn><mo>-</mo><msub mathcolor="#0000FF"><mi mathcolor="#0000FF">x</mi><mn>2</mn></msub></mrow><mrow><msub mathcolor="#007F00"><mi mathcolor="#007F00">x</mi><mn>2</mn></msub><mo>-</mo><msub mathcolor="#0000FF"><mi mathcolor="#0000FF">x</mi><mn>1</mn></msub></mrow></mfrac><mo>&#xA0;</mo><mo>&#xA0;</mo></math></p>
							</div><br>
							<div class="paso_2">
								<p>Comprueba que los cocientes son iguales para todo punto en la recta arrastrando el punto <b>P</b> (utiliza el deslizador para arrastrar el punto).</p>
								<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xA0;</mo><mo>&#xA0;</mo><mfrac><mstyle displaystyle="true"><mn mathcolor="#FF0000">6</mn><mo mathcolor="#FF0000">.</mo><mn mathcolor="#FF0000">5</mn><mo>-</mo><mn mathcolor="#0000FF">2</mn></mstyle><mstyle displaystyle="true"><mn mathcolor="#FF0000">10</mn><mo>-</mo><mn mathcolor="#0000FF">1</mn></mstyle></mfrac><mo>=</mo><mfrac><mstyle displaystyle="true"><mn>4</mn><mo>.</mo><mn>5</mn></mstyle><mn>9</mn></mfrac><mo>=</mo><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mi>y</mi><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mfrac><mstyle displaystyle="true"><mn mathcolor="#007F00">4</mn><mo>-</mo><mn>2</mn></mstyle><mstyle displaystyle="true"><mn mathcolor="#007F00">5</mn><mo>-</mo><mn mathcolor="#0000FF">1</mn></mstyle></mfrac><mo>=</mo><mfrac><mn>2</mn><mn>4</mn></mfrac><mo>=</mo><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mo>&#xA0;</mo></math></p>
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