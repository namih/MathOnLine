
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
					<p>La fábrica “Aceros del Norte” ofrece a un candidato a vendedor dos opciones para pactar su salario.<br> La primera opción es un sueldo de $120,000 fijos más una comisión del 2% sobre sus ventas anuales.<br> La segunda opción consiste únicamente en el pago de una comisión del 8% sobre sus ventas anuales.</p>
					<p> ¿Para qué montos de ventas anuales le conviene al candidato seleccionar Ia primera opción salarial? </p>
				</div>
				<div class="instruccion">
					<p>Si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>v</mi></math>  representa las ventas anuales, escribe la desigualdad que indica que le conviene más la primera opción.
					<a data-toggle="modal" data-target="#myModal"><span data-toggle="tooltip" title="" data-original-title=''>
					<i class="fa fa-info-circle fa-2x" aria-hidden="true"></i></span></a> 
					</p>
				</div>
				<br>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left">
                    <div class="paso_0">
						<p> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>v</mi></math> 
						<select id="input_1" onchange="validaOptSelect('0','input_1','1');">
							<option value="00" ></option>
							<option value="01" > < </option>
							<option value="11" > > </option>
							<option value="10" > = </option>
						</select> <input class="n_float" type="text" name="input_2" id="input_2" onchange="validaInputRelacion('2000','input_2','000');" onkeypress="return validarSoloEntero(event);">
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
		<p>La desigualdad que debes resolver es <br> <math xmlns="http://www.w3.org/1998/Math/MathML"><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">120</mn><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">000</mn><mo mathvariant="italic">&#xA0;</mo><mo mathvariant="italic">+</mo><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">0</mn><mo mathvariant="italic">.</mo><mn mathvariant="italic">02</mn><mo mathvariant="italic">&#xA0;</mo><mi>v</mi><mo mathvariant="italic">&#xA0;</mo><mo mathvariant="italic">&gt;</mo><mo mathvariant="italic">&#xA0;</mo><mn mathvariant="italic">0</mn><mo mathvariant="italic">.</mo><mn mathvariant="italic">08</mn><mo mathvariant="italic">&#xA0;</mo><mi>v</mi><mo mathvariant="italic">&#xA0;</mo></math></p>
      </div>
    </div>
  </div>
</div>