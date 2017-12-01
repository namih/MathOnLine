<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/ecu_form_exp_id/balanza.js"></script>

<div class="container-fluid">
	<p>¿Cúanto debe de pesar X para que la balanza esté en equilibrio? Utiliza las flechas para agregar los pesos y equilibrar la balanza.</p>
	<p>El valor de X es: <input style="text-align: center" onchange="validar_2()" size="1" type="text" id="incognita"></p>
	<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
		<div class="btn-group" id="opciones">
			<button onclick="disminuir_2()" type="button" class="btn btn-primary"><</button>
			<button onclick="incrementar_2()" type="button" class="btn btn-primary">></button>
		</div>
	</div>
	<div>
		<img id="balanza" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/algebra/ecu_form_exp_id/balanza_0.png" />
	</div>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>