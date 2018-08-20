 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-mult_div.js"></script>

<div class="container-fluid">
	
	<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
		<p align="justify">Francisco tiene una lata con agua a <math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac></math> de su capacidad y reparte el agua en dos latas de manera que en cada una quede la misma cantidad.¿Hasta donde se llenarán las latas?</p>
		<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
			<table>
				<tr align="center">
					<td><h1><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>2</mn><mn>3</mn></mfrac></math></h1></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
					<td><img width="80%" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/lata_dos_tercios.png"/></td>
				
				</tr>
			</table>
		</div>
		<p align="justify">Estima la cantidad antes de resolver el problema:</p>
		<form >
			<div id="r1" align="justify" class="checkbox"> 
				<label><input onclick="respuesta_21 ()" type="checkbox" value="1">Hasta menos de la mitad</label>
			</div>
			
			<div id="r2" align="justify" class="checkbox"> 
				<label><input onclick="respuesta_21 ()"  type="checkbox" value="2">Hasta la mitad</label>
			</div>
			
			<div id="r3" align="justify" class="checkbox"> 
				<label><input onclick="respuesta_21 ()"  type="checkbox" value="3">Hasta más de la mitad</label>
			</div>
		</form>	
		
	
	</div>
</div>
<div id="correcta" style="display: none" class="alert alert-success">
	<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
	<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> 
</div>