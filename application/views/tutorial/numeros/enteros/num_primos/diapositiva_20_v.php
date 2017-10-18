 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/diapositiva_1.js"></script>
 <link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/styles_numeros.css">
<div class="panel-body">
	<div class="container-fluid">
		<p>Otra manera de escribir un número como el producto de factores primos es mediante una tabla y preguntándonos si el número es divisible entre los primos consecutivos, empezando desde el 2:</p>
		<p>¿Es divisible el 150 entre 2?</p>
		<!--Imagen de arbol -->
		<div  class="container" id="radioS">
      			<label><input type="radio" name="optradio">SI</label>
    	</div>
    	<div class="container" id="radioS">
      			<label><input type="radio" name="optradio">NO</label>
    	</div>
	</div>
	<br/><br/><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="VERIFICAR" />
  </div>		
</div>
