<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/factorizacion/diapositiva_8.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<div>
		<p>En el problema anterior, tuvimos que encontrar el número mayor que divida exactamente a dos números dados. Este número se le llama <b>máximo común divisor (MCD)</b></p>
	 	<p>Encontremos ahora el maximo común divisor de 12 y 18. Completa las tablas con los factores de cada número.</p>
	</div>
	<br /> <br />
	<label>12</label>
	<div   class="col-md-12  col-xs-12 table-responsive" id="tab" align="center">
			 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:50%; margin:0 auto;">
            <thead>
                <tr class="success">
                    <th>Número 1</th>
                    <th>Número 2</th>
                    <th>Resultado</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="1" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="15" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area1"  readonly=""/>
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
            			<input class="input-sm2" type="text" id="area2" readonly/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base3" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura3" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="area3" readonly/>
            		</td>
            	</tr>
            </tbody>
        </table>
        <br /><br />
        <label>18</label>
		 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:50%; margin:0 auto;">
            <thead>
                <tr class="success">
                    <th>Número 1</th>
                    <th>Número 2</th>
                    <th>Resultado</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="1" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="15" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="area1"  readonly=""/>
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
            			<input class="input-sm2" type="text" id="area2" readonly/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base3" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura3" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="area3" readonly/>
            		</td>
            	</tr> 
            </tbody>
        </table>
	</div>
	
	<br /><br />
	<label>Escribe los factores comunes (en orden ascendente):</label> <input type="text" />
	<br />
	<label>Escribe el mayor de estos números, es decir, el máximo común divisor (MCD): </label><input type="text" />
	<br /><br /><br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div>
</div>
