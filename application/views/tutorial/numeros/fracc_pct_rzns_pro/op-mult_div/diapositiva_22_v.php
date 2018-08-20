 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/fracc_pct_rzns_pro/op-mult_div.js"></script>

<div class="container-fluid">
	<p align="justify"> Para resolver el problema, observemos que es posible dividir, los dos tercios que hay en la lata en dos partes iguales. Arrastra los rectangulos de color rojo y colócalos en las figuras de abajo. Después escribe la fracción correspondiente:</p>
	<div  class=" col-lg-12 col-md-12  col-xs-12">
		<div style="margin: 20px", "width: 100px", "float: justify", "height: 35px", "padding: 10px", "border: 1px black" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
			<table>
				<tr> 
					<td><img draggable="true" ondragstart="drag(event)" id="drag1" width="30px" height="31px" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/div_3.png"/></td>
					<td><img draggable="true" ondragstart="drag(event)" id="drag2" width="30px" height="31px" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/div_3.png"/></td>
			        <td><img draggable="true" ondragstart="drag(event)" id="drag3" width="30px" height="31px" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/div_3_vacio.png"/></td>
			    </tr>
			</table>
		</div>
		<div align="left" style="margin: 20px", "width: 100px", "float: justify", "height: 35px", "padding: 10px", "border: 1px black" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
			<table>
				<tr> 
					<td id="img1" ondrop="drop(event)" ondragover="allowDrop(event)"><img draggable="false" width="30px" height="31px" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/div_3_vacio.png"/></td>
					<td id="img2" ondrop="drop(event)" ondragover="allowDrop(event)"><img draggable="false"  width="30px" height="31px" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/div_3_vacio.png"/></td>
			        <td id="img3" ondrop="drop(event)" ondragover="allowDrop(event)"><img draggable="false"  width="30px" height="31px" class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/numeros/fracc_pct_rzns_pro/div_3_vacio.png"/></td>
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