 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/factorizacion/diapositiva_14.js"></script>
<div class="container-fluid">
	<div>
		<p> Un número es factor o divisor de otro cuando lo divide de manera exacta, es decir, cuando, al efectuar la división, el residuo es cero.</p>
		<p>¿Es el 3 factor de 54?.</p>
	</div>
	<form method="post" action="#">
			<table>
				<td align="left">
					<form>
					    <div class="radio">
					      <label><input type="radio" id="optradio" name="optradio" value="S">SI</label>
					    </div>
					    <div class="radio">
					      <label><input type="radio" id="optradio" name="optradio" value="N">NO</label>
					    </div>
					</form>
				</td>
		  	</table>
	</form>
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div>  
</div>		
