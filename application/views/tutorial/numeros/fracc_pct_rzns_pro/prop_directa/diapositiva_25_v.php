<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
    <p>El procedimiento anterior se conoce como <b>regla de tres</b>. Para llevarlo a cabo se realiza lo siguiente. Observa el ejemplo:</p>
    <p>¿Qué volumen corresponde a 5.5 gramos de oro, si sabemos que a 1.5 gramos le corresponde 28.95 <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><msup><mi>m</mi><mn>3</mn></msup></math>?</p>
    <p>Primero escribimos dos razones equivalentes, cuidando que las cantidades queden en las columnas correspondientes:</p>
    <img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/prop_directa/diapositiva_25.png" align="center"/>
    <p>Recordando que los <b>productos cruzados son iguales, tenemos que:</b></p>
    <h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>5.5(28.95)</mi><mi>1.5</mi></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center; color: black;" id="1" size="3" /></h4>
    <p>Observa que el número que forma el producto cruzado con <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math>, es decir, 1.5 queda en el denominador.</p>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>