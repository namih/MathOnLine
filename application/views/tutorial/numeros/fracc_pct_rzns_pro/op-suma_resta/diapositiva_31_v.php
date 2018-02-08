 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-suma_resta.js"></script>

<div class="container-fluid">
	
		<p align="justify">Al igual que en la suma, restar fracciones con el mismo denominador resulta fácil. Usa las flechas para escribir el resultado de la resta. Puedes arrastrar las figuras para comprobar tus respuestas</p>
		<div style="margin-bottom: 20px"  class=" col-lg-12 col-md-12  col-xs-12">
			<div style="margin-bottom: 20px" class="col-xs-12 col-sm-12 col-lg-12">
				<table>
				  <tr align="center">
				  	<td><img class="img-responsive" id="frac_a" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/tres_onceavos_v.png"/></td>
				    <td align="center"><h1 style="color: red">&nbsp;-&nbsp;</h1></td> 
				    <td><img class="img-responsive" id="frac_b" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/un_onceavo_v.png"/></td>
				    <td align="center"><h1 style="color: red">&nbsp;&nbsp;=&nbsp;&nbsp;</h1></td>
				    <td><img class="img-responsive" id="onceavos" width="40%" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/cero_onceavos_vnaranja.png"/></td>
				  </tr>
				</table>
			</div>
			<div class=" col-lg-12 col-md-12  col-xs-12">
				<table>
				  <tr align="center">
				    <td><h1 id="frac1"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>3</mn><mn>11</mn></mfrac></math></h1></td>
				    <td align="center"><h1 style="color: red">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				    <td><h1 id="frac2"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>1</mn><mn>11</mn></mfrac></math></h1></td>
				    <td align="center"><h1 style="color: red">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1></td>
				    <td><h1 style="color: orange" id="numerador"><math xmlns="http://www.w3.org/1998/Math/MathML"><mfrac><mn>0</mn><mn>3</mn></mfrac></math></h1>
				    	<div class="btn-group" id="opciones">
							<button onclick="decrementar_31 ()" type="button" class="btn btn-info"><</button>
							<button onclick="incrementar_31 ()" type="button" class="btn btn-info">></button>
						</div>		
				   </td> 
				    
				    	
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
