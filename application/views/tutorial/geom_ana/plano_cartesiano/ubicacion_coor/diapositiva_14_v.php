<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/plano_cartesiano/ubicacion_coor/diapositiva_1.js"></script>
<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css"> -->
<div class="container-fluid">
	<div   class="col-md-6  col-xs-12" id="box" align="center">
		<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/geom_ana/plano_cartesiano/ubicacion_coor/diapositiva_9.png" align="center"/>
	</div>	
	<div class="col-md-6  col-xs-12 table-responsive" id="tab" align="center">
		<p>Di en qué cuadrante está el siguiente punto:</p>
		<p><b>F(-3,1)</b></p>
			<table>
			<td align="left">
			  <form>
			    <div class="checkbox">
			      <label><input type="checkbox" id="1">Primer cuadrante</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" id="2">Segundo cuadrante</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" id="3">Tercer cuadrante</label>
			    </div>
			    <div class="checkbox">
			      <label><input type="checkbox" id="4">Cuarto cuadrante</label>
			    </div>
			  </form>
		 	</td>
		</table>
	</div>
	<br /><br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar2();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
