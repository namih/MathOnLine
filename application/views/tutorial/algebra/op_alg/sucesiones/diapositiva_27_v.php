<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/sucesiones/sucesiones.js"></script>
<div class="container-fluid">
	<div>
		<p>En general, una sucesión se puede definir a partir de su primer término y la fórmula de recurrencia que permite calcular los siguientes.</p>
		<p>Ahora completa los términos de la sucesión: <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>a</mi><mi>n</mi></msub><mo>=</mo><mo>(</mo><mn>2</mn><msup><mo>)</mo><mrow><mo>(</mo><mn>10</mn><mo>-</mo><mi>n</mi><mo>+</mo><mn>1</mn><mo>)</mo></mrow></msup><mo>,</mo><mo>&#xA0;</mo><mi>p</mi><mi>a</mi><mi>r</mi><mi>a</mi><mo>&#xA0;</mo><mi>n</mi><mo>=</mo><mn>2</mn><mo>,</mo><mo>.</mo><mo>.</mo><mo>.</mo><mo>,</mo><mn>6</mn></math></p>
		<p>1024, <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" />, <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="4" />, <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="3" size="4" />, <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="4" size="4" />, <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="5" size="4" /></p>
	</div>
	<div id="correcta" style="display: none" class="alert alert-success">
	 	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	</div>
</div>