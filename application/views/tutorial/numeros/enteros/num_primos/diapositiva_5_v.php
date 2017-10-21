<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/diapositiva_10.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/styles_numeros.css">
<div class="panel-body">
	<div   class="col-md-12  col-xs-12" id="box" align="center">
		<p>Escribe los factores de cada número y determina si es un número primo</p>
	</div>	
	<div   class="col-xs-12  col-xs-12" id="tab">
		
		 <table class="table table-striped table-bordered table-condensed table-responsive" style="width:50%; margin:0 auto;" id="myTable">
            <thead>
                <tr class="success">
                    <th>Número</th>
                    <th>Factores</th>
                    <th>Número de factores</th>
                    <th>¿Es primo?</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td>
            			<input class="input-sm2" type="text" id="base1" value="1" readonly=""/>
            		</td>
            		<td>
            			<input class="input-sm2"  type="text" id="altura1" value="" />
            		</td>
            		<td>
            			<input class="input-sm2"  type="text" id="area1"  value="" onkeyup="if (event.keyCode == 13) valida('base1','altura1','area1')" />
            		</td>
            		<td>
            			<input class="input-sm2"  type="checkbox" id="base1" value=""/>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<input  class="input-sm2" type="text" id="base1" value="2" readonly=""/>
            		</td>
            		<td>
            			<input class="input-sm2" type="text" id="altura1" value="" />
            		</td>
            		<td>
            			<input class="input-sm2" type="text" id="area1"  value="" onkeyup="if (event.keyCode == 13) valida('base1','altura1','area1')" />
            		</td>
            		<td>
            			<input class="input-sm2" type="checkbox" id="base1" value=""/>
            		</td>
            	</tr>
            		<tr>
            		<td>
            			<input class="input-sm2" type="text" id="base1" value="3" readonly=""/>
            		</td>
            		<td>
            			<input class="input-sm2" type="text" id="altura1" value="" />
            		</td>
            		<td>
            			<input class="input-sm2" type="text" id="area1"  value="" onkeyup="if (event.keyCode == 13) valida('base1','altura1','area1')" />
            		</td>
            		<td>
            			<input class="input-sm2" type="checkbox" id="base1" value="" />
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<input class="input-sm2" type="text" id="base1" value="4" readonly=""/>
            		</td>
            		<td>
            			<input class="input-sm2" type="text" id="altura1" value="" />
            		</td>
            		<td>
            			<input class="input-sm2" type="text" id="area1"  value="" onkeyup="if (event.keyCode == 13) valida('base1','altura1','area1')" />
            		</td>
            		<td>
            			<input class="input-sm2" type="checkbox" id="base1" value="" />
            		</td>
            	</tr>
            		<tr>
            		<td>
            			<input class="input-sm2" type="text" id="base1" value="5" readonly=""/>
            		</td>
            		<td>
            			<input class="input-sm2" type="text" id="altura1" value="" />
            		</td>
            		<td>
            			<input class="input-sm2" type="text" id="area1"  value="" onkeyup="if (event.keyCode == 13) valida('base1','altura1','area1')" />
            		</td>
            		<td>
            			<input class="input-sm2" type="checkbox" id="base1" value="" />
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<input class="input-sm2" type="text" id="base1" value="6" readonly=""/>
            		</td>
            		<td>
            			<input class="input-sm2" type="text" id="altura1" value="" />
            		</td>
            		<td>
            			<input class="input-sm2" type="text" id="area1"  value="" onkeyup="if (event.keyCode == 13) valida('base1','altura1','area1')" />
            		</td>
            		<td>
            			<input class="input-sm2" type="checkbox" id="base1" value="" />
            		</td>
            	</tr>
            		<tr>
            		<td>
            			<input class="input-sm2" type="text" id="base1" value="7" readonly=""/>
            		</td>
            		<td>
            			<input class="input-sm2" type="text" id="altura1" value="" />
            		</td>
            		<td>
            			<input class="input-sm2" type="text" id="area1"  value="" onkeyup="if (event.keyCode == 13) valida('base1','altura1','area1')"/>
            		</td>
            		<td>
            			<input class="input-sm2" type="checkbox" id="base1" value="" />
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<input class="input-sm2" type="text" id="base1" value="8" readonly=""/>
            		</td>
            		<td>
            			<input class="input-sm2" type="text" id="altura1" value="" />
            		</td>
            		<td>
            			<input class="input-sm2" type="text" id="area1"  value="" onkeyup="if (event.keyCode == 13) valida('base1','altura1','area1')" />
            		</td>
            		<td>
            			<input class="input-sm2" type="checkbox" id="base1" value="" />
            		</td>
            	</tr>
            		<tr>
            		<td>
            			<input class="input-sm2" type="text" id="base1" value="9" readonly=""/>
            		</td>
            		<td>
            			<input class="input-sm2" type="text" id="altura1" value="" />
            		</td>
            		<td>
            			<input class="input-sm2" type="text" id="area1"  value="" onkeyup="if (event.keyCode == 13) valida('base1','altura1','area1')" />
            		</td>
            		<td>
            			<input class="input-sm2" type="checkbox" id="base1" value="" />
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<input class="input-sm2" type="text" id="base1" value="10" readonly=""/>
            		</td>
            		<td>
            			<input class="input-sm2" type="text" id="altura1" value="" />
            		</td>
            		<td>
            			<input class="input-sm2" type="text" id="area1"  value="" onkeyup="if (event.keyCode == 13) valida('base1','altura1','area1')"/>
            		</td>
            		<td>
            			<input class="input-sm2" type="checkbox" id="base1" value="" />
            		</td>
            	</tr>
            </tbody>
        </table>
	</div>
	<br /><br /><br />
	<div>
		<p>Los primeros cuatro números primos son:</p>
		<input type="text" id="1" value="" />
		<input type="text" id="2" value="" />
		<input type="text" id="3" value="" />
		<input type="text" id="4" value="" />
		<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="VERIFICAR" />
	</div>
</div>
