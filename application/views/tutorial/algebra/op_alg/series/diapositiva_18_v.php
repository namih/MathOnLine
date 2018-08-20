<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/series/series.js"></script>
<div class="container-fluid">
	<div>
		<p>Tengo dos opciones de trabajo: la empresa A me ofrece $25,000 al año y un aumento de $1,200 anuales; la empresa B me ofrece $28,000 al año y un aumento de $800 anuales.</p>
		<p>En un período de 15 años, ¿cuánto recibiré de cada empresa?</p>
		<p>Empresa A: <input onblur="acierto(<?php echo $paginador['actual']; ?>)" type="text" style="text-align: center" id="1" size="4" /></p>
		<p>Empresa B: <input onblur="acierto(<?php echo $paginador['actual']; ?>)" type="text" style="text-align: center" id="2" size="4" /></p>
		<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
		</div>
	</div>
 </div>		
