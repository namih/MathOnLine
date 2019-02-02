<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_directa.js"></script>
<div class="container-fluid">
    <p>Veamos la regla de tres en otro ejemplo. Completa lo que falta y resuelve. ¿Qué masa corresponde a 35  <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><msup><mi>m</mi><mn>3</mn></msup></math> de oro, si sabemos que a 1.5 gramos le corresponden 28.95 <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>c</mi><msup><mi>m</mi><mn>3</mn></msup></math>?</p>
	<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/prop_directa/diapositiva_26.png" align="center"/>
    <h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mrow><mi>1.5</mi><mo>(</mo><mi>
    	<semantics>
		  <annotation-xml encoding="application/xhtml+xml">
			<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="1" />
		  </annotation-xml>
		</semantics>
   </mi><mo>)</mo></mrow><mi>
    	<semantics>
		  <annotation-xml encoding="application/xhtml+xml">
			<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="2" id="2" />
		  </annotation-xml>
		</semantics>
    </mi></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo></math><input type="text" style="text-align: center; color: black;" id="3" size="3" /></h4><br />
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>