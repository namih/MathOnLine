<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/rectas_ecu_lineales/rectas_ecu_lineales.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet0 = new GGBApplet({filename: base_url+"statics/example.ggb","showToolbar":false, height: 300	}, true);
	window.addEventListener("load", function() { applet0.inject('applet_container0'); });
</script>

<div class="container-fluid">
 
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
		<div class="tema"><p>Distancia punto a recta.</p>
		</div>
		<div class="instruccion">
			<p>	Veamos un ejemplo.</p>
		</div>
		<div id="boxEjemplos_1">
			<div id="box_1_ejemplo_0">
				<div class="pregunta"><p></p>
				</div>
				<div class="instruccion">
				</div>
				<div class="row">
					<div align="left"><p><label></label></p></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
							<div class="pregunta paso_0">
								<p>¿Cuál es la distancia del punto <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi><mo>(</mo><mo>&#xA0;</mo><mo>-</mo><mn>1</mn><mo>,</mo><mo>&#xA0;</mo><mn>6</mn><mo>&#xA0;</mo><mo>)</mo></math> a la recta <b><math xmlns="http://www.w3.org/1998/Math/MathML"><mi mathvariant="bold-italic">l</mi></math></b>?</p>
							</div><br>
							<div class="paso_1">
								<p>¿Cuál es la ordenada al origen de la recta?</p>
								<p>b= <input type="number" name=""> </p>
							</div><br>
							<div class="paso_2">
								<p>¿Cuánto vale la pendiente de la recta?</p>
								<p>m= <input type="number" name=""> </p>
							</div><br>
							<div class="paso_3">
								<p>Recuerda que si una recta tiene pendiente <b>m</b>, las rectas perpendiculares a ella tienen pendiente <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>m</mi><mo>'</mo></msup><mo>=</mo><mo>-</mo><mfrac><mn>1</mn><mi>m</mi></mfrac></math>, entonces, ¿Cuánto vale la pendiente de las rectas perpendiculares?</p>
								<p><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>m</mi><mo>'</mo></msup><mo>=</mo></math> <select><option></option><option>+</option><option>-</option></select> <input type="number" name=""> / <input type="number" name=""> </p>
							</div><br>
							<div class="paso_4">
								<p>La ecuación de la recta que pasa por <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>(</mo><mo>&#xA0;</mo><mo>-</mo><mn>1</mn><mo>,</mo><mo>&#xA0;</mo><mn>6</mn><mo>&#xA0;</mo><mo>)</mo></math> y tiene pendiente <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>m</mi><mo>'</mo></msup></math> es</p>
								<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>-</mo><mo>(</mo><mo>&#xA0;</mo><mn>6</mn><mo>&#xA0;</mo><mo>)</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>-</mo><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>(</mo><mo>&#xA0;</mo><mi>x</mi><mo>-</mo><mo>(</mo><mo>&#xA0;</mo><mo>-</mo><mn>1</mn><mo>&#xA0;</mo><mo>)</mo><mo>&#xA0;</mo><mo>)</mo></math></p>
							</div><br>
							<div class="paso_5">
								<p>que al simplificarla queda</p>
								<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>-</mo><mn>0</mn><mo>.</mo><mn>5</mn><mo>&#xA0;</mo><mi>x</mi><mo>+</mo><mn>5</mn><mo>.</mo><mn>5</mn></math></p>
							</div><br>
							<div class="paso_6">
								<p>Ahora hay que encontrar el punto de intersección de estas dos rectas</p>
								<p><span style="color:red;"><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo><mn>2</mn><mi>x</mi><mo>+</mo><mn>3</mn></math></span> y <span style="color:blue;"><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo><mo>-</mo><mn>0</mn><mo>.</mo><mn>5</mn><mi>x</mi><mo>+</mo><mn>5</mn><mo>.</mo><mn>5</mn></math></span></p>					
								<p>¿Cuál es el punto de intersección?</p>
								<p>Q( <input type="number" name="">, <input type="number" name=""> )</p>
							</div><br>
							<div class="paso_7">
								<p>Finalmente hay que encontrar la distancia entre los puntos <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi><mo>(</mo><mo>&#xA0;</mo><mo>-</mo><mn>1</mn><mo>,</mo><mo>&#xA0;</mo><mn>6</mn><mo>&#xA0;</mo><mo>)</mo></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>Q</mi><mo>(</mo><mo>&#xA0;</mo><mn>1</mn><mo>,</mo><mo>&#xA0;</mo><mn>5</mn><mo>&#xA0;</mo><mo>)</mo></math> </p>
								<p>Usando la fórmula de la distancia entre dos puntos:</p>
								<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>d</mi><mo>(</mo><mo>&#xA0;</mo><mi>P</mi><mo>,</mo><mi>Q</mi><mo>&#xA0;</mo><mo>)</mo><mo>=</mo><msqrt><mo>(</mo><mo>&#xA0;</mo><msub><mi>x</mi><mn>1</mn></msub><mo>-</mo><msub><mi>x</mi><mn>2</mn></msub><mo>&#xA0;</mo><msup><mo>)</mo><mn>2</mn></msup><mo>+</mo><mo>(</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><msub><mi>y</mi><mn>1</mn></msub><mo>-</mo><msub><mi>y</mi><mn>2</mn></msub><mo>&#xA0;</mo><msup><mo>)</mo><mn>2</mn></msup></msqrt></math></p>
								<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>d</mi><mo>(</mo><mo>&#xA0;</mo><mi>P</mi><mo>,</mo><mi>Q</mi><mo>&#xA0;</mo><mo>)</mo><mo>=</mo><msqrt></msqrt></math> <input type="number" name=""> = <input type="number" name=""> </p>
								<p>La distancia del punto <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi><mo>(</mo><mo>&#xA0;</mo><mo>-</mo><mn>1</mn><mo>,</mo><mo>&#xA0;</mo><mn>6</mn><mo>&#xA0;</mo><mo>)</mo></math> a la recta <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo><mn>2</mn><mi>x</mi><mo>+</mo><mn>3</mn></math> es <b>2.24</b></p>
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
