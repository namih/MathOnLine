<script src="<?php echo base_url(); ?>statics/js/tutorial/algebra/op_alg/series/series.js"></script>
<div class="container-fluid">
	<div>
		<p>La suma de la sucesion aritmetica 4, … , 76 es 1,920</p>
		<p>Encuentra el número de términos y la diferencia común.</p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>n</mi><mo>=</mo></math> <input type="text" style="text-align: center" onblur="acierto(<?php echo $paginador['actual']; ?>)" id="1" size="4" /></p>
		<p><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>d</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mi>
			<semantics>
				  <annotation-xml encoding="application/xhtml+xml">
				  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="2" />
				  </annotation-xml>
			</semantics>
		</mi><mi>
			<semantics>
				  <annotation-xml encoding="application/xhtml+xml">
				  		<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="3" />
				  </annotation-xml>
			</semantics>
		</mi></mfrac></math></p>
		<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
		</div>
	</div>
 </div>		
