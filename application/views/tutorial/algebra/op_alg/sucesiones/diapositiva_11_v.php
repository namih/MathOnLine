<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/sucesiones/sucesiones.js"></script>
<div class="container-fluid">
	<div id="ejercicio1">
		<p>En general, una sucesión se puede definir a partir de su primer término y la fórmula de recurrencia que permite calcular los siguientes.</p>
		<p>Ahora completa los términos de la sucesión: <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>a</mi><mi>n</mi></msub><mo>=</mo><msub><mi>a</mi><mrow><mi>n</mi><mo>-</mo><mn>1</mn></mrow></msub><mo>+</mo><mi>n</mi><mo>,</mo><mo>&#xA0;</mo><mi>p</mi><mi>a</mi><mi>r</mi><mi>a</mi><mo>&#xA0;</mo><mi>n</mi><mo>=</mo><mn>2</mn><mo>,</mo><mo>.</mo><mo>.</mo><mo>.</mo><mo>,</mo><mn>6</mn></math></p>
		<p>21, <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" />, 
			<input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="4" />, 
			<input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="3" size="4" />, 
			<input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="4" size="4" />, 
			<input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="5" size="4" /></p>
		<input type="button" class="btn btn-success btn-sm" value="Más ejercicios" onclick="mostrar()" ><br /><br />
	</div>
	<div id="ejercicio2" style='display:none;'>
		<p>En general, una sucesión se puede definir a partir de su primer término y la fórmula de recurrencia que permite calcular los siguientes.</p>
		<p>Ahora completa los términos de la sucesión: <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>a</mi><mi>n</mi></msub><mo>=</mo><msub><mi>a</mi><mrow><mi>n</mi><mo>-</mo><mn>1</mn></mrow></msub><mo>&#xD7;</mo><mi>n</mi><mo>,</mo><mo>&#xA0;</mo><mi>p</mi><mi>a</mi><mi>r</mi><mi>a</mi><mo>&#xA0;</mo><mi>n</mi><mo>=</mo><mn>2</mn><mo>,</mo><mo>.</mo><mo>.</mo><mo>.</mo><mo>,</mo><mn>6</mn></math></p>
		<p>1, <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="6" size="4" />, 
			<input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="7" size="4" />, 
			<input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="8" size="4" />, 
			<input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="9" size="4" />, 
			<input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="10" size="4" /></p>
		<input type="button" class="btn btn-success btn-sm" value="Más ejercicios" onclick="mostrar1()" ><br /><br />
	</div>
	<div id="ejercicio3" style='display:none;'>
		<p>En general, una sucesión se puede definir a partir de su primer término y la fórmula de recurrencia que permite calcular los siguientes.</p>
		<p>Ahora completa los términos de la sucesión: <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>a</mi><mi>n</mi></msub><mo>=</mo><msub><mi>a</mi><mrow><mi>n</mi><mo>-</mo><mn>1</mn></mrow></msub><mo>&#xD7;</mo><mn>5</mn><mo>,</mo><mo>&#xA0;</mo><mi>p</mi><mi>a</mi><mi>r</mi><mi>a</mi><mo>&#xA0;</mo><mi>n</mi><mo>=</mo><mn>2</mn><mo>,</mo><mo>.</mo><mo>.</mo><mo>.</mo><mo>,</mo><mn>6</mn></math></p>
		<p>2, <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="11" size="4" />, 
			<input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="12" size="4" />, 
			<input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="13" size="4" />, 
			<input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="14" size="4" />, 
			<input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="15" size="4" /></p>
		<br /><br />
	</div>
	<div id="correcta" style="display: none" class="alert alert-success">
	 	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
	</div>
</div>