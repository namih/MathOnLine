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
		<div class="tema"><p>La recta - Ecuación de la recta que pasa por el origen.</p>
		</div>
		<div class="instruccion">
			<p></p>
		</div>
		<div id="boxEjemplos_1">
			<div id="box_1_ejemplo_0">
				<div class="pregunta"><p></p>
				</div>
				<div class="instruccion">
				</div>
				<div class="row">
					<div align="left"><p><label>Ejemplo</label></p></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
							<div class="pregunta paso_0">
								<p><b>Consideremos un punto arbitrario P(<math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>x</mi><mn>1</mn></msub><mo>,</mo><mi>y</mi><mn>1</mn></math>) y la recta que pasa por el origen y por P.</b></p>
								<p><b>NOTA:</b> Se escriben subíndices (<math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>x</mi><mn>1</mn></msub><mo>,</mo><mi>y</mi><mn>1</mn></math>) cuando queremos denotar un punto específico.</p>
							</div><br>
							<div class="paso_1">
								<p><b>Arrastra el punto P sobre el plano para cambiar la inclinación de la recta.</b></p>
							</div><br>
							<div class="paso_2">
								<p>Tomemos otro punto Q(x,y) sobre la misma recta.</p>
								<p>Arrastra el punto Q y observa lo que sucede con los cocientes.</p>
								<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi><mo>:</mo><mo>&#xA0;</mo><mfrac><mi>y</mi><mi>x</mi></mfrac><mo>=</mo><mfrac><mn>3</mn><mn>4</mn></mfrac><mo>=</mo><mn>0</mn><mo>.</mo><mn>75</mn></math> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>Q</mi><mo>:</mo><mo>&#xA0;</mo><mfrac><msub><mi>y</mi><mn>1</mn></msub><msub><mi>x</mi><mn>1</mn></msub></mfrac><mo>=</mo><mfrac><mrow><mn>2</mn><mo>.</mo><mn>25</mn></mrow><mn>3</mn></mfrac><mo>=</mo><mn>0</mn><mo>.</mo><mn>75</mn></math> </p>
							</div><br>
							<div class="paso_3">
								<p>Arrastra nuevamente el punto P para cambiar la inclinación de la recta y observa lo que sucede con los cocientes.</p>
							</div><br>
							<div class="paso_4">
								<p>Al trazar los segmentos verticales se forman dos triángulos semejantes. POP' y QOQ'</p>
								<p>Tenemos entonces que <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi>y</mi><mi>x</mi></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mfrac><msub><mi>y</mi><mn>1</mn></msub><msub><mi>x</mi><mn>1</mn></msub></mfrac></math>. Esto se conoce como el "Teorema de Tales"</p>
								</p>
							</div><br>
							<div class="paso_5">
								<p>En una recta que pasa por el origen, al cociente <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><msub><mi>y</mi><mn>1</mn></msub><msub><mi>x</mi><mn>1</mn></msub></mfrac></math> se le llama <b>pendiente</b> y se denota usualmente (pero no necesariamente) con una <b>m</b>. La pendiente nos dice qué tan inclinada está la recta. </p>
							</div><br>
							<div class="paso_6">
								<p>Si despejamos y en <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi>y</mi><mi>x</mi></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mfrac><msub><mi>y</mi><mn>1</mn></msub><msub><mi>x</mi><mn>1</mn></msub></mfrac></math> obtenemos </p>
								<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mfrac><msub><mi>y</mi><mn>1</mn></msub><msub><mi>x</mi><mn>1</mn></msub></mfrac><mi>x</mi></math></p>
							</div><br>
							<div class="paso_7">
								<p>Como <br><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#x2009;</mo><mfrac><msub><mi>y</mi><mn>1</mn></msub><msub><mi>x</mi><mn>1</mn></msub></mfrac></math></p>
								<p>Obtenemos <br>  y=mx</p>
								<p>Esta es la ecuación de cualquier recta que pasa por el origen y por el punto <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi><mo>:</mo><mo>&#xA0;</mo><mo>(</mo><msub><mi>x</mi><mn>1</mn></msub><mo>,</mo><msub><mi>y</mi><mn>1</mn></msub><mo>)</mo></math>.</p>
							</div><br>
							<div class="paso_8">
								<p>Si P es el punto (4,3), la ecuación de la recta que pasa por el origen y P es:</p>
								<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mfrac><mn>3</mn><mn>4</mn></mfrac><mi>x</mi><mo>&#xA0;</mo><mi> o </mi><mo>&#xA0;</mo><mi>y</mi><mo>=</mo><mn>0</mn><mo>.</mo><mn>75</mn><mi>x</mi></math></p>
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
