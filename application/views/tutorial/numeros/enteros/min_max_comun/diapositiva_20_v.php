<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_15.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">

	<div   class="col-md-6  col-xs-12 table-responsive" id="box" align="center">
		<p>La tabla muestra los múltiplos de 10 y 6 </p>
		<p>Encuentra el mínimo común múltiplo de estos dos números</p>
		<input type="text" size="7" id="minimo"  />
	</div>	
	<div class="col-md-6  col-xs-12 table-responsive" id="tab" align="center">
		 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:50%; margin:0 auto;">
		 	<thead>
                <tr class="success">
                    <th> X </th>
                    <th><b> 10 </b></th>
                    <th><b> 6 </b></th>
                </tr>
            </thead>
            <tbody>
            	  	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="1" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="10" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="6" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="2" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="20" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="12" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="3" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="30" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="18" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="4" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="40" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="24" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="5" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="50" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="30" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="6" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="60" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="36" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="7" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="70" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="42" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="8" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="80" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="48" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="9" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="90" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="54" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="10" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="100" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="60" readonly=""/>
            		</td>
            	</tr>
            </tbody>
        </table>
	</div>
	<input type="button" class="btn btn-success btn-sm" onclick="verificar20();" value="Verificar" />
	<br /><br /><br />
	
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
