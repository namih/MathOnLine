<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/series/series.js"></script>
<div class="container-fluid">
	<div>
		<p>La suma de la sucesion aritmetica 4, … , 76 es 1,920</p>
		<p>Encuentra el número de términos y la diferencia común.</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>=</mo></math> <input type="text" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" /></p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>d</mi><mo>=</mo></math> <input type="text" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="1" /> / <input type="text" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="3" size="1" /></p>
		<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
		</div>
	</div>
 </div>		
