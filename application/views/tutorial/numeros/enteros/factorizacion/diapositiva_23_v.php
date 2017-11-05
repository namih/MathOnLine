<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/factorizacion/diapositiva_23.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<div   class="col-md-12  col-xs-12" id="box" align="center">
		<p>Utiliza la tabla para encontrar todos los factores de 120.</p>
	</div>	
	<div   class="col-xs-12  col-xs-12 table-responsive" id="tab">
		
		 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:50%; margin:0 auto;">
            <thead>
                <tr class="success">
                    <th>Num 1</th>
                    <th>Num 2</th>
                    <th>Resultado</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="1" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="120" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area1"  value="120" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base2" />
            		</td>
            		<td class="modif"> 
            			<input class="input-sm2" type="text" id="altura2" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area2" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base3" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura3" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area3" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base4" />
            		</td>
            		<td class="modif"> 
            			<input class="input-sm2" type="text" id="altura4" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area4" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base5" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura5" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area5" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base6" />
            		</td>
            		<td class="modif"> 
            			<input class="input-sm2" type="text" id="altura6" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area6" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base7" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura7" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area7" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base8" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura8" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area8" />
            		</td>
            	</tr>
            </tbody>
        </table>
	</div>
	<br /><br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
