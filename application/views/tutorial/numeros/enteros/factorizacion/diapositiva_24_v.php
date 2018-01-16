<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/factorizacion/diapositiva_24.js"></script>
<div class="container-fluid" id="div1" style="display:block">
	<div>
		<p> Encuentra todos los factores del 15. Escríbelos en las casillas.
		</p> 
		<br />
		<input type="text"  id="1"/>
		<input type="text"  id="2"/>
		<input type="text"  id="3"/>
		<input type="text"  id="4"/>
	</div>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="Verificar" />
	<input type="button" class="btn btn-success btn-sm" onclick="div1();" value="Más ejercicios" />
	
</div>
<div class="container-fluid" id="div2" style="display: none">
	<div>
		<p> Encuentra todos los factores del 20. Escríbelos en las casillas.
		</p> 
		<br />
		<input type="text" size="5"  id="11"/>
		<input type="text" size="5"  id="12"/>
		<input type="text" size="5"  id="13"/>
		<input type="text" size="5"  id="14"/>
		<input type="text" size="5" id="15"/>
		<input type="text" size="5" id="16"/>
	</div>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar2();" value="Verificar" />
	<input type="button" class="btn btn-success btn-sm" onclick="div2();" value="Más ejercicios" />
	
	
</div>
<div class="container-fluid" id="div3" style="display: none">
	<div>
		<p> Encuentra todos los factores del 28. Escríbelos en las casillas.
		</p> 
		<br />
		<input type="text" size="5" id="21"/>
		<input type="text" size="5" id="22"/>
		<input type="text" size="5" id="23"/>
		<input type="text" size="5" id="24"/>
		<input type="text" size="5" id="25"/>
		<input type="text" size="5" id="26"/>
		
	</div>
	<br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar3();" value="Verificar" />
	
</div>
<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 