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
		<div class="tema"><p>Pendiente Ordenada.</p>
		</div>
		<div class="instruccion">
			<p>	En este tutorial investigarás lo que le ocurre a una recta cuando modificas su pendiente o su ordenada al origen.
			<br>
			Lee con atención cada paso de Ias explicaciones y dedícale suficiente tiempo a los ejercicios hasta que domines el tema.<br></p>
		</div>
		<div id="boxEjemplos_1">
			<div id="box_1_ejemplo_0">
				<div class="pregunta"><p></p>
				</div>
				<div class="instruccion">
				<p></p>
				</div>
				<div class="row">
					<div align="left"><p><label>Primera experimentación</label></p></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
							<div class="paso_0">
								<p>Grafica en papel cuadriculado la recta <br><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo><mn>2</mn><mi>x</mi><mo>+</mo><mn>3</mn></math> </p>
								<p>Para ello completa una tabla en la que para cinco valores de x encuentres el valor de y correspondiente.</p>
							</div><br>
							<div class="paso_1">
								<p>¿Coincide Ia gráfica de Ia derecha con Ia que hiciste?</p>
							</div><br>
							<div class="paso_2">
								<p>¿Qué sucede si cambias el coeficiente de x?/*Revisar que en esta diapositiva la constante de x se vuelva un input*/</p>
							</div><br>
							<div class="paso_3">
								<p>¿Qué sucede si el coeficiente es negativo? Intenta con -2.</p>

							</div><br>
							<div class="paso_4">
								<p>Disminuye ahora el valor del coeficiente de x hasta llegar a -20. Observa la gráfica.</p>
							</div><br>
							<div class="paso_5">
								<p>Observa la gráfica cuando cambia el valor del coeficiente de x. ¿Qué cambia? ¿qué es lo que se mantiene igual? Usa el botón anima / pausa</p>
							</div><br>
							<div class="paso_6">
								<p>El coeficiente de x en una función como <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo><mn>2</mn><mi>x</mi><mo>+</mo><mn>3</mn></math> se llama pendiente de Ia recta y usualmente se denota con la letra <b>m</b>. La pendiente nos indica qué tan inclinada está Ia recta.</p>
							</div><br>
							<div class="paso_7">
								<p>Observa nuevamente la gráfica de <br><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo><mn>2</mn><mi>x</mi><mo>+</mo><mn>3</mn></math></p>
								<p>¿Qué sucede si cambiamos el valor de la constante? /*Revisar que en esta diapositiva la constante de x se vuelva un input*/</p>
							</div><br>
							<div class="paso_8">
								<p>Observa qué sucede cuando el valor es negativo.</p>
							</div><br>
							<div class="paso_9">
								<p>Observa cómo cambia la gráfica al modificarse la constante. ¿Qué es lo que cambia? ¿Qué es lo que se mantiene igual?</p>
							</div><br>
							<div class="paso_10">
								<p>Esta constante se llama <b>ordenada al origen</b> y se suele denotar con la letra <b>b</b>. Observa que este valor nos da la intersección de la recta con el eje Y.</p>
							</div><br>
							<div class="paso_11">
								<p>Prueba cambiar los valores tanto del coeficiente de x (m) como de la ordenada al origen (b).</p> 
								<p> y= <input type="number"> x + <input type="number"></p>
								<p>Observa lo que le sucede a la gráfica. ¿Qué sucede cuando m=0? ¿y cuando b=0?</p>
							</div><br>
							<div class="paso_12">
								<p>Tenemos entonces que cualquier recta que corte al eje <b>Y</b> puede representarse como</p>
								<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo><mi>m</mi><mi>x</mi><mo>+</mo><mi>b</mi></math>,</p>
								<p>donde <b>m</b> representa la pendiente y <b>b</b> la ordenada al origen.</p>
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
