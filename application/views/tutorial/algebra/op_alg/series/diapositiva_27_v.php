<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/series/series.js"></script>
<div class="container-fluid">
	<div>
		<p>Si suponemos que cada 30 años nace una nueva generación de seres humanos, ¿cuántos antepasados directos (padres, abuelos, bisabuelos, etc) tenemos cada uno de nosotros desde hace 600 años?</p>
		<p><input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" /></p>
		<img class="img-responsive" width="35%" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/op_alg/series/diapositiva_27.png" align="center"/>
		<p>Hace 30 años nacieron 2 padres.</p>
		<p>Hace 60 años nacieron 4 abuelos.</p>
		<p>Hace 90 años nacieron 8 bisabuelos.</p>
		<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
		</div>
	</div>
 </div>		
