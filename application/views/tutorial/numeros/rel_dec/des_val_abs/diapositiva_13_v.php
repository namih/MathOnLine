<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/rel_dec/des_val_abs.js"></script>

<div class="container-fluid">

	<div  align="center" class=" col-lg-12 col-md-12  col-xs-12">
		<p align="justify">El valor absoluto se utiliza frecuentemente para describir niveles de tolerancia y de error en medición. Supón que tienes la tarea de cntrolar
		el desperdicio que se origina en el centro de corte de una companía que distribuye tela. Para un pedido es necesario cortar cuadrados de <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>4</mn><mo>.</mo><mn>8</mn><mi>m</mi></math>
		de un lado. Para un pedido es necesario cortar cuadrados de <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>4</mn><mo>.</mo><mn>8</mn><mi>m</mi></math>de lado.
		El cliente no acepta el área de los cuadros tenga un error menor al <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>%</mo></math>.La máquinaria
		de la fábrica tiene un error de cortado del <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>025</mn><mi>m</mi></math> en cualquier dirección. ¿Es posible cumplir con las espectativasdel cliente con la maquinaria?</p>
		<br/>
		<p align="justify">Para contestar esta pregunta es necesario encontrar el tamaño máximo del error de los cortes.Una vez que se conoce
		este error se puede calcular el error porcentual y compararlo con el <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>%</mo></math>.</p>
		<br/>
		<p align="justify">Denota el lado de un corte <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math>. La longitud real del lado de un corte es de <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>4</mn><mo>.</mo><mn>8</mn><mi>m</mi></math>.
		Elige la desigualdad que te permita calcular <math xmlns="http://www.w3.org/1998/Math/MathML"><mi>x</mi></math> sabiendo que el error debe ser menor a <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>025</mn></math>. </p>
	</div>

	<div style="margin-bottom: 20px" align="left" class=" col-lg-12 col-md-12  col-xs-12">
		<p align="left">Elige la opción correcta: a) <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>-</mo><mn>4</mn><mo>.</mo><mn>8</mn></mrow></mfenced><mo>&lt;</mo><mn>2</mn><mo>%</mo></math>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>-</mo><mn>0</mn><mo>.</mo><mn>025</mn></mrow></mfenced><mo>&lt;</mo><mn>4</mn><mo>.</mo><mn>8</mn></math> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c) <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>-</mo><mn>4</mn><mo>.</mo><mn>8</mn></mrow></mfenced><mo>&lt;</mo><mn>0</mn><mo>.</mo><mn>025</mn></math>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d) <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>+</mo><mn>4</mn><mo>.</mo><mn>8</mn></mrow></mfenced><mo>&lt;</mo><mn>0</mn><mo>.</mo><mn>025</mn></math> </p>
			<span>Respuesta: </span>
			<select id="opcion" onchange="respuesta_13 ()">
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
					<td>Resuelve la siguiente desigualdad: </td>
					<td><h4>&nbsp;&nbsp;&nbsp;&nbsp;<math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mi>x</mi><mo>-</mo><mn>4</mn><mo>.</mo><mn>8</mn></mrow></mfenced><mo>&lt;</mo><mn>0</mn><mo>.</mo><mn>025</mn></math>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4></td>
					<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>(</mo></math> <mi>
						<semantics>
							<annotation-xml encoding="application/xhtml+xml">
								<input onchange="intervalo_13_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_a" placeholder="0" />
							</annotation-xml>
						</semantics>
					</mi></h4></td>
					<td>&nbsp;&nbsp;,&nbsp;&nbsp;</td>
					<td><h4><mi>
						<semantics>
							<annotation-xml encoding="application/xhtml+xml">
								<input onchange="intervalo_13_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_b" placeholder="0" />
							</annotation-xml>
						</semantics>
					</mi><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>)</mo></math></h4></td>
				</tr>
		</table>
	</div>

	<div style="display:none" align="left" class=" col-lg-12 col-md-12  col-xs-12" id="tres">
		<table>
				<tr align="center">

					<td>Ahora encuentra el intervalo donde está <math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>x</mi><mn>2</mn></msup></math>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4></td>
					<td><h4><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>(</mo></math> <mi>
						<semantics>
							<annotation-xml encoding="application/xhtml+xml">
								<input onchange="intervalo_13_b ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_c" placeholder="0" />
							</annotation-xml>
						</semantics>
					</mi></h4></td>
					<td>&nbsp;&nbsp;,&nbsp;&nbsp;</td>
					<td><h4><mi>
						<semantics>
							<annotation-xml encoding="application/xhtml+xml">
								<input onchange="intervalo_13_b ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="entero_d" placeholder="0" />
							</annotation-xml>
						</semantics>
					</mi><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>)</mo></math></h4></td>
				</tr>
		</table>
	</div>

	<div style="display:none" align="left" class=" col-lg-12 col-md-12  col-xs-12" id="cuatro">
		<p align="justify">El valor absoluto se sa frecuentemente para describir niveles de tolerancia y de error de medición. Supón que tienes
		 la tarea de controlar el desperdicio que se origina en el centro de corte de una compañía que distribuye tela. Para un pedido
		 es necesario cortar cuadrados de <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>4</mn><mo>.</mo><mn>8</mn><mo>&#xA0;</mo><mi>m</mi></math> de lado. El cliente no acepta
		 que el área de los cuadros tenga un error menor a <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>%</mo></math>.
		 La maquinaria de la fábrica tiene un error de cortado de <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>025</mn><mo>&#xA0;</mo><mi>m</mi></math> en cualquier
		dirección . ¿Es posible cumplir con las epectativas del cliente con esta maquinaria?</p>
		<br/>
		<p align="justify">Así que el área de los cuadrados está entre este intervalo <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced><mrow><mn>22</mn><mo>.</mo><mn>801</mn><mo>,</mo><mo>&#xA0;</mo><mn>23</mn><mo>.</mo><mn>28</mn></mrow></mfenced></math></p>
		<br/>
		<p align="justify">El área del corte perfecto <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>4</mn><mo>.</mo><msup><mn>8</mn><mn>2</mn></msup><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mn>23</mn><mo>.</mo><mn>04</mn></math></p>
		<br/>
		<p align="justify">Veamos ahora el porcentaje de error cometido en cada uno de los extremos del intervalo anterior</p>
		<br/>
		<table>
			<tr>
				<td><h4>Calcular <math xmlns="http://www.w3.org/1998/Math/MathML"><mfenced open="|" close="|"><mrow><mn>23</mn><mo>.</mo><mn>04</mn><mo>-</mo><mn>22</mn><mo>.</mo><mn>801</mn></mrow></mfenced><mo>=</mo></math></h4></td>
				<td><h4>
					<semantics>
						<annotation-xml encoding="application/xhtml+xml">
							<input onchange="error_13_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="error_a" placeholder="0" />
						</annotation-xml>
					</semantics>
				</mi></h4></td>
			</tr>
		</table>
	</div>

	<div style="display:none" align="left" class=" col-lg-12 col-md-12  col-xs-12" id="cinco">
		<table>
			<tr>
				<td><h4><p align="justify"><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>239</mn></math> es el &nbsp;</h4></td>
				<td><h4>
					<semantics>
						<annotation-xml encoding="application/xhtml+xml">
							<input onchange="porcentaje_13_a ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="porcentaje_a" placeholder="0" />
						</annotation-xml>
					</semantics>
				</mi>% de <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>23</mn><mo>.</mo><mn>04</mn></math></h4></td>
			</tr>
		</table>
	</div>

	<div style="display:none" align="left" class=" col-lg-12 col-md-12  col-xs-12" id="seis">
		<table>
			<tr>
				<td><p align="justify">y calcula <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>239</mn></math> es el &nbsp;</td>
					<td><h4>
						<semantics>
							<annotation-xml encoding="application/xhtml+xml">
								<input onchange="error_13_b ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="error_b" placeholder="0" />
							</annotation-xml>
						</semantics>
					</mi></h4></td>
			</tr>
		</table>
	</div>

	<div style="display:none" align="left" class=" col-lg-12 col-md-12  col-xs-12" id="siete">
		<table>
			<tr>
				<td><h4><p align="justify"><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>0</mn><mo>.</mo><mn>241</mn></math> es el &nbsp;</h4></td>
				<td><h4>
					<semantics>
						<annotation-xml encoding="application/xhtml+xml">
							<input onchange="porcentaje_13_b ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="porcentaje_b" placeholder="0" />
						</annotation-xml>
					</semantics>
				</mi>% de <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>23</mn><mo>.</mo><mn>04</mn></math></h4></td>
			</tr>
		</table>
	</div>

	<div style="display:none" align="left" class=" col-lg-12 col-md-12  col-xs-12" id="ocho">
		<p align="justify">Con ambos extremos el error es menor que <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>%</mo></math>, sí es posible fabricar los cortes de tela con la maquinaria que tienes y satisfacer los requerimientos del cliente. </p>
	</div>
</div>
