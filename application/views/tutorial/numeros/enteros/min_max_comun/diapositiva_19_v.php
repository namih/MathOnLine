<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/factorizacion/diapositiva_8.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/tutorial/numeros/enteros/factorizacion/styles_numeros2.css">
<div class="container-fluid">
	<div>
		<p>Es posible identificar los múltiplos comunes de dos o más números, listando los múltiplos de cada uno. Por ejemplo, algunos de los múltiplos comunes de 4 y 6 aparecen de color en las siguientes tablas: </p>
		<p>Apóyate en las tablas</p>
	</div>
	<br />
	<label>Múltiplos de 4</label>
	<div   class="col-md-12  col-xs-12 table-responsive div-border0 input-top5" id="tab" align="center">
		<table class="table table-striped table-condensed" id="myTable" style="width:30%; margin:0 auto;">

            <thead>
                <tr class="">
                      <th class="col-xs-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th class="col-xs-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th class="col-xs-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th class="col-xs-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th class="col-xs-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            	  	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="1" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="X" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="4" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="=" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="4" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="2" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="X" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="4" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="=" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="8" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="3" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="X" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="4" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="=" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" style="background-color: green; color: white" value="12" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="4" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="X" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="4" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="=" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="16" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="5" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="X" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="4" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="=" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="20" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="6" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="X" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="4" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="=" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" style="background-color: green; color: white" id="base1" value="24" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="7" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="x" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="4" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="=" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="28" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="8" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="x" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="4" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="=" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="32" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="9" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="x" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="4" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="=" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" style="background-color: green; color: white" id="base1" value="36" readonly=""/>
            		</td>
            	</tr>
            </tbody>
        </table>
        <br />
        <label>Múltiplos de 6</label>
		 <table class="table table-striped table-condensed" id="myTable" style="width:30%; margin:0 auto;">
            <thead>
                <tr class="">
                      <th class="col-xs-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th class="col-xs-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th class="col-xs-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th class="col-xs-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th class="col-xs-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="1" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="X" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="6" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="=" readonly=""/>
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
            			<input class="input-sm2" type="text" id="altura1" value="X" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="6" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="=" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" style="background-color: green; color: white" value="12" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="3" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="X" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="6" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="=" readonly=""/>
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
            			<input class="input-sm2" type="text" id="altura1" value="X" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="6" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="=" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" style="background-color: green; color: white" id="base1" value="24" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="5" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="X" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="6" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="=" readonly=""/>
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
            			<input class="input-sm2" type="text" id="altura1" value="X" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" value="6" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="altura1" value="=" readonly=""/>
            		</td>
            		<td class="modif">
            			<input class="input-sm2" type="text" id="base1" style="background-color: green; color: white" value="36" readonly=""/>
            		</td>
            	</tr>
            </tbody>
        </table>
	</div>
	<br /><br />
	<p>El menor de éstos, en este caso el 12, se llama el mínimo común múltiplo MCM de 4 y 6. </p>
</div>
