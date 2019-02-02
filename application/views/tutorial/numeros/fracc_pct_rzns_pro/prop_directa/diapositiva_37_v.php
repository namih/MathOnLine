<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
	<p>Continuando con el ejercicio...</p>
	<p>Si <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> representa el número de miligramos de medicamento y <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi></math> representa la cantidad de mililitros de agua, escribe una ecuación que relacione <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> con <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi></math>.</p>
	<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" id="1" size="4" /><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math></p>
	<p>Utiliza la fórmula para calcular cuántos mililitros de agua se deben agregar si va a administrar 50 mg de medicamento:</p>
	<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>y</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" id="2" size="4" /></p>
	<p>Utiliza la fórmula para calcular cuántos miligramos de medicamento se deben utilizar para combinarse con 12 mililitros de agua:</p>
	<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" id="3" size="4" /></p></br>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>