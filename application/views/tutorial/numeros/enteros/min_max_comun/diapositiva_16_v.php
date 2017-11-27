<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/factorizacion/diapositiva_8.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<div>
		<p>Hagamos otros ejercicio: encontrar el MCD de 30 y 54. Encuentra los factores primos de 30 y 54 completando las tablas.</p>
	</div>
	<br /> <br />
	<label>30</label>
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
            </tbody>
        </table>
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
            </tbody>
        </table>
	</div>
	
	<br /><br />
	<p>Escribe los factores primos comunes de 30 y 54</p>
	<input type="text" />
	<input type="text" />
	<br /><br /><br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div>
</div>
