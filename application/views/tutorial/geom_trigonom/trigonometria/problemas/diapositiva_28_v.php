<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/trigonometria/problemas/problemas_trig.js"></script>
<div class="container-fluid">
	<div class="input-group col-lg-12 col-md-12 col-xs-12">
		<p>Estudia los ejercicios que están a continuación. Completa los datos que se te piden para poder seguir avanzado.</p>
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<p><b>5. Al despegar, un avión forma un ángulo de elevación de 18° con respecto al piso. Si su velocidad es de 300 Km/h,
				 ¿cuál será la altitud del avión después de 1 minuto?, ¿cuánto tardará el avión en alcanzar una altitud de 3000 metros?
			</b></p>
			<p>Despejamos c</p>
			<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>3</mn><mrow><mi>s</mi><mi>e</mi><mi>n</mi><mo>&#xA0;</mo><mn>18</mn><mo>&#xB0;</mo></mrow></mfrac></math></p>
			<p>Evaluamos el seno de 18°</p>
			<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>3</mn><mi>
			<semantics>
				  <annotation-xml encoding="application/xhtml+xml">
				  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="1" placeholder="0.3090" disabled/>
				  </annotation-xml>
			</semantics>
			</mi></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="2" size="4" placeholder="9.71" disabled/></p>
			<p>Así que el avión ha recorrido aproximadamente 9.71 km cuando está a una altura de 3 km. Como va a una velocidad de 300 km/h, es decir, 5 km/min, entonces ha tardado</p>
			<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>d</mi><mi>v</mi></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mn>9</mn><mo>.</mo><mn>71</mn>
				</mrow><mn>5</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="3" size="4"/></p>
		</div>
		<div class="form-group has-feedback col-md-6  col-xs-12">
			<br />
			<br />
			<br />
			<img class="img-responsive" width="90%" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/trigonometria/problemas/diapositiva_27.png" align="center"/>
		</div>
	</div>
	<div id="resultado" style='display:none;'>
				<p>Así que el avión tarda 1.942 minutos en alcanzar una altura de 3000 metros.</p>
	</div>
</div>
