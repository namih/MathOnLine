<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/series/series.js"></script>
<div class="container-fluid">
	<div>
		<p>Encuentra la suma de las siguiente sucesión aritmética:</p>
		<p>3, 5, 7, … , 21</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><msub><mi>S</mi><mi>n</mi></msub><mo>=</mo></math> <input type="text" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" /></p>
		<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
		</div>
		<input type="button" class="btn btn-success btn-sm" onclick="" value="Más ejercicios" disabled/>
	</div>
 </div>		