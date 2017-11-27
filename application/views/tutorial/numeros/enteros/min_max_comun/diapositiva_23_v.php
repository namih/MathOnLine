<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/factorizacion/diapositiva_8.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<div>
		<p>Podemos utilizar el método de <b>factorización en primos </b> para encontrar el MCM de dos o más números más fácilmente.Encuentra los <b>factores primos</b> de cada número y expresa a cada uno como el producto de primos utilizando la notación exponencial. </p>
	</div>
	<br /> <br />
	<label>24</label>
	<div   class="col-md-12  col-xs-12 table-responsive" id="tab" align="center">
			 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:30%; margin:0 auto;">
            <thead>
                <tr class="success">
                    <th>   </th>
                    <th>   *   </th>

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
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base2" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura2" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base3" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura3" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base4" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura4" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base5" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura5" />
            		</td>
            	</tr>
            </tbody>
        </table>
        	<!-- Notacion exponencial -->
        <br /><br />
        <label>54</label>
		 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:30%; margin:0 auto;">
            <thead>
                <tr class="success">
                    <th>   </th>
                    <th>   *    </th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="bas1" value="1" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="alt1" value="15" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="bas2" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="alt2" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="bas3" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="alt3" />
            		</td>
            	</tr> 
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="bas4" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="alt4" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="bas5" />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="alt5" />
            		</td>
            	</tr> 
            </tbody>
        </table>
	</div>
	<!-- Notacion exponencial -->
	<br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div>
</div>
