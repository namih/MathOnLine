<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/prop_inversa.js"></script>
<div class="container-fluid">
	<p>Si el número de pintores, en lugar de ser 2, fuera 3, ¿cuánto tiempo tardarian?</p>
		<form method="post" action="#">
			<table>
				<td align="left">
					<input type="checkbox" id="1" /> Más de 4 dias<br />
					<input type="checkbox" id="2" /> Menos de 4 dias pero más de 2 dias<br />
					<input type="checkbox" id="3" /> Menos que 2 dias<br /><br />
				</td>
			</table>
	</form>
	<p>¿Cómo podemos calcular el tiempo exacto que tardan 3 pintores en terminar el trabajo? Observa que, en este caso, el número de pintores aumenta de 2 a 3, es decir, aumenta 1 1/2 veces (2 x 1 1/2 = 3). El tiempo por lo tanto disminuye también 1.5 veces. Para calcularlo podemos dividir el tiempo original (4 dias) entre 1.5:</p>
	<h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mrow><mn>4</mn><mo>&#xA0;</mo><mi>d</mi><mi>i</mi><mi>a</mi><mi>s</mi></mrow><mrow><mn>1</mn><mstyle displaystyle="true"><mfrac><mn>1</mn><mn>2</mn></mfrac></mstyle></mrow></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mn>8</mn><mn>3</mn></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mi>
		<semantics>
		  <annotation-xml encoding="application/xhtml+xml">
			<input onblur="acierto(<?php echo $paginador['actual']; ?>)" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="1" id="1" />
		  </annotation-xml>
		</semantics>
	</mi><mo>&#xA0;</mo><mfrac><mi>
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
	</mi></mfrac></math></h4>
	<input type="button" class="btn btn-success btn-sm" onclick="acierto(<?php echo $paginador['actual']; ?>)" value="VERIFICAR" /><br />
	<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
 	</div>
 	<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
 	</div>
</div>