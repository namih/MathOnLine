<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/series/series.js"></script>
<div class="container-fluid">
	<div>
		<p>Encuentra el primer término a y la diferencia común d para los siguientes casos:</p>
		<p>Si el término 3 es 20 y el término 12 es 56,</p>
		<p>el primer término a es <input type="text" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" />, y la diferencia común d es <input type="text" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="4" />.</p>
		<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
		</div>
		<input type="button" class="btn btn-success btn-sm" onclick="" value="Más ejercicios" disabled/>
	</div>	
</div>