<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/equivalencia.js"></script>

<div class="container-fluid">
	<h4 align="justify">Regresemos al problema:</h4>
	<h4 align="justify">Según las indicaciones, en un experimento deben mezclarse <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>5</mn></mfrac></math> litros de agua con <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac></math> litros de alcohol. Juan a mezclado <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>10</mn></mfrac></math> litros de agua y <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>9</mn></mfrac></math> litros de alcohol.</h4>
	<h4 align="justify">Como <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>6</mn><mn>10</mn></mfrac></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>5</mn></mfrac></math> son fracciones equivalentes tenemos que <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mstyle displaystyle="true"><mn>6</mn></mstyle><mstyle displaystyle="true"><mn>10</mn></mstyle></mfrac><mo>&#xA0;</mo><mo>=</mo><mo>&#xA0;</mo><mfrac><mstyle displaystyle="true"><mn>3</mn></mstyle><mstyle displaystyle="true"><mn>5</mn></mstyle></mfrac></math></h4>
	<h4 align="justify">Como <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>4</mn><mn>9</mn></mfrac></math> y <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac></math> no son fracciones equivalentes tenemos que <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mstyle displaystyle="true"><mn>4</mn></mstyle><mstyle displaystyle="true"><mn>9</mn></mstyle></mfrac><mo>&#xA0;</mo><mo>&#x2260;</mo><mo>&#xA0;</mo><mfrac><mstyle displaystyle="true"><mn>2</mn></mstyle><mstyle displaystyle="true"><mn>3</mn></mstyle></mfrac></math></h4>
	<div>
		<h4 align="justify">¿Ha realizado Juan correctamente la mezcla?</h4>
		<div class="radio">
			<label><input onclick="error()" type="radio" name="optradio">Si</label>
		</div>
		<div class="radio">
			<label><input onclick="correcto()" type="radio" name="optradio">No</label>
		</div>
	</div>
	<br />
	<br />		
	 <div id="correcta" style="display: none" class="alert alert-success">
	 	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> Cuanto más entreno, más suerte tengo.
	 </div>
	 <div id="error" style="display: none" class="alert alert-warning">
	 	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> No te des por vencido, ni aun vencido.
	 </div>
</div>
