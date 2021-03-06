
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
					<p>En un triángulo rectángulo, uno de los ángulos agudos, <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math>, es menor que <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>3</mi></math> veces el otro ángulo menos <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>10</mi></math> grados. ¿Cuánto puede medir dicho ángulo?</p>
				</div>
				<div class="instruccion">
					<p>Si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math>   representa Ia medida del ángulo en grados, escribe Ia desigualdad que satisface <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math>.</p>
				</div>
				<br>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left">
                    <div class="paso_0">
						<p> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> 
						<select id="input_1" onchange="validaOptSelect('1','input_1','0');">
							<option value="00" ></option>
							<option value="10" > < </option>
							<option value="01" > > </option>
							<option value="11" > = </option>
						</select> <input class="n_float" type="text" name="input_2" id="input_2" onchange="validaInputRelacion('65','input_2','');" onkeypress="return validarSoloEntero(event);"> grados.
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
