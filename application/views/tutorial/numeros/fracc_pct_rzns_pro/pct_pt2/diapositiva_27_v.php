<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt2.js"></script>

<div class="container-fluid">
	<p align="justify">La empleada de una tienda debe completar una factura para un cliente.</p>
	<p align="justify">En la factura, la empleada debe deslogar el IVA del precio del producto e incluir el precio sin IVA.</p>
	<p align="justify">Precio sin IVA <input onchange="validar_27_a()" placeholder="$0.00" style="text-align: right" size="10" type="text" id="sin_iva"></p>
	<p align="justify">IVA <input onchange="validar_27_b()" placeholder="$0.00" style="text-align: right" size="10" type="text" id="iva"></p>
	<p align="justify">Precio con IVA: $1,250.00</p>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>