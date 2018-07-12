<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/rel_dec/des_val_abs.js"></script>

<div class="container-fluid">


		<div  align="center" class=" col-lg-12 col-md-12  col-xs-12">
			<p align="justify">Regresamos al problema inical de la introducción al valor absoluto. ¿En que lugares respecto a la estación de radio
			se puede colocar una nueva antena retransmisora para que no se pierda la calidad de la señal?. Si la señal se pierde en aproximadamente en
		  <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>25</mn><mo>&#xA0;</mo><mi>k</mi><mi>m</mi></math>, la antena debería colocarse a una distancia
		 	menor que <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>25</mn><mo>&#xA0;</mo><mi>k</mi><mi>m</mi></math> de la otra antena.</p>
			<br/>
			<p align="justify">¿Cuál es la relación matemática indica las posiciones , los valores de x, en los que se puede colocar la antena para que su
			distancia a la antena retransmisora sea menos que <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>25</mn><mo>&#xA0;</mo><mi>k</mi><mi>m</mi></math></p>
			<br/>

		</div>

		<div style="margin-bottom: 20px" align="left" class=" col-lg-12 col-md-12  col-xs-12">
			<p align="left">Elige la opción correcta: a) <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>-</mo><mn>25</mn></mrow></mfenced><mo>&lt;</mo><mn>10</mn></math>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>-</mo><mn>10</mn></mrow></mfenced><mo>&gt;</mo><mn>25</mn></math> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c) <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>-</mo><mn>10</mn></mrow></mfenced><mo>=</mo><mn>25</mn></math>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d) <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>-</mo><mn>10</mn></mrow></mfenced><mo>&lt;</mo><mn>25</mn></math> </p>
				<span>Respuesta: </span>
				<select id="opcion" onchange="respuesta_12 ()">
						<option value="0" id="r1">Elige:</a></option>
						<option value="1" id="r1">a</a></option>
						<option value="2" id="r2">b</a></option>
						<option value="3" id="r3">c</a></option>
						<option value="4" id="r4">d</a></option>
			</select>
		</div>
		<div style="display:none" align="left" class=" col-lg-12 col-md-12  col-xs-12" id="dos">
			<table>
					<tr align="center">
						<td>Resuelve la ecuación <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>-</mo><mn>10</mn></mrow></mfenced><mo>&lt;</mo><mn>25</mn></math> para encontrar las posiciones en las que se debe colocar la nueva antena</td>
						<td>&nbsp;&nbsp;</td>
						<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi><mo>&#xA0;</mo><mo>&#x2208;</mo><mo>&#xA0;</mo><mo>(</mo></math> <mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="intervalo_12_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_a" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi>
						<td>&nbsp;&nbsp;,&nbsp;&nbsp;</td>
						<td><h4><mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="intervalo_12_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_b" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>)</mo></math></h4></td>
					</tr>
			</table>
		</div>


		<div style="display:none" align="left" class=" col-lg-12 col-md-12  col-xs-12" id="recta_12"></div>

</div>

<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
</div>
