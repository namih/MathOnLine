<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-mult_div.js"></script>

<div class="container-fluid">
	
	<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<p align="justify"> Tengo <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>24</mn></math> centímetros de tela y quiero cortarla en tiras de <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math> centímetro de ancho. ¿Cuantas tiras voy a obtener?. Utiliza las flechas para dividir la tela en muchos trozos del mismo tamaño.</p>
			<img id="telar" width="60%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/telar_1_100.png"/>
			<br />
			<h4 id="tira">Número de tiras: <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>1</mn></math></h4>
			<div class="btn-group">
				<button onclick="decrementar_40 ()" type="button" class="btn btn-info">-</button>
				<button onclick="incrementar_40 ()" type="button" class="btn btn-info">+</button>
			</div>
		</div>
		<div align="left" class=" col-lg-12 col-md-12  col-xs-12">
			<br />
			<p align="left">Utiliza las flechas para dividir la tela en muchos trozos del mismo tamaño.</p>
			<li >¿Cuantas  tiras se obtienen en <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>24</mn></math> centímetros?<annotation-xml encoding="application/xhtml+xml">
					<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numero_a" placeholder="0" />
			</annotation-xml></semantics></mi></math></li>
			<li>¿Cuantas tiras hay en un centímetro?<annotation-xml encoding="application/xhtml+xml">
					<input xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numero_b" placeholder="0" />
			</annotation-xml></semantics></mi></math></li>	
				
		</div>
		<div class=" col-lg-12 col-md-12  col-xs-12">
			<p align="left">Observa que para conocer el resultado es necesario saber cuántas veces cabe <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math> en <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>24</mn></math>. Esto equivale a dividir <math xmlns="http://www.w3.org/1998/Math/MathML"><mn>24</mn></math> entre <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math>.</p>
			<table>
				<tr>
					<td><h1><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>24</mn></math></h1></td>
					<td><h3 style="color: red">&nbsp;&nbsp;<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>&#xF7;</mo></math>&nbsp;&nbsp;</h3></td>
					<td><h1><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>2</mn></mfrac></math></h1></td>
					<td><h3 style="color: red">&nbsp;&nbsp;<math xmlns="http://www.w3.org/1998/Math/MathML"><mo>=</mo></math>&nbsp;&nbsp;</h3></td>
					<td><h3><annotation-xml encoding="application/xhtml+xml">
					        <input onchange="numerador_40 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numero_c" placeholder="0" />
                        </annotation-xml></semantics></mi></math></h3></td>  
				</tr>
			</table>	
		</div>
	</div>
</div>

<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> 
</div>