<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_15.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">

	<div   class="col-md-12  col-xs-12" id="box" align="center">
		<p>Un carpintero quiere cortar una plancha de madera de 256 cm de largo y 96 cm de ancho, en cuadadros <b>lo más grandes posibles.</b> ¿De qué tamaño deberán ser los cuadros si queremos medidas enteras solamente?. ¿Cuántos cuadrados se obtendrán de la plancha de madera?</p>
		<!-- Colocar la imagen del rectangulo. ...... -->
		<p>El lado del cuadrado es de <input type="text" id="cm"/> cm. </p>
		<p>El número de cuadrados que se obtiene es <input type="text" id="cuadros"/></p>
	</div>	
	<input type="button" class="btn btn-success btn-sm" onclick="verificar12();" value="Verificar" />
	<br /><br /><br />
	
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
