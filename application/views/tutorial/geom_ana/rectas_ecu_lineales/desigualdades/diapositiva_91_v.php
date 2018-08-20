
<script type="text/javascript" src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/geom_ana/rectas _ecu_lineales/rectas_ecuaciones_lineales.css">
 
<div class="container-fluid">
 
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
		<div class="tema"><p>Desigualdades - Operaciones con desigualdades lineales de una variable</p>
		</div>
		<div class="instruccion">
			<p></p>
		</div>
		<div id="boxEjemplos_1">
			<div id="box_1_ejemplo_0">
				<div class="pregunta" style="font-weight: normal;">
					<p>Cada mes del año pasado una compañía tuvo utilidades mayores que $37.000 pero menores que $53000. El precio de los artículos que vende la compañía es en promedio de $270, y su costo de producción es de $150. Los costos fijos anuales fueron de $12000. Estima el intervalo en el que estuvieron el número de artículos vendidos en el año.</p>
				</div>
				<div class="instruccion">
					<p>Si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>v</mi></math>  representa el número de artículos vendidos en el año, escribe la desigualdad que satisface <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>v</mi></math>. 
					<a data-toggle="modal" data-target="#myModal"><span data-toggle="tooltip" title="" data-original-title=''>
					<i class="fa fa-info-circle fa-2x" aria-hidden="true"></i></span></a></p>
				</div>
				<br>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left">
                    <div class="paso_0">
						<p> <input class="n_float" type="text" name="input_1" id="input_1" onchange="validaInputRelacion('3800','input_1','');" onkeypress="return validarSoloEntero(event);"> <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&lt;</mo><mo>&#xA0;</mo><mi>v</mi><mo>&#xA0;</mo><mo>&lt;</mo></math> <input class="n_float" type="text" name="input_2" id="input_2" onchange="validaInputRelacion('5400','input_2','');" onkeypress="return validarSoloEntero(event);">
						</p>
                        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left" id="error_input_1"></div>                        	
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left" id="error_input_2"></div>                        	
                        	</div>
                    </div><br>
                </div>				
				<br>
			</div><br><br>
		</div>
	</div>
	<br><br>
  </div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Ayuda</h4>
      </div>
      <div class="modal-body">
		<p>Si <b>U</b> es la utilidad anual, entonces </p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">37</mn><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">000</mn><mo mathvariant="italic">&#xA0;</mo><mi>x</mi><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">12</mn><mo mathvariant="italic">&#xA0;</mo><mo mathvariant="italic">&lt;</mo><mo mathvariant="italic">&#xA0;</mo><mi>U</mi><mo mathvariant="italic">&#xA0;</mo><mo mathvariant="italic">&lt;</mo><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">53</mn><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">000</mn><mo mathvariant="italic">&#xA0;</mo><mi>x</mi><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">12</mn></math></p>
		<p>La utilidad anual es la diferencia de las ventas menos los costos. <br> Si <b>v</b> representa la cantidad de productos vendidos en el año, la utilidad es </p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mo mathvariant="italic">&#xA0;</mo><mi>U</mi><mo mathvariant="italic">&#xA0;</mo><mo mathvariant="italic">=</mo><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">270</mn><mo mathvariant="italic">&#xA0;</mo><mi>v</mi><mo mathvariant="italic">&#xA0;</mo><mo mathvariant="italic">-</mo><mo mathvariant="italic">&#xA0;</mo><mo mathvariant="italic">(</mo><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">150</mn><mo mathvariant="italic">&#xA0;</mo><mi>v</mi><mo mathvariant="italic">&#xA0;</mo><mo mathvariant="italic">+</mo><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">12</mn><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">000</mn><mo mathvariant="italic">&#xA0;</mo><mo mathvariant="italic">)</mo><mo mathvariant="italic">&#xA0;</mo><mo mathvariant="italic">&#xA0;</mo></math>
		</p>
		<p>La desigualdad que debes resolver es </p>
		<p>
			<math xmlns="http://www.w3.org/1998/Math/MathML"><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">37</mn><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">000</mn><mo mathvariant="italic">&#xA0;</mo><mi>x</mi><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">12</mn><mo mathvariant="italic">&#xA0;</mo><mo mathvariant="italic">&lt;</mo><mo mathvariant="italic">&#xA0;</mo><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">270</mn><mo mathvariant="italic">&#xA0;</mo><mi>v</mi><mo mathvariant="italic">&#xA0;</mo><mo mathvariant="italic">-</mo><mo mathvariant="italic">&#xA0;</mo><mo mathvariant="italic">(</mo><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">150</mn><mo mathvariant="italic">&#xA0;</mo><mi>v</mi><mo mathvariant="italic">&#xA0;</mo><mo mathvariant="italic">+</mo><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">12</mn><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">000</mn><mo mathvariant="italic">&#xA0;</mo><mo mathvariant="italic">)</mo><mo mathvariant="italic">&#xA0;</mo><mo mathvariant="italic">&#xA0;</mo><mo mathvariant="italic">&lt;</mo><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">53</mn><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">000</mn><mo mathvariant="italic">&#xA0;</mo><mi>x</mi><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">12</mn><mo mathvariant="italic">&#xA0;</mo></math>			
		</p>
      </div>
    </div>
  </div>
</div>