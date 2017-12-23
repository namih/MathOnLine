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
			<p>	En este tutorial aprenderás cómo encontrar la ecuación de Ia recta que pasa por el origen y por otro punto.
			<br>
			Lee con atención cada paso de las explicaciones y dedícale suficiente tiempo a los ejercicios hasta que domines el tema.<br></p>
		</div>
		<div id="boxEjemplos_1">
			<div id="box_1_ejemplo_0">
				<div class="pregunta"><p>¿Cómo podemos representar una recta en el plano cartesiano mediante una ecuación?</p>
				</div>
				<div class="instruccion">
				<p>Desarrollo paso a paso.</p>
				</div>
				<div class="row">
					<div align="left"><p><label>Ejemplo</label></p></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="center">
							<div class="paso_0">
								<p>Empecemos con una recta que pasa por el origen es decir, que pasa por el punto (0,0)</p>
							</div><br>
							<div class="paso_1">
								<p>Supongamos que esta recta pasa también por el punto Q (4,3 )</p>
							</div><br>
							<div class="paso_2">
								<p>Tomemos ahora un punto cualquiera sobre la recta, llamémosle P.</p>
								<p>Arrastra el punto P sobre la recta y observa cómo cambian sus coordenadas. P ( 3 , 2.25 )</p>
							</div><br>
							<div class="paso_3">
								<p>Al trazar los segmentos verticales se forman dos triángulos semejantes.</p>
								<p>Arrastra el punto P sobre la recta y observa cómo cambian sus coordenadas. P ( 3 , 2.25 )</p>
							</div><br>
							<div class="paso_4">
								<p>Al trazar los segmentos verticales se forman dos triángulos semejantes. POP’y QOQ’ tenemos que </p>
								<p>Si comparamos los cocientes que resultan de dividir los </p>
								<p>QOQ’: 3/4 = 0.75     POP’: 2.25/3 = 0.75 </p>
								<p>Arrastra el punto P y observa qué pasa con los cocientes.</p>
							</div><br>
							<div class="paso_5">
								<p>En general, para un punto P(x,y) sobre la recta que pasa por el origen y por el punto Q( 4,3 ):</p>
								<p>Esto se conoce como el "Teorema de Tales" </p>
							</div><br>
							<div class="paso_5">
								<p>En una recta que pasa por el origen, al cociente x/y se le llama pendiente de la recta. Se suele denotar con una <b>m</b>.</p>
								<p> m=y/x </p>
								<p> La pendiente nos dice qué tan inclinada está la recta.</p>
								<p> Si en y/x = 3/4  despejamos y obtenemos y = 3/4 x </p>
								<p>Esta es la ecuación de la recta que pasa por el origen y por el punto Q( 4,3 )</p>
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
