<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/trigonometria/coseno/coseno.js"></script>
<div class="container-fluid">
	<div id="inicio" class="input-group col-lg-12 col-md-12 col-xs-12">
		<p>Al igual que en las actividades para el seno de θ, seguramente observaste que el valor del coseno de θ se repite periódicamente.</p>
		
		<p>¿Cuál es en este caso el valor del periodo?
			<input onblur="acierto(<?php echo $paginador['actual']; ?>)" style="text-align:center" type="text" size="4" id="1" /> 
			<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&#x3C0;</mi></math></p>
		<img class="img-responsive" id="uno" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_29.png" align="center"/>
	</div>
	<div id="respuesta" class="input-group col-lg-12 col-md-12 col-xs-12" style='display:none;'>
		<p>Un ciclo completo, por ejemplo, que empieza y termina con cos θ = 1, tiene una longitud de 2
			<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&#x3C0;</mi></math>.</p>
		<p>Esto quiere decir que cada 2<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&#x3C0;</mi></math> radianes
			se va a repetir el mismo valor de cos θ. A este valor se le conoce como el periodo de la función cos θ.</p>
		<p>¿Cuál es el máximo valor que puede tomar cos θ?
			<input onblur="acierto(<?php echo $paginador['actual']; ?>)" style="text-align:center" type="text" size="4" id="2" /></p>
		<p>¿Cuál es el mínimo valor que puede tomar cos θ?
			<input onblur="acierto(<?php echo $paginador['actual']; ?>)" style="text-align:center" type="text" size="4" id="3" /></p>
		<p>Al rango de valores entre los que la función cos θ puede variar se le conoce como la amplitud de la función.</p>
		<img class="img-responsive" id="uno" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/trigonometria/coseno/diapositiva_29.png" align="center"/>
		<div id="correcta" style="display: none" class="alert alert-success">
		 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
		</div>
	</div>
</div>