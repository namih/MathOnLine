<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/trigonometria/seno/seno.js"></script>
<div class="container-fluid">
	<p>Cambia el valor de θ y encuentra cúanto vale el seno de los siguientes ángulos:</p>
		<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<img class="img-responsive" id="uno" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/trigonometria/seno/diapositiva_28.png" align="center"/>
						</div>
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<h4 id="n"><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>0</mn><mo>&#xA0;</mo><mi>&#x3C0;</mi></math></h4>
						</div>					
						<div class="btn-group" id="opciones1">
							<button onclick="decrementar_49_1()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_49_1()" type="button" class="btn btn-info">></button>
						</div>
		</div>
			<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
				<div class="form-group has-feedback col-md-6  col-xs-12">
					<br />
					<h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>s</mi><mi>e</mi><mi>n</mi><mo>&#xA0;</mo><mfrac><mrow><mn>3</mn><mi>&#x3C0;</mi></mrow><mn>2</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math>
						<input onblur="acierto(<?php echo $paginador['actual']; ?>)" style="text-align:center" type="text" size="4" id="1" />
					</h4>
					<h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>s</mi><mi>e</mi><mi>n</mi><mo>&#xA0;</mo><mo>-</mo><mfrac><mi>&#x3C0;</mi><mn>2</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math>
						<input onblur="acierto(<?php echo $paginador['actual']; ?>)" style="text-align:center" type="text" size="4" id="2" />
					</h4>
					
				</div>	
				<div class="form-group has-feedback col-md-6  col-xs-12">
					<br />
					<h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>s</mi><mi>e</mi><mi>n</mi><mo>&#xA0;</mo><mfrac><mrow><mn>7</mn><mi>&#x3C0;</mi></mrow><mn>2</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math>
						<input onblur="acierto(<?php echo $paginador['actual']; ?>)" style="text-align:center" type="text" size="4" id="3" />
					</h4>
					<h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>s</mi><mi>e</mi><mi>n</mi><mo>&#xA0;</mo><mo>-</mo><mfrac><mrow><mn>5</mn><mi>&#x3C0;</mi></mrow><mn>2</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math>
						<input onblur="acierto(<?php echo $paginador['actual']; ?>)" style="text-align:center" type="text" size="4" id="4" />
					</h4>
					
				</div>
		<p>¿Qué observas?</p>
		</div>
		<div class=" col-lg-12 col-md-12  col-xs-12">	
			<div id="correcta" style="display: none" class="alert alert-success">
		 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
			</div>
		</div>
</div>