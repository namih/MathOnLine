<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_15.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<p>Encuentra las raíces que se solicitan, identificando los factores primos del entero</p>
	<div class="table-responsive">
		<math xmlns="http://www.w3.org/1998/Math/MathML">
			<msqrt><mn>64</mn></msqrt>
		</math> <label> = </label> <input type="text" id="1" />
	</div>
	<br /><br />
	 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:20%; margin:0 auto;">
            <thead>
                <tr class="success">
                    <th>Número</th>
                    <th>Factor</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="64" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" onblur="valida_factor(1,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base2" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura2" onblur="valida_factor(2,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base3" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura3" onblur="valida_factor(3,this)" />
            		</td>
            	</tr> 
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base4" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura4" onblur="valida_factor(4,this)"/>
            		</td>
            	</tr> 
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base5" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura5" onblur="valida_factor(5,this)" />
            		</td>
            	</tr> 
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base6" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura6" onblur="valida_factor(6,this)"/>
            		</td>
            	</tr> 
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text"  id="base7" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura7" readonly onblur="valida_factor(7,this)"/>
            		</td>
            	</tr> 
            </tbody>
        </table>
        <br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar36();" value="Verificar" />
	<br />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div> 
</div>
