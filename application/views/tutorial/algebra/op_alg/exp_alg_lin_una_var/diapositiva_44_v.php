<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/exp_alg_lin_una_var/variables.js"></script>
<div class="container-fluid">
	<div>
		<p>Simplifica la expresión:</p>
		<p>6x + 7x + 8 = <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" />x + 8</p><br />
		<input type="button" class="btn btn-success btn-sm" onclick="" value="Más ejercicios" disabled/>
		<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	 	</div>
	</div>
  </div>