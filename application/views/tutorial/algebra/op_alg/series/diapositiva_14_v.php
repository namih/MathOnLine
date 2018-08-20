<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/series/series.js"></script>
<div class="container-fluid">
	<div>
		<p>La suma de los primeros <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi></math> términos de una sucesión aritmética es <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>3</mn><mi>n</mi><mo>&#xA0;</mo><mo>+</mo><mo>&#xA0;</mo><mn>4</mn><msup><mi>n</mi><mn>2</mn></msup></math>. Encuentra el primer y el cuarto término.</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>a</mi><mi>1</mi></msub><mo>=</mo></math> <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" />		<math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>a</mi><mi>4</mi></msub><mo>=</mo></math> <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="4" /></p>
		<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
		</div>
	</div>
 </div>		
