 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/factorizacion/diapositiva_19.js"></script>
<div class="container-fluid">
	<div>
		<p> Cuando un número es factor de otro, se dice que este es múltiplo del primero.
			Por ejemplo, sabemos que 2 es divisor  de 18. Decimos entonces que 18 es múltiplo de 2.
			El 14 no es múltiplo de 5, ya que 5 no divide de manera exacta al 14.
		</p>
		<p>¿Es múltiplo el 16 de 3?</p>
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
	<input type="button" class="btn btn-success btn-sm" onclick="valida21();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div>  
  </div>		

