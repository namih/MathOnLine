<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/series/series.js"></script>
<div class="container-fluid">
	<div>
		<p>Encuentra los términos que se indican en los siguientes casos:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>a</mi><mi>n</mi></msub><mo>=</mo><msub><mi>a</mi><mrow><mi>n</mi><mo>-</mo><mn>1</mn></mrow></msub><mo>*</mo><mi>r</mi></math></p>
		<p>Si <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>a</mi><mn>1</mn></msub><mo>=</mo><mo>-</mo><mn>6</mn></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>r</mi><mo>=</mo><mo>-</mo><mfrac><mn>1</mn><mn>2</mn></mfrac></math></p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>a</mi><mn>2</mn></msub><mo>=</mo></math> <input type="text" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" />, 
		   <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>a</mi><mn>3</mn></msub><mo>=</mo></math> <input type="text" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="4" />, 
		   <math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>a</mi><mn>4</mn></msub><mo>=</mo></math> <input type="text" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="3" size="4" />
		</p>
		<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
		</div>
		<input type="button" class="btn btn-success btn-sm" onclick="" value="Más ejercicios" disabled/>
	</div>
 </div>		
