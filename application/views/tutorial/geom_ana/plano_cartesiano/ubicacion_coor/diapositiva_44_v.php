<script src="<?php echo base_url(); ?>statics/js/tutorial/geom_ana/plano_cartesiano/ubicacion_coor/diapositiva_2.js"></script>
<div class="container-fluid">
	<div   class="col-md-6  col-xs-12" id="box" align="center">
		<p>Cúales son las coordenadas de los puntos que aparecen en el plano cartesiano que se muestra.</p>
		<img class="img-responsive" src="<?php echo base_url(); ?>statics/img/tutorial/geom_ana/plano_cartesiano/ubicacion_coor/diapositiva_44.png" align="center"/>
	</div>	
	<div class="col-md-6  col-xs-12 table-responsive" id="tab" align="center">
			<table>
			<td align="left">
			  <form>
			    <div class="table-responsive">
			      <label>A (</label><input type="text" id="1" size="5">,</label><input type="text" id="2" size="5"></label>  )</label>
			    </div>
			    <div class="table-responsive">
			    	<label>B (</label><input type="text" id="3" size="5">,</label><input type="text" id="4" size="5"></label>  )</label>
			    </div>
			    <div class="table-responsive">
			      <label>C (</label><input type="text" id="5" size="5">,</label><input type="text" id="6" size="5"></label>  )</label>
			    </div>
			    <div class="table-responsive">
			      <label>D (</label><input type="text" id="7" size="5">,</label><input type="text" id="8" size="5"></label>  )</label>
			    </div>
			  </form>
		 	</td>
		</table>
		<br />
	</div>
	<br /><br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar44();" value="Verificar" />
</div>
<div id="correcta" style="display: none" class="alert alert-success">
 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
</div>
<div id="error" style="display: none" class="alert alert-warning">
 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
</div> 