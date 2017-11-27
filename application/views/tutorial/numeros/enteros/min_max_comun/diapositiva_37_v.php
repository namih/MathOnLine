<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_1.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<p>En ocasiones podemos utilizar el resultado de la raiz de un número para encontrar la raíz de otro número. Por ejemplo, si sabemos que <math xmlns="http://www.w3.org/1998/Math/MathML"><msqrt><mn>1296</mn></msqrt><mo>=</mo><mn>36</mn></math>,
		podemos encontrar <math xmlns="http://www.w3.org/1998/Math/MathML"><msqrt><mn>5184</mn></msqrt><mo>.</mo></math>
		Encuentra los primeros dos factores de 5184:
	</p>
	<p>Esto quiere decir</p>
	<div class="table-responsive">
		<input type="text" id="num1" /> <label> X </label><input type="text" id="num2" /> <label> X 1296 = 5184. </label>
		<br /><br />
		<input type="text" id="num3" /> <label> X 1296 = 5184. </label>
		<br /> <br />
		<p>Entonces podemos escribir</p>
		<math xmlns="http://www.w3.org/1998/Math/MathML">
			<msqrt><mn>5184</mn></msqrt><mo>&#xA0;</mo><mo>=</mo><msqrt><mn>1296</mn><mo>&#xA0;</mo><mi>x</mi><mo>&#xA0;</mo><mn>4</mn></msqrt><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><msqrt><mn>1296</mn></msqrt><mo>&#xA0;</mo><mi>X</mi><mo>&#xA0;</mo><msqrt><mn>4</mn></msqrt><mo>&#xA0;</mo>
		</math>
		<br /><br />
		<p>Como sabemos que <math xmlns="http://www.w3.org/1998/Math/MathML"><msqrt><mn>1296</mn></msqrt><mo>&#xA0;</mo><mo>=</mo><mn>36</mn><mo>,</mo></math> entonces:</p>
		<math xmlns="http://www.w3.org/1998/Math/MathML">
			<msqrt><mn>5184</mn></msqrt><mo>&#xA0;</mo><mo>=</mo><msqrt><mn>1296</mn><mo>&#xA0;</mo><mi>x</mi><mo>&#xA0;</mo><mn>4</mn></msqrt><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><msqrt><mn>1296</mn></msqrt><mo>&#xA0;</mo><mi>X</mi><mo>&#xA0;</mo><msqrt><mn>4</mn></msqrt><mo>&#xA0;</mo><mo>&#x2009;</mo><mo>=</mo>
		</math> <input type="text" id="raiz1"/> <label> X </label> <input type="text" id="raiz2"/><label> = </label> <input type="text" id="raiz3"/>
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
            			<input class="input-sm2" type="text" id="base1" value="5184" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" />
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
            </tbody>
        </table>
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
