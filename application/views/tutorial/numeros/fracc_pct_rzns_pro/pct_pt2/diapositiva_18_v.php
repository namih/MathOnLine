<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt2.js"></script>

<div class="container-fluid">
	<p align="justify">Compras un artículo cuyo precio, antes del IVA, es de $125.00 ¿Cuánto tienes que pagar por el artículo? Supongamos que el IVA es del 16%</p>
	<p align="justify">Calcula el 16% de $125.00 <input onchange="validar_18_a()" style="text-align: center" size="5" type="text" id="iva"></p>
	<p align="justify">Suma el impuesto al precio del artículo para obtener lo que se tiene que pagar por el <input placeholder="$0.00" onchange="validar_18_b()" style="text-align: center" size="5" type="text" id="total"></p>
</div>
<br />
<br />
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>