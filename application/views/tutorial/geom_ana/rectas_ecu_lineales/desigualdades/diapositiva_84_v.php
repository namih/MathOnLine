
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
					<p>En las semanas anteriores, Rodrigo ahorró <b><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>5</mn></mfrac></math></b> partes de su sueldo la primera semana, <b><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>4</mn></mfrac></math></b> de su sueldo la segunda y <b><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>3</mn></mfrac></math></b> de su sueldo la tercera. Si la semana próxima ahorra <b><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>3</mn></mfrac></math></b> de su sueldo tendrá en su cuenta más de <b>$2500</b>. ¿cuándo puede ser su sueldo semanal?</p>
					<p>Usa la letra <b><math xmlns="http://www.w3.org/1998/Math/MathML"><mo mathvariant="bold">&#xA0;</mo><mi mathvariant="bold-italic">s</mi><mo mathvariant="bold">&#xA0;</mo></math></b> para representar el sueldo de Rodrigo.</p>
				</div>
				<div class="instruccion">
					<p>Escribe la desigualdad que representa al problema. Escribe las fracciones en el mismo orden en el que aparecen en el texto.</p>
				</div>
				<br>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left">
                    <div class="paso_0">
						<p>
							<math xmlns="http://www.w3.org/1998/Math/MathML"><mo mathvariant="bold">&#xA0;</mo><mo mathvariant="bold">&#xA0;</mo><mfrac><mi mathvariant="bold">
                                <semantics>
                                    <annotation-xml encoding="application/xhtml+xml">
                                        <input class="n_float" type="text" name="input_1" id="input_1" onchange="validaInputRelacion('2','input_1','');" onkeypress="return validarSoloEntero(event);" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" size="3"/>
                                    </annotation-xml>
                                </semantics> 								
							</mi><mi mathvariant="bold">
                                <semantics>
                                    <annotation-xml encoding="application/xhtml+xml">
                                        <input class="n_float" type="text" name="input_2" id="input_2" onchange="validaInputRelacion('5','input_2','');" onkeypress="return validarSoloEntero(event);" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" size="3"/>
                                    </annotation-xml>
                                </semantics> 								
							</mi></mfrac><mo mathvariant="bold">&#xA0;</mo><mo mathvariant="bold">&#xA0;</mo><mo mathvariant="bold">&#xA0;</mo><mi mathvariant="bold-italic">s</mi><mo mathvariant="bold">&#xA0;</mo><mo mathvariant="bold">+</mo><mo mathvariant="bold">&#xA0;</mo><mo mathvariant="bold">&#xA0;</mo><mo mathvariant="bold">&#xA0;</mo><mfrac><mi mathvariant="bold">
                                <semantics>
                                    <annotation-xml encoding="application/xhtml+xml">
                                        <input class="n_float" type="text" name="input_3" id="input_3" onchange="validaInputRelacion('1','input_3','');" onkeypress="return validarSoloEntero(event);" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" size="3"/>
                                    </annotation-xml>
                                </semantics> 								
							</mi><mi mathvariant="bold">
                                <semantics>
                                    <annotation-xml encoding="application/xhtml+xml">
                                        <input class="n_float" type="text" name="input_4" id="input_4" onchange="validaInputRelacion('4','input_4','');" onkeypress="return validarSoloEntero(event);" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" size="3"/>
                                    </annotation-xml>
                                </semantics> 								
							</mi></mfrac><mo mathvariant="bold">&#xA0;</mo><mo mathvariant="bold">&#xA0;</mo><mo mathvariant="bold">&#xA0;</mo><mi mathvariant="bold-italic">s</mi><mo mathvariant="bold">&#xA0;</mo><mo mathvariant="bold">+</mo><mo mathvariant="bold">&#xA0;</mo><mo mathvariant="bold">&#xA0;</mo><mo mathvariant="bold">&#xA0;</mo><mfrac><mi mathvariant="bold">
                                <semantics>
                                    <annotation-xml encoding="application/xhtml+xml">
                                        <input class="n_float" type="text" name="input_5" id="input_5" onchange="validaInputRelacion('1','input_5','');" onkeypress="return validarSoloEntero(event);" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" size="3"/>
                                    </annotation-xml>
                                </semantics> 								
							</mi><mi mathvariant="bold">
                                <semantics>
                                    <annotation-xml encoding="application/xhtml+xml">
                                        <input class="n_float" type="text" name="input_6" id="input_6" onchange="validaInputRelacion('3','input_6','');" onkeypress="return validarSoloEntero(event);" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" size="3"/>
                                    </annotation-xml>
                                </semantics> 								
							</mi></mfrac><mo mathvariant="bold">&#xA0;</mo><mo mathvariant="bold">&#xA0;</mo><mo mathvariant="bold">&#xA0;</mo><mi mathvariant="bold-italic">s</mi><mo mathvariant="bold">&#xA0;</mo><mo mathvariant="bold">+</mo><mo mathvariant="bold">&#xA0;</mo><mo mathvariant="bold">&#xA0;</mo><mo mathvariant="bold">&#xA0;</mo><mfrac><mi mathvariant="bold">
                                <semantics>
                                    <annotation-xml encoding="application/xhtml+xml">
                                        <input class="n_float" type="text" name="input_7" id="input_7" onchange="validaInputRelacion('1','input_7','');" onkeypress="return validarSoloEntero(event);" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" size="3"/>
                                    </annotation-xml>
                                </semantics> 								
							</mi><mi mathvariant="bold">
                                <semantics>
                                    <annotation-xml encoding="application/xhtml+xml">
                                        <input class="n_float" type="text" name="input_8" id="input_8" onchange="validaInputRelacion('3','input_8','');" onkeypress="return validarSoloEntero(event);" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" size="3"/>
                                    </annotation-xml>
                                </semantics> 								
							</mi></mfrac><mo mathvariant="bold">&#xA0;</mo><mo mathvariant="bold">&#xA0;</mo><mo mathvariant="bold">&#xA0;</mo><mi mathvariant="bold-italic">s</mi><mo mathvariant="bold">&#xA0;</mo><mo mathvariant="bold">&#xA0;</mo><mo mathvariant="bold">&#xA0;</mo></math>
							<select id="input_9" onchange="validaOptSelect('1','input_9','0');" >
								<option value="00" ></option>
								<option value="10" > > </option>
								<option value="11" > < </option>
								<option value="001" > = </option>
							</select> <input class="n_float" type="text" name="input_10" id="input_10" onchange="validaInputRelacion('2500','input_10','');" onkeypress="return validarSoloEntero(event);">
						</p>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_input_1"></div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_input_2"></div>
                        		</div>
                        		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_input_3"></div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_input_4"></div>
                        		</div>
                        		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_input_5"></div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_input_6"></div>
                        		</div>
                        		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_input_7"></div>
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" align="left" id="error_input_8"></div>
                        		</div>
                        	</div>
                        	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left" id="error_input_9"></div>                        	
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6" align="left" id="error_input_10"></div>                        	
                        	</div>
                        	
                        </div>
                    </div><br>
                </div>				
				<br>
			</div><br><br>
		</div>
	</div>
	<br><br>
  </div>
