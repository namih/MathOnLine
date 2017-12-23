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
			<p>	En este tutorial aprenderás cómo encontrar la ecuación de Ia recta que pasa por dos puntos.
			<br>
			Lee con atención cada paso de las explicaciones y dedícale suficiente tiempo a los ejercicios hasta que domines el tema.<br></p>
		</div>
		<div id="boxEjemplos_1">
			<div id="box_1_ejemplo_0">
				<div class="pregunta"><p>¿Cómo es la ecuación de una recta que no pasa por el origen?</p>
				</div>
				<div class="instruccion">
				<p>Desarrollo paso a paso.</p>
				</div>
				<div class="row">
					<div align="left"><p><label>Ejemplo</label></p></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="center">
							<div class="paso_0">
								<p></p>
							</div><br>
							<div class="paso_1">
								<p>Por ejemplo la recta que pasa por los puntos Q( 1, 3 ) y R( 2, 5 )</p>
							</div><br>
							<div class="paso_2">
								<p>Tomemos un punto P(x,y) cualquiera sobre la recta.</p>
								<p>Arrastra P y observa cómo cambian sus coordenadas. P( 5, 11)</p>
							</div><br>
							<div class="paso_3">
								<p>Observa que se forman dos triángulos semejantes RQR1 y PQP1</p>

							</div><br>
							<div class="paso_4">
								<p>Arrastra el punto magenta que está sobre R1, colócalo sobre el eje X. ¿Cuánto mide la base del triángulo RQR1? ____1_____ Correcto.</p>
							</div><br>
							<div class="paso_5">
								<p>Ahora arrastra el punto_azul que está sobre R1 , y colócalo sobre el eje Y. ¿Cuánto mide la altura del triángulo RQR1? ___2____ Correcto</p>
							</div><br>
							<div class="paso_6">
								<p>El cociente de los catetos del triángulo RQR1 es 5-3 / 2-1 = 2/1 = 2</p>
								<p>Este cociente es la pendiente de la recta.</p>
								<p>La pendiente nos indica qué tan inclinada está la recta.</p>
							</div><br>
							<div class="paso_7">
								<p>Arrastra el punto naranja que está sobre el punto P1 colócalo sobre el eje X. Cuánto mide la base del triángulo PQP1 ____4____</p>
							</div><br>
							<div class="paso_8">
								<p>Arrastra el punto naranja que está sobre el punto P1 colócalo sobre el eje X. Cuánto mide la base del triángulo PQP1 ____4____ Incorrecto 4</p>
								<p>Arrastra el punto morado que está sobre el punto P1 colócalo sobre el eje Y. ¿Cuánto mide la altura del triángulo PQP1 ? __8__  Incorrecto</p>
							</div><br>
							<div class="paso_9">
								<p>Al comparar los cocientes entre los catetos de los triángulos semejantes RPR1 y PQP1 obtenemos y-3 / x-1 = 5-3 / 2-1 </p>
							</div><br>
							<div class="paso_10">
								<p>Comprueba que los cocientes son iguales para todo punto en Ia recta arrastrando el punto P 11-3 / 5-1 = 8/4 = 2 = 2/1 = 5-3/2-1</p>
							</div><br>
							<div class="paso_11">
								<p>Tenemos que 5-3/2-1 = 2/1 es la pendiente de la recta y se denota generalmente ( pero no necesariamente) con una m.</p>
								<p>La pendiente nos dice qué tan inclinada está Ia recta</p>
							</div><br>
							<div class="paso_12">
								<p>Si en y-3/x-1 = 5-3 / 2-1 = 2 despejamos y, obtenemos
y-3 = 2( x-1 )
y = 2( x-1 )+3
y = 2 x-2+3
y = 2 x+1

Ésta es Ia ecuación de Ia recta que pasa por los puntos Q( 1 ,3 ) y R( 2,5)
</p>
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
