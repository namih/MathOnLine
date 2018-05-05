<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/trigonometria/problemas/problemas_trig.js"></script>
<div class="container-fluid">
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<p>Estudia los ejercicios que están a continuación. Completa los datos que se te piden para poder seguir avanzado.</p>
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<p><b>5. Al despegar, un avión forma un ángulo de elevación de 18° con respecto al piso. Si su velocidad es de 300 Km/h,
				 ¿cuál será la altitud del avión después de 1 minuto?, ¿cuánto tardará el avión en alcanzar una altitud de 3000 metros?
			</b></p>
			<p>Evaluamos el seno de 18° usando una calculadora, teniendo cuidado que esté trabajando en grados y no en radianes. (Utiliza 4 decimales de precisión)</p>
			<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>a</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mo>(</mo><mn>5</mn><mo>)</mo><mo>&#xA0;</mo><mo>(</mo></math><input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" />
				<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>)</mo><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="4" />
			</p>
			<div id="resultado" style='display:none;'>
				<p>Así que el avión va a una altura de 1.55 km, despues deun minuto. Esto contesta la primera pegunta.</p>
			</div>
		</div>
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<br />
			<br />
			<br />
			<div id="imagen">
				<img class="img-responsive" width="90%" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/trigonometria/problemas/diapositiva_21.png" align="center"/>
			</div>
			<div style='display:none;' id="imagen2">
				<img class="img-responsive" width="90%" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/trigonometria/problemas/diapositiva_24.png" align="center"/>
			</div>
		</div>
	</div>
</div>
