<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/diapositiva_10.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/styles_numeros.css">
<div class="panel-body">
	<div   class="col-md-12  col-xs-12" id="box" align="center">
		<p>Utiliza la tabla para encontrar todos los factores de 120 en orden.</p>
	</div>	
	<div   class="col-xs-12  col-xs-12" id="tab">
		
		 <table class="table table-striped table-bordered table-condensed table-responsive" id="myTable">
            <thead>
                <tr class="success">
                    <th>FACTORES DE 18</th>
                    
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td>
            			<input type="text" id="base1" value="1" readonly=""/>
            		</td>
            		<td>
            			<input  type="text" id="altura1" value="5" readonly=""/>
            		</td>
            		<td>
            			<input type="text" id="area1"  value="5" onkeyup="if (event.keyCode == 13) valida('base1','altura1','area1')" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<input type="text" id="base2" />
            		</td>
            		<td> 
            			<input type="text" id="altura2" />
            		</td>
            		<td>
            			<input type="text" idid="area2" />
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<input type="text" id="base2" />
            		</td>
            		<td>
            			<input type="text" id="altura2" />
            		</td>
            		<td>
            			<input type="text" idid="area2" />
            		</td>
            	</tr>
            </tbody>
        </table>
	</div>
	<br /><br /><br />
	<div>
		<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="VERIFICAR" />
	</div>
</div>
