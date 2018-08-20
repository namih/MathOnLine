<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_15.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid" id="div_1" style="display: block">
	<p>Encuentra las raíces que se solicitan, identificando los factores primos del entero</p>
	<div class="table-responsive div-border0">
		<math xmlns="http://www.w3.org/1998/Math/MathML">
			<mroot><mn>512</mn><mn>3</mn></mroot>
		</math> <label> = </label> <input class="input-sm input-top5" size="15" type="text" id="1" />
	</div>
	<br /><br />
	 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:20%; margin:0 auto;">
            <thead>
                <tr class="success">
                    <th>Número</th>
                    <th>Factor</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="512" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1"  onblur="valida_factor(1,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base2" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura2"  onblur="valida_factor(2,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base3" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura3" onblur="valida_factor(3,this)"/>
            		</td>
            	</tr> 
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base4" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura4" onblur="valida_factor(4,this)" />
            		</td>
            	</tr> 
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base5" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura5" onblur="valida_factor(5,this)" />
            		</td>
            	</tr> 
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base6" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura6"  onblur="valida_factor(6,this)"/>
            		</td>
            	</tr> 
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base7" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura7"  onblur="valida_factor(7,this)"/>
            		</td>
            	</tr> 
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base8" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura8"  onblur="valida_factor(8,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base9" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura9"  onblur="valida_factor(9,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base10" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura10" readonly="" onblur="valida_factor(10,this)"/>
            		</td>
            	</tr>
            </tbody>
        </table>
        <br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar39();" value="Verificar" />
	<input type="button" class="btn btn-success btn-sm" onclick="ejercicio2();" value="Más ejercicios" />	
	<br />
	
</div>
<div class="container-fluid" id="div_2" style="display: none">
	<p>Encuentra las raíces que se solicitan, identificando los factores primos del entero</p>
	<div class="table-responsive div-border0">
		<math xmlns="http://www.w3.org/1998/Math/MathML">
			<mroot><mn>729</mn><mn>3</mn></mroot>
		</math> <label> = </label> <input class="input-sm input-top5" size="15" type="text" id="2" />
	</div>
	<br /><br />
	 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:20%; margin:0 auto;">
            <thead>
                <tr class="success">
                    <th>Número</th>
                    <th>Factor</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base11" value="729" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura11"  onblur="valida_factor(11,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base12" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura12"  onblur="valida_factor(12,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base13" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura13" onblur="valida_factor(13,this)"/>
            		</td>
            	</tr> 
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base14" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura14" onblur="valida_factor(14,this)" />
            		</td>
            	</tr> 
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base15" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura15" onblur="valida_factor(15,this)" />
            		</td>
            	</tr> 
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base16" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura16"  onblur="valida_factor(16,this)"/>
            		</td>
            	</tr> 
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base17" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura17"  readonly/>
            		</td>
            	</tr> 
            </tbody>
        </table>
        <br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar39_1();" value="Verificar" />
	<input type="button" class="btn btn-success btn-sm" onclick="ejercicio3();" value="Más ejercicios" />		
	<br />
	
</div>
<div class="container-fluid" id="div_3" style="display: none">
	<p>Encuentra las raíces que se solicitan, identificando los factores primos del entero</p>
	<div class="table-responsive div-border0">
		<math xmlns="http://www.w3.org/1998/Math/MathML">
			<mroot><mn>2197</mn><mn>3</mn></mroot>
		</math> <label> = </label> <input class="input-sm input-top5" size="15" type="text" id="3" />
	</div>
	<br /><br />
	 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:20%; margin:0 auto;">
            <thead>
                <tr class="success">
                    <th>Número</th>
                    <th>Factor</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base21" value="2197" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura21"  onblur="valida_factor(21,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base22" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura22"  onblur="valida_factor(22,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base23" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura23" onblur="valida_factor(23,this)"/>
            		</td>
            	</tr> 
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base24" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura24" readonly />
            		</td>
            	</tr> 
            	
            </tbody>
        </table>
        <br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar39_2();" value="Verificar" />
	<br />
	
</div>
<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
</div> 
