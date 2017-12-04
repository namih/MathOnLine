<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_21.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">

	<div   class="col-md-6  col-xs-12 table-responsive" id="box" align="center">
		<p>Completa la tabla de múltiplos de 12 y 15 hasta encontrar su mínimo común múltiplo.</p>
	</div>	
	<div class="col-md-6  col-xs-12 table-responsive" id="tab" align="center">
		 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:50%; margin:0 auto;">
		 	<thead>
                <tr class="success">
                    <th> X </th>
                    <th><b> 12 </b></th>
                    <th><b> 15 </b></th>
                </tr>
            </thead>
            <tbody>
            	  	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="1" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area1" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="2" readonly=""/>
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
            			<input class="input-sm2" type="text" id="base1" value="3" readonly=""/>
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
            			<input class="input-sm2" type="text" id="base1" value="4" readonly=""/>
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
            			<input class="input-sm2" type="text" id="base1" value="5" readonly=""/>
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
            			<input class="input-sm2" type="text" id="base1" value="6" readonly=""/>
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
            			<input class="input-sm2" type="text" id="base1" value="7" readonly=""/>
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
            			<input class="input-sm2" type="text" id="base1" value="8" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura8" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area8" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="9" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura9" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area9" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="10" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura10" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area10" />
            		</td>
            	</tr>
            </tbody>
        </table>
	</div>
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="Verificar" />
	<br /><br /><br />
	
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
