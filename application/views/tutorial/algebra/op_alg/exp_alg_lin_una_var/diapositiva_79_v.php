<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/exp_alg_lin_una_var/variables.js"></script>
<div class="container-fluid">
	<div>
		<p>Escribe el valor de la figura cuando n toma el valor que se indica:</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>&#xA0;</mo><mo>=</mo></math> 4</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>+</mo><mfrac><mi>n</mi><mn>3</mn></mfrac></math> = <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" /> / <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="4" /></p><br />
		<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/op_alg/exp_alg_lin_una_var/diapositiva_53.png" align="center"/><br />
		<input type="button" class="btn btn-success btn-sm" onclick="" value="Más ejercicios" disabled/>
		<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	 	</div>
	</div>
  </div>