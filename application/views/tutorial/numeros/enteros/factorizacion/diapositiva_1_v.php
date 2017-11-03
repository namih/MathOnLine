 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/factorizacion/diapositiva_1.js"></script>
 <link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/styles_numeros.css">
<div class="container-fluid">
	<div>
		<p> Tengo que construir un rectangulo cuya area sea 12 unidades cuadradas y solamente puedo utilizar números enteros para la medida de su base y de su altura. ¿ De cuántas maneras lo puedo hacer?. Recuerda que el área del rectángulo se obtiene  multiplicando su base por su altura.</p>
		<p>Coloca el número correspondiente en la base y la altura para obtener el area igual a 12.</p>
	</div>
	Base : <input type="text" id="columncount"/>
	Altura : <input type="text" id="rowcount" onkeyup="if (event.keyCode == 13) createTable()"/>
	<input type="button"  class="btn btn-success btn-sm"  onclick="createTable();" value="Crear tabla" />
	<br/><br/><br />
	<div id="box" align="center">
	</div>
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div>
  </div>		
