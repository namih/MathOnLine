<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/pct_pt1.js"></script>

<div class="container-fluid">
	<p align="justify">En el estacionamiento E16 se encuentran ocupados 10 lugares de los 30 que hay disponibles. ¿Qué porcentaje se encuentra ocupado?</p>
	<img width="45%" style="margin-top: 20px" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/parking_e16_100.png" />
	<p align="justify">Para responder podemos escribir la siguiente equivalencia</p>
	<h3><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>10</mn><mn>30</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>x</mi><mn>100</mn></mfrac></math></h3>
	<p align="justify">Encuentra el valor de x y escríbelo redondeado hasta centésimos. Utiliza lo que sabes sobre fracciones equivalentes y proporcionalidad. Puedes utilizar la regla de tres. Si no recuerdas estos conceptos y procedimientos consulta los tutoriales de Equivalencia y Proporcionalidad (Regla de tres).</p>
	<h3>x = <input onchange="validar_41()" style="text-align: center" size="5" type="text" id="porcentaje"></h3>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
</div>