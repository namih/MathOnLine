<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt1.js"></script>

<div class="container-fluid">
	<p align="justify">En el estacionamiento E16 se encuentran ocupados 10 lugares de los 30 que hay disponibles. ¿Qué porcentaje se encuentra ocupado?</p>
	<img width="45%" style="margin-top: 20px" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/parking_e16.png" />
	<p align="justify">Aproximadamente está ocupado el <input onchange="validar_40()" style="text-align: center" size="5" type="text" id="porcentaje"> %</p>
	<p align="justify">¿Cómo podemos saber con mayor exactitud el porcentaje?</p>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>