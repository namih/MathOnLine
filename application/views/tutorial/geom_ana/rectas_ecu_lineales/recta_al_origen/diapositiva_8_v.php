<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.js"></script>
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
			<p>	En este tutorial aprenderás cómo encontrar la ecuación de Ia recta que pasa por el origen y por otro punto.
			<br>
			Lee con atención cada paso de las explicaciones y dedícale suficiente tiempo a los ejercicios hasta que domines el tema.<br></p>
		</div>
		<div id="boxEjemplos_1">
			<div id="box_1_ejemplo_0">
				<div class="pregunta"><p></p>
				</div>
				<div class="instruccion">
				</div>
				<div class="row">
					<div align="left"><p><label>Ejemplo 2</label></p></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
							<div class="pregunta paso_0">
								<p><b>¿Cómo podemos representar una recta en el plano cartesiano mediante una ecuación?</b></p>
							</div><br>
							<div class="paso_1">
								<p><b>Empecemos con una recta que pasa por el origen es decir, que pasa por el punto (0,0)</b></p>
							</div><br>
							<div class="paso_2">
								<p>Supongamos que esta recta pasa también por el punto Q ( -5,1 )</p>
							</div><br>
							<div class="paso_3">
								<p>Tomemos ahora un punto cualquiera sobre la recta, llamémosle P.</p>
								<p>Arrastra el punto P sobre la recta y observa cómo cambian sus coordenadas. P ( 3 , 2.25 )</p>
							</div><br>
							<div class="paso_4">
								<p>Al trazar los segmentos verticales se forman dos triángulos semejantes. POP' y QOQ'</p>
								<p>Si comparamos los cocientes que resultan de dividir los catetos de los triángulos POP' y QOQ' tenemos que </p>
								<p>QOQ': <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>-5</mn></mfrac><mo>=</mo><mn>-0</mn><mo>.</mo><mn>2</mn></math>     POP': <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>.</mo><mn>25</mn></mrow><mn>3</mn></mfrac><mo>=</mo><mn>0</mn><mo>.</mo><mn>75</mn></math> </p>
								<p>Arrastra el punto P y observa qué pasa con los cocientes.</p>
							</div><br>
							<div class="paso_5">
								<p>QOQ': <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mstyle displaystyle="true"><mn>1</mn></mstyle><mstyle displaystyle="true"><mo>-</mo><mn>5</mn></mstyle></mfrac><mo>=</mo><mo>-</mo><mn>0</mn><mo>.</mo><mn>2</mn></math>    POP': <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>2</mn><mo>.</mo><mn>25</mn></mrow><mn>3</mn></mfrac><mo>=</mo><mn>0</mn><mo>.</mo><mn>75</mn></math> </p>
								<p>En general, para un punto P(x,y) sobre la recta que pasa por el origen y por el punto Q( -5,1 ):</p>
								<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi>y</mi><mi>x</mi></mfrac><mo>=</mo><mfrac><mn>1</mn><mrow><mo>-</mo><mn>5</mn></mrow></mfrac><mo>=</mo><mfrac><mn>1</mn><mn>5</mn></mfrac></math></p>
								<p>Esto se conoce como el "Teorema de Tales" </p>
							</div><br>
							<div class="paso_6">
								<p>En una recta que pasa por el origen, al cociente <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi>y</mi><mi>x</mi></mfrac></math> se le llama <b>pendiente</b> de la recta. Se suele denotar con una <b>m</b>.</p>
								<p><b><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>m</mi><mo>=</mo><mfrac><mi>y</mi><mi>x</mi></mfrac></math> </b></p>
								<p> La pendiente nos dice qué tan inclinada está la recta.</p>
								<p> Si en <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mi>y</mi><mi>x</mi></mfrac><mo>=</mo><mfrac><mn>1</mn><mn>5</mn></mfrac></math>  despejamos y obtenemos </p>
								<p><b><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo><mfrac><mn>1</mn><mn>5</mn></mfrac><mi>x</mi></math></b></p>
								<p>Esta es la ecuación de la recta que pasa por el origen y por el punto Q( -5,1 )</p>
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
