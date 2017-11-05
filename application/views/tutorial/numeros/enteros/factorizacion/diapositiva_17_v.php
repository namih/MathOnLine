 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/factorizacion/diapositiva_17.js"></script>
<div class="container-fluid">
	<div>
		¿De cuáles de los siguientes números es factor el 8?</p>
	</div>
  	<div class="container-fluid">
	  <form>
	    <div class="checkbox">
	      <label><input type="checkbox" id="18">18</label>
	    </div>
	    <div class="checkbox">
	      <label><input type="checkbox" id="24">24</label>
	    </div>
	    <div class="checkbox">
	      <label><input type="checkbox" id="28">28</label>
	    </div>
	    <div class="checkbox">
	      <label><input type="checkbox" id="32">32</label>
	    </div>
	    <div class="checkbox">
	      <label><input type="checkbox" id="48">48</label>
	    </div>
	    <div class="checkbox">
	      <label><input type="checkbox" id="96">96</label>
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
