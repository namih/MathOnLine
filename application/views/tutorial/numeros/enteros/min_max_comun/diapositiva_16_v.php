 <script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/min_max_comun/diapositiva_15.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<div>
		<p>Hagamos otros ejercicio: encontrar el MCD de 30 y 54. Encuentra los factores primos de 30 y 54 completando las tablas.</p>
	</div>
	<br /> <br />
	<label>30</label>
	<div   class="col-md-12  col-xs-12 table-responsive div-border0" id="tab" align="center">
			 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:30%; margin:0 auto;">
             <thead>
                <tr class="success">
                    <th>Número</th>
                    <th><b>Factor</b></th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="30" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="" onblur="valida_factor(1,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base2" value="" readonly/>
            		</td>
            		<td class="modif"> 
            			<input class="input-sm2" type="text" id="altura2"  onblur="valida_factor(2,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base3" value="" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura3"  onblur="valida_factor(3,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base4" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura4" readonly/>
            		</td>
            	</tr>
            </tbody>
        </table>
        <br /><br />
        <label>54</label>
		 <table class="table table-striped table-bordered table-condensed" id="myTable" style="width:30%; margin:0 auto;">
             <thead>
                <tr class="success">
                    <th>Número</th>
                    <th><b>Factor</b></th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="bas1" value="54" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1"  onblur="valida_factor1(1,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="bas2" value="" readonly/>
            		</td>
            		<td class="modif"> 
            			<input class="input-sm2" type="text" id="altura2" value="" onblur="valida_factor1(2,this)" />
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="bas3" value="" readonly />
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura3"  onblur="valida_factor1(3,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="bas4" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura4" onblur="valida_factor1(4,this)"/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="bas5" readonly/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura5" readonly/>
            		</td>
            	</tr>
            </tbody>
        </table>
	</div>
	
	<br /><br />
	<p>Escribe los factores primos comunes de 30 y 54</p>
	<input class="input-sm input-top5" type="text" id="num1" />
	<input class="input-sm input-top5" type="text" id="num2"/>
	<p>El MCD de 30 y 54 se obtiene multiplicando los factores primos comunes que acabas de encontrar:</p>
	<label><math xmlns="http://www.w3.org/1998/Math/MathML"><mn>2</mn><mo>&#xD7;</mo><mn>3</mn><mo>=</mo></math></label><input class="input-sm input-top5" id="mcd" size="5" />
	<br /><br /><br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="Verificar" />
	<div id="correcta" style="display: none" class="alert alert-success">
	 		<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> 
	</div>
	<div id="error" style="display: none" class="alert alert-warning">
	 		<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
	</div>
</div>
