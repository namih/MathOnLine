 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/diapositiva_1.js"></script>
 <link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/styles_numeros.css">
<div class="panel-body">
	<div>
		<p> Tengo que construir un rectangulo cuya area sea 12 unidades cuadradas y solamente puedo utilizar números enteros para la medida de su base y de su altura. ¿ De cuántas maneras lo puedo hacer?. Recuerda que el área del rectángulo se obtiene  multiplicando su base por su altura.</p>
		<p>Coloca el número correspondiente en la base y la altura para obtener el area igual a 12.</p>
	</div>
	Base : <input type="text" id="columncount"/>
	Altura : <input type="text" id="rowcount" onkeyup="if (event.keyCode == 13) createTable()"/>
	<input type="button"  class="btn btn-success btn-sm"  onclick="createTable();" value="Create Table" />
	<br/><br/><br />
	<div id="box" align="center">
	</div>
  </div>		
</div>
