 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/factorizacion/diapositiva_16.js"></script>
<div class="panel-body">
	<div>
		¿De cuáles de los siguientes números es factor el 7?</p>
	</div>
	<div class="container-fluid">
	  <form>
	    <div class="checkbox">
	      <label><input type="checkbox" id="14">14</label>
	    </div>
	    <div class="checkbox">
	      <label><input type="checkbox" id="17">17</label>
	    </div>
	    <div class="checkbox">
	      <label><input type="checkbox" id="21">21</label>
	    </div>
	    <div class="checkbox">
	      <label><input type="checkbox" id="28">28</label>
	    </div>
	    <div class="checkbox">
	      <label><input type="checkbox" id="37">37</label>
	    </div>
	    <div class="checkbox">
	      <label><input type="checkbox" id="41">41</label>
	    </div>
	  </form>
	</div>
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div>  
</div>
