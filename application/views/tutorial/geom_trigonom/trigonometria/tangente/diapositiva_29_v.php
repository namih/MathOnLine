<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_trigonom/trigonometria/tangente/tangente.js"></script>
<div class="container-fluid">
	<p>Cambia el valor de θ y encuentra cúanto vale la tangente de los siguientes ángulos:</p>
		<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
						<div class=" col-lg-12 col-md-12  col-xs-12">
							<img class="img-responsive" id="uno" src="<?php echo base_url(); ?>statics/img/tutorial/geom_trigonom/trigonometria/tangente/diapositiva_25.png" align="center"/>
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
				<h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi><mi>a</mi><mi>n</mi><mo>&#xA0;</mo><mfrac><mrow><mi>&#x3C0;</mi></mrow><mn>2</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac>
					<mi>
						<semantics>
						  <annotation-xml encoding="application/xhtml+xml">
						  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="1" />
						  </annotation-xml>
						</semantics>
					</mi><mi>
						<semantics>
						  <annotation-xml encoding="application/xhtml+xml">
						  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="2" />
						  </annotation-xml>
						</semantics>
					</mi></mfrac></math>
					<h6><label><input type="checkbox" id="definido1" > No está definido</label></h6>
				</h4>
				<h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi><mi>a</mi><mi>n</mi><mo>&#xA0;</mo><mfrac><mrow><mn>5</mn><mi>&#x3C0;</mi></mrow><mn>2</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac>
					<mi>
						<semantics>
						  <annotation-xml encoding="application/xhtml+xml">
						  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="3" />
						  </annotation-xml>
						</semantics>
					</mi><mi>
						<semantics>
						  <annotation-xml encoding="application/xhtml+xml">
						  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="4" />
						  </annotation-xml>
						</semantics>
					</mi></mfrac></math>
					<h6><label><input type="checkbox" id="definido2" > No está definido</label></h6>
				</h4>
				<h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi><mi>a</mi><mi>n</mi><mo>&#xA0;</mo><mo>-</mo><mfrac><mrow><mn>3</mn><mi>&#x3C0;</mi></mrow><mn>2</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac>
					<mi>
						<semantics>
						  <annotation-xml encoding="application/xhtml+xml">
						  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="5" />
						  </annotation-xml>
						</semantics>
					</mi><mi>
						<semantics>
						  <annotation-xml encoding="application/xhtml+xml">
						  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="6" />
						  </annotation-xml>
						</semantics>
					</mi></mfrac></math>
					<h6><label><input type="checkbox" id="definido3" > No está definido</label></h6>
				</h4>
			</div>	
			<div class="form-group has-feedback col-md-6  col-xs-12">
				<br />
				<h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi><mi>a</mi><mi>n</mi><mo>&#xA0;</mo><mfrac><mrow><mn>3</mn><mi>&#x3C0;</mi></mrow><mn>2</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac>
					<mi>
						<semantics>
						  <annotation-xml encoding="application/xhtml+xml">
						  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="7" />
						  </annotation-xml>
						</semantics>
					</mi><mi>
						<semantics>
						  <annotation-xml encoding="application/xhtml+xml">
						  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="8" />
						  </annotation-xml>
						</semantics>
					</mi></mfrac></math>
					<h6><label><input type="checkbox" id="definido4" > No está definido</label></h6>
				</h4>
				<h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi><mi>a</mi><mi>n</mi><mo>&#xA0;</mo><mo>-</mo><mfrac><mrow><mi>&#x3C0;</mi></mrow><mn>2</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac>
					<mi>
						<semantics>
						  <annotation-xml encoding="application/xhtml+xml">
						  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="9" />
						  </annotation-xml>
						</semantics>
					</mi><mi>
						<semantics>
						  <annotation-xml encoding="application/xhtml+xml">
						  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="10" />
						  </annotation-xml>
						</semantics>
					</mi></mfrac></math>
					<h6><label><input type="checkbox" id="definido5" > No está definido</label></h6>
				</h4>
				<h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>t</mi><mi>a</mi><mi>n</mi><mo>&#xA0;</mo><mo>-</mo><mfrac><mrow><mn>5</mn><mi>&#x3C0;</mi></mrow><mn>2</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac>
					<mi>
						<semantics>
						  <annotation-xml encoding="application/xhtml+xml">
						  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="11" />
						  </annotation-xml>
						</semantics>
					</mi><mi>
						<semantics>
						  <annotation-xml encoding="application/xhtml+xml">
						  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="12" />
						  </annotation-xml>
						</semantics>
					</mi></mfrac></math>
					<h6><label><input type="checkbox" id="definido6" > No está definido</label></h6>
				</h4>
			</div>
		</div>
		<div class=" col-lg-12 col-md-12  col-xs-12">	
			<div id="correcta" style="display: none" class="alert alert-success">
		 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
			</div>
		</div>
</div>