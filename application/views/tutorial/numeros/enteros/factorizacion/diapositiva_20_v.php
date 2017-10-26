<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/diapositiva_10.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/styles_numeros.css">
<div class="panel-body">
	<div   class="col-md-6  col-xs-12" id="box" align="center">
		<p>Como 5 no es un factor de 18, seguimos con el siguiente entero:</p>
		<p>Después nos preguntamos:¿Es el 6 un factor de 18?.</p>
		<div class="btn-group-vertical" align="left">
		    <button type="button" class="btn btn-default">SI</button>
		    <button type="button" class="btn btn-default">NO</button>
  		</div>
	</div>	
	<div class="col-md-4  col-xs-6" id="tab">
		
		 <table class="table table-striped table-bordered table-condensed table-responsive" id="myTable">
            <thead>
                <tr class="success">
                    <th>FACTORES DE 18</th>
                    
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td width="20px">
            			<input type="text" id="base1" value="1" readonly=""/>
            		</td>
            		<td width="20px">
            			<input  type="text" id="altura1" value="5" readonly=""/>
            		</td>
            		<td width="20px">
            			<input type="text" id="area1" value="5" onkeyup="if (event.keyCode == 13) valida('base1','altura1','area1')" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td width="20px">
            			<input type="text" id="base2" />
            		</td>
            		<td width="20px"> 
            			<input type="text" id="altura2" />
            		</td>
            		<td width="20px">
            			<input type="text" idid="area2" />
            		</td>
            	</tr>
            	<tr>
            		<td width="20">
            			<input type="text" id="base2" />
            		</td>
            		<td width="20">
            			<input type="text" id="altura2" />
            		</td>
            		<td width="20">
            			<input type="text" idid="area2" />
            		</td>
            	</tr>
            </tbody>
        </table>
	</div>
	<br /><br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="VERIFICAR" />
</div>
