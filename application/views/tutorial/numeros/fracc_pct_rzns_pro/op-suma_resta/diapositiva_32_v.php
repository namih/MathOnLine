 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-suma_resta.js"></script>

<div class="container-fluid">
	
	<p align="justify">Escribe el resultado de la resta. Da clic en intro para ver la representación gráfica. Puedes arrastrar las figuras para comprobar tu respuesta.</p>
	<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
		<div id="figuras" style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12" style="display: none">
			<table id="pictures" style="display: none">
				 <tr align="center">
				  	<td><img class="img-responsive" id="frac_a" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/tres_tercios_v.png"/></td>
				    <td align="center"><h1 style="color: red">&nbsp;-&nbsp;</h1></td> 
				    <td><img class="img-responsive" id="frac_b" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/un_tercio_v.png"/></td>
				    <td align="center"><h1 style="color: red">&nbsp;&nbsp;=&nbsp;&nbsp;</h1></td>
				    <td><img class="img-responsive" id="onceavos" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/dos_tercios_v.png"/></td>
				 </tr>
			</table>
		</div>
		<div style="margin-bottom: 20px" class=" col-lg-12 col-md-12  col-xs-12">
			<table>
				 <tr align="center">
				    <td><h1 id="frac1"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>3</mn></mfrac></math></h1></td>
				    <td align="center"><h1 style="color: red">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				    <td><h1 id="frac2"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>3</mn></mfrac></math></h1></td>
				    <td align="center"><h1 style="color: red">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				    <td><h1 ><math xmlns="http://www.w3.org/1998/Math/MathML">
							<mfrac>
							<mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input onchange="correcto_32()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi>
							<mi>
								<semantics>
									<annotation-xml encoding="application/xhtml+xml">
										<input onchange="correcto_32()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador" placeholder="0" />
									</annotation-xml>
								</semantics>
							</mi>
						</mfrac>
					</math></h1>
				    </td>	
				</tr>
			</table>
		</div>
	</div>
	<div style="margin-bottom: 20px" class=" col-lg-12 col-md-12  col-xs-12">
		<button id="intro" type="button" onclick="mostrar_32 ()" class="btn btn-primary" disabled >Intro</button>
	</div>
</div>

<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> 

</div>
