<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/trigonometria/seno/seno.js"></script>
<script src="https://cdn.geogebra.org/apps/deployggb.js"></script>
<script type="text/javascript" charset="utf-8">
	var applet = new GGBApplet({filename: base_url+"statics/ggb/circunferencia/seno.ggb","showToolbar":false, height: 225, "showMenuBar": false}, true);
	window.addEventListener("load", function() {
        applet.inject('applet_container');	
    });
</script>
<div class="container-fluid">
	<div id="inicio" class="input-group col-lg-12 col-md-12 col-xs-12">
		<p>Seguramente observaste, en las actividades anteriores, que el valor del seno de θ se repite periódicamente.θ</p>
		<p>No importa con cuál valor de θ empieces, observa cómo conforme cambias el ángulo, sen θ varía hasta que llegues a un valor de θ para el cual sen θ es el mismo con el que iniciaste.</p>
		<p>A la diferencia entre los valores de  para los cuales, se completa un ciclo, es decir para los cuales el valor de sen  regresa al inicial se le conoce como periodo. Encuentra el valor del periodo de esta función: 
			<input onblur="acierto(<?php echo $paginador['actual']; ?>)" style="text-align:center" type="text" size="4" id="1" /> 
			<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&#x3C0;</mi></math></p>
	</div>
	<div id="respuesta" class="input-group col-lg-12 col-md-12 col-xs-12" style='display:none;'>
		<p>Un ciclo completo, por ejemplo, que empieza y termina con sen θ = 0, tiene una longitud de 2
			<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&#x3C0;</mi></math>.</p>
		<p>Esto quiere decir que cada 2<math xmlns="http://www.w3.org/1998/Math/MathML"><mi>&#x3C0;</mi></math> radianes
			se va a repetir el mismo valor de sen θ. A este valor se le conoce como el periodo de la función sen θ.</p>
		<p>¿Cuál es el máximo valor que puede tomar sen θ?
			<input onblur="acierto(<?php echo $paginador['actual']; ?>)" style="text-align:center" type="text" size="4" id="2" /></p>
		<p>¿Cuál es el mínimo valor que puede tomar sen θ?
			<input onblur="acierto(<?php echo $paginador['actual']; ?>)" style="text-align:center" type="text" size="4" id="3" /></p>
		<p>Al rango de valores entre los que la función sen θ puede variar se le conoce como la amplitud de la función.</p>
		<div id="correcta" style="display: none" class="alert alert-success">
		 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
		</div>
	</div>
	<div align="center" id="applet_container" >
	</div>
</div>