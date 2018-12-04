<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
 <script type="text/javascript" src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.css">

<script type="text/javascript" charset="utf-8">
    var applet0 = new GGBApplet({filename: base_url+"statics/ggb/tutorial/geom_ana/rectas_ecu_lineales/distancia_punto_a_recta/diapositiva_24.ggb","showToolbar":false, height: 300  }, true);
    window.addEventListener("load", function() { applet0.inject('applet_container0'); });
</script>
<div class="container-fluid">
 
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
		<div class="tema"><p>Distancia punto a recta.</p>
		</div>
		<div class="instruccion">
            <p>En este tutorial aprenderás a obtener la distancia de un punto <b><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi></math></b> a una recta <b><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>l</mi></math></b></p>
            <p>Para obtenerla: </p>
            <p>
                <ul style="list-style: decimal;">
                    <li>Encontraremos las ecuaciones de la recta y de la recta perpendicular a ésta que pasa por <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi></math></li>
                    <li>Después encontraremos el punto de intersección de las dos rectas.</li>
                    <li>Finalmente la distancia entre el último punto y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi></math></li>
                </ul>
            </p>
            <p><label>Veamos un ejemplo.</label></p>
		</div>
		<div id="boxEjemplos_1">
			<div id="box_1_ejemplo_0">
				<div class="pregunta"><p>¿Cuál es la distancia del punto <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>P</mi><mo>(</mo><mo>&#xA0;</mo><mo>-</mo><mn>3</mn><mo>,</mo><mo>&#xA0;</mo><mn>2</mn><mo>&#xA0;</mo><mo>)</mo></math> a la recta <b><math xmlns="http://www.w3.org/1998/Math/MathML"><mi mathvariant="bold-italic">l</mi></math></b>?</p>
				</div>
				<div class="instruccion">
				</div>
				<div class="row">
					<div align="left"></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left">
							<div class="paso_6">
								<p>Ahora hay que encontrar el punto de intersección de estas dos rectas</p>
								<p><span style="color:red;"><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo><mn>3</mn><mi>x</mi><mo>-</mo><mn>3</mn></math></span> <br>y<br> <span style="color:blue;"><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>=</mo><mo>-</mo><mn>0</mn><mo>.</mo><mn>33</mn><mi>x</mi><mo>+</mo><mn>1</mn></math></span></p>	
								<p>¿Cuál es el punto de intersección?</p>
								<p>Q( <math xmlns="http://www.w3.org/1998/Math/MathML">
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input class="n_float" type="text" name="input_1" id="input_1" onchange="validaInputRelacion('1','input_1','.2');" onkeypress="return validarSoloFlotante(event,'input_1');" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" size="3"/>
											</annotation-xml>
										</semantics>										
									</mi></math>, <math xmlns="http://www.w3.org/1998/Math/MathML">
									<mi>
										<semantics>
											<annotation-xml encoding="application/xhtml+xml">
												<input class="n_float" type="text" name="input_2" id="input_2" onchange="validaInputRelacion('0','input_2','.6');" onkeypress="return validarSoloFlotante(event,'input_2');" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" size="3"/>
											</annotation-xml>
										</semantics>										
									</mi></math> )</p>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_input_1"></div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_input_2"></div>
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