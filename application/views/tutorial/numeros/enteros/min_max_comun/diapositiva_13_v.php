<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/factorizacion/diapositiva_8.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<div>
		<p>Observa que, para resolver el problema anterior tuvimos que encontrar un número que fuera <b>divisor tanto de 256 como de 96</b>. Debe dividir a ambos números para que se obtengan cuadrados al dividir. </p>
	 	<p>Completa las tablas para encontrar los factores o divisores de 256 y de 96.</p>
	</div>
	<br /> <br />
	<label>256</label>
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
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base4" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura4" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="area4" readonly/>
            		</td>
            	</tr>
            </tbody>
        </table>
        <br /><br />
        <label>96</label>
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
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base4" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura4" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="area4" readonly/>
            		</td>
            	</tr>
            </tbody>
        </table>
	</div>
	
	<br /><br /><br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div>
</div>
