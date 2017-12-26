<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_15.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<p>El identificar los factores primos de un entero nos puede ayudar a encontrar raíces sin utilizar calculadora. ¿cuál es la raíz de 125</p>
	<p>Encuentra los factores primos de 125 y escribe la cantidad como producto:</p>
	<div class="table_responsive"><label>125 = </label> <input type="text" id="num1" /> <label> X </label><input type="text" id="num2" /> <label> X </label><input type="text" id="num3" /></div>
	<p>Podemos entonces escribir la cantidad en forma de producto:</p>
	<div class="table-responsive">
	<math xmlns="http://www.w3.org/1998/Math/MathML">
		<mroot>
			<mn>125</mn><mn>3</mn>
		</mroot><mo>=</mo>
		<mroot>
			<mrow><mn>5</mn><mi>x</mi><mn>5</mn><mi>x</mi><mn>5</mn></mrow>
			<mn>3</mn>
		</mroot><mo>=</mo><mn>5</mn>
	</math>
	</div>
	<br /><br />
	 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:30%; margin:0 auto;">
            <thead>
                <tr class="success">
                    <th>Número</th>
                    <th>Factor</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="125" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1"  onblur="valida_factor(1,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base2" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura2" onblur="valida_factor(2,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base3" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura3" onblur="valida_factor(3,this)"/>
            		</td>
            	</tr> 
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base4" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura4" readonly="" onblur="valida_factor(4,this)"/>
            		</td>
            	</tr> 
            </tbody>
        </table>
	<p>La raíz cúbica de 125 es de 5</p>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar34();" value="Verificar" />
	<br />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
