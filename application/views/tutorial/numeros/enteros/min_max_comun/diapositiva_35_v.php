<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_15.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<p>¿Cuál es la raíz cúbica de 216?</p>
	<p>Encuentra los factores primos de 216 y escribe la cantidad como producto:</p>
	<div class="table-responsive div-border0">
		<math xmlns="http://www.w3.org/1998/Math/MathML"><mroot><mn>216</mn><mn>3</mn></mroot><mo>=</mo><mroot><mrow><mn>2</mn><mo>&#xD7;</mo><mn>2</mn><mo>&#xD7;</mo><mn>2</mn><mo>&#xD7;</mo><mn>3</mn><mo>&#xD7;</mo><mn>3</mn><mo>&#xD7;</mo><mn>3</mn></mrow><mn>3</mn></mroot><mo>=</mo><mn>2</mn><mo>&#xD7;</mo><mn>3</mn></math>
		<br /><br />
		<math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>2</mn><mn>3</mn></msup><mo>&#xD7;</mo><msup><mn>3</mn><mn>3</mn></msup></math>
	</div>
	<br /><br />
	 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:20%; margin:0 auto;">
            <thead>
                <tr class="success">
                    <th>&nbsp;&nbsp;216&nbsp;&nbsp;</th>
                    <th>Factor</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="216" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" onblur="valida_factor(1,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base2" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura2" onblur="valida_factor(2,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base3" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura3" onblur="valida_factor(3,this)" />
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
            			<input class="input-sm2" type="text"  id="base6" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura6"  onblur="valida_factor(6,this)" />
            		</td>
            	</tr> 
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base7" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura7" readonly onblur="valida_factor(7,this)" />
            		</td>
            	</tr> 
            </tbody>
        </table>
        <br /><br />
	<label>La raíz cúbica de 216 es de <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>&#xD7;</mo><mn>3</mn><mo>=</mo></math></label> <input class="input-sm input-top5" size="15" type="text" id="1"/>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar35();" value="Verificar" />
	<br />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
