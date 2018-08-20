
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
				<div class="pregunta" style="font-weight: normal; ">
					<p>Una compañía de publicidad determina que el costo por publicar cada ejemplar de una revista es de $1.50.<br> El ingreso que recibe de Ia distribución es de $1.40 por revista. El ingreso por publicación es del 10% de los ingresos recibidos por Ia distribución para todos los ejemplares vendidos por arriba de 10000. <br> ¿Cuál es el número mínimo de revistas que deben venderse para que la compañía obtenga utilidades?</p>
				</div>
				<div class="instruccion">
					<p>Si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>r</mi></math> representa el número de revistas que vende, escribe la desigualdad que corresponde a tener utilidades.</p>
				</div>
				<br>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left">
                    <div class="paso_0">
						<p> <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>r</mi></math> 
						<select id="input_1" onchange="validaOptSelect('0','input_1','1');">
							<option value="00" ></option>
							<option value="10" > < </option>
							<option value="01" > > </option>
							<option value="11" > = </option>
							<option value="001" > <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2265;</mo></math> </option>
							<option value="010" > <math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#x2264;</mo></math> </option>
						</select> <input class="n_float" type="text" name="input_2" id="input_2" onchange="validaInputRelacion('35','input_2','000');" onkeypress="return validarSoloEntero(event);"> revistas.
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
