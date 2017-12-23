<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/series/series.js"></script>
<div class="container-fluid">
	<div id="ejercicio1">
		<p>Encuentra el primer término <i>a</i> y la diferencia común <i>d</i> para los siguientes casos:</p>
		<p>Si el término 3 es 20 y el término 12 es 56,</p>
		<p>el primer término a es <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" />, y la diferencia común d es <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="4" />.</p>
		<input type="button" class="btn btn-success btn-sm" value="Más ejercicios" onclick="mostrar()" ><br />
		
	</div>	
	<div id="ejercicio2" style='display:none;'>
		<p>Encuentra el primer término <i>a</i> y la diferencia común <i>d</i> para los siguientes casos:</p>
		<p>Si el término 4 es 17 y el término 7 es 32,</p>
		<p>el primer término a es <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="3" size="4" />, y la diferencia común d es <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="4" size="4" />.</p>
		<input type="button" class="btn btn-success btn-sm" value="Más ejercicios" onclick="mostrar1()" ><br />
		
	</div>	
	<div id="ejercicio3" style='display:none;'>
		<p>Encuentra el primer término <i>a</i> y la diferencia común <i>d</i> para los siguientes casos:</p>
		<p>Si el término 2 es 21 y el término 5 es 9,</p>
		<p>el primer término a es <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="5" size="4" />, y la diferencia común d es <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="6" size="4" />.</p>
		
	</div>
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	</div>	
</div>