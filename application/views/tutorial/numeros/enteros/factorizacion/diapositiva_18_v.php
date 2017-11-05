 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/factorizacion/diapositiva_18.js"></script>
<div class="container-fluid">
	<div>
		¿De cuáles de los siguientes números es factor el 24?</p>
	</div>
	
	<div class="container-fluid">
		<table>
			<td align="left">
			  <form>
			    <div class="checkbox">
			      <label><input type="checkbox" id="1">1</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" id="2">2</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" id="3">3</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" id="4">4</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" id="6">6</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" id="7">7</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" id="8">8</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" id="12">12</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" id="24">24</label>
			    </div>
			  </form>
		 	</td>
		</table>
	</div>  
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
