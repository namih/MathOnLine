<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_1.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<p>¿Cuál es la raíz cúbica de 216?</p>
	<p>Encuentra los factores primos de 216 y escribe la cantidad como producto:</p>
	<div class="table-responsive">
		<math xmlns="http://www.w3.org/1998/Math/MathML">
			<mroot><mn>216</mn><mn>3</mn></mroot><mo>=</mo><mroot><mrow><mn>2</mn><mo>&#xA0;</mo><mi>X</mi><mo>&#xA0;</mo><mn>2</mn><mo>&#xA0;</mo><mi>X</mi><mo>&#xA0;</mo><mn>2</mn><mo>&#xA0;</mo><mi>X</mi><mo>&#xA0;</mo><mn>3</mn><mo>&#xA0;</mo><mi>X</mi><mo>&#xA0;</mo><mn>3</mn><mo>&#xA0;</mo><mi>X</mi><mo>&#xA0;</mo><mn>3</mn></mrow><mn>3</mn></mroot><mo>=</mo><mo>&#xA0;</mo><mn>2</mn><mo>&#xA0;</mo><mi>X</mi><mo>&#xA0;</mo><mn>3</mn>
		</math>
		<br /><br />
		<math xmlns="http://www.w3.org/1998/Math/MathML">
			<mo>&#xA0;</mo><msup><mn>2</mn><mn>3</mn></msup><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mi>X</mi><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><mo>&#xA0;</mo><msup><mn>3</mn><mn>3</mn></msup>
		</math>
	</div>
	<br /><br />
	 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:20%; margin:0 auto;">
            <thead>
                <tr class="success">
                    <th>216</th>
                    <th>Factor</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="216" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1"  />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base2" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura2" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base3" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura3" />
            		</td>
            	</tr> 
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base4" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura4" />
            		</td>
            	</tr> 
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base5" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura5" />
            		</td>
            	</tr> 
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base6" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura6" />
            		</td>
            	</tr> 
            </tbody>
        </table>
        <br /><br />
	<label>La raíz cúbica de 216 es de 2 X 3 =</label> <input type="text" id="raiz"/>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="valida4();" value="Verificar" />
	<br />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
