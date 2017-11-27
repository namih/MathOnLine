<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-suma_resta.js"></script>

<div class="container-fluid">

	<p align="justify">
		Encuentra el resultado de la suma.
	</p>

	<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">

		<div class=" col-lg-4 col-md-4  col-xs-12">
			<div class=" col-lg-12 col-md-12  col-xs-12">
				<img class="img-responsive" width="50%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/siete_octavos.png"/>
			</div>
			<div class=" col-lg-12 col-md-12  col-xs-12">
				<h1 style="color: blue">&nbsp;&nbsp;<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>7</mn><mn>8</mn></mfrac></math>&nbsp;&nbsp;&nbsp;&nbsp;+</h1>
			</div>
		</div>
		<div class=" col-lg-4 col-md-4  col-xs-12">
			<div class=" col-lg-12 col-md-12  col-xs-12">
				<img class="img-responsive" width="50%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/un_octavo.png"/>
			</div>
			<div class=" col-lg-12 col-md-12  col-xs-12">
				<h1 style="color: green">&nbsp;&nbsp;
				<math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>8</mn></mfrac></math>&nbsp;&nbsp;&nbsp;&nbsp;=</h1>
			</div>
		</div>
		<div  class=" col-lg-4 col-md-4  col-xs-12">
			<div class=" col-lg-12 col-md-12  col-xs-12">
				<img class="img-responsive" width="50%" id="vacio" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/ocho_octavos.png"/>
			</div>
			<div class=" col-lg-12 col-md-12  col-xs-12">
				<h1>
				<math xmlns="http://www.w3.org/1998/Math/MathML">
					<mfrac>
						<mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="fraccion_4 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="numerador" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi>
						<mi>
							<semantics>
								<annotation-xml encoding="application/xhtml+xml">
									<input onchange="fraccion_4 ()" xmlns="http://www.w3.org/1999/xhtml" style="text-align:center" type="text" size="3" id="denominador" placeholder="0" />
								</annotation-xml>
							</semantics>
						</mi>
					</mfrac>
				</math></h1>
			</div>
		</div>
	</div>
</div>
<br />
<br />		
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> 
</div>