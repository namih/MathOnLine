<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/series/series.js"></script>
<div class="container-fluid">
	<div id="ejercicio1">
		<p>Encuentra la suma de las siguientes sucesiones geométricas:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>10</mn><mo>,</mo><mo>&#xA0;</mo><mn>5</mn><mo>,</mo><mo>&#xA0;</mo><mn>2</mn><mfrac><mn>1</mn><mn>2</mn></mfrac><mo>,</mo><mo>&#xA0;</mo><mo>&#x2026;</mo></math> hasta 10 términos.</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>S</mi><mi>n</mi></msub><mo>=</mo></math> <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" /></p>
		<input type="button" class="btn btn-success btn-sm" value="Más ejercicios" onclick="mostrar()" ><br />
	</div>
	<div id="ejercicio2" style='display:none;'>
		<p>Encuentra la suma de las siguientes sucesiones geométricas:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn><mo>,</mo><mo>&#xA0;</mo><mn>3</mn><mo>,</mo><mo>&#xA0;</mo><mn>5</mn><mo>,</mo><mo>&#xA0;</mo><mo>&#x2026;</mo></math> hasta 10 términos.</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>S</mi><mi>n</mi></msub><mo>=</mo></math> <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="4" /></p>
		<input type="button" class="btn btn-success btn-sm" value="Más ejercicios" onclick="mostrar1()" ><br />
	</div>
	<div id="ejercicio3" style='display:none;'>
		<p>Encuentra la suma de las siguientes sucesiones geométricas:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>,</mo><mo>&#xA0;</mo><mn>4</mn><mo>,</mo><mo>&#xA0;</mo><mn>6</mn><mo>,</mo><mo>&#xA0;</mo><mo>&#x2026;</mo></math> hasta 10 términos.</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>S</mi><mi>n</mi></msub><mo>=</mo></math> <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="3" size="4" /></p>
	</div>
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	</div>
 </div>		
