<script src="<?php echo base_url(); ?>statics/js/tutorial/numeros/enteros/diapositiva_6.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>statics/css/styles_numeros.css">
<div class="container-fluid">
	<div>
		<p> Encuentra 6 diferentes rectángulos con un área de 8 unidades cuadradas. Completa la tabla con las medidas.</p>
	 	<p>Coloca el número correspondiente en la base y la altura para obtener el área igual a 8.</p>
	</div>
	Base : <input type="text" id="columncount" />
	Altura : <input type="text" id="rowcount" />
	<input type="button"  class="btn btn-success btn-sm" onclick="createTable();" value="Create Table" />
	<br/><br/><br />
	<div   class="col-md-6  col-xs-12" id="box" align="center">
	</div>	
	<div   class="col-md-6  col-xs-12" id="tab" align="center">
		
		 <table class="table table-striped table-bordered table-condensed table-responsive" id="myTable" style="width:20%; margin:0 auto;">
            <thead>
                <tr class="success">
                    <th>BASE</th>
                    <th>ALTURA</th>
                    <th>AREA</th>
                </tr>
            </thead>
            <tbody>
            	<tr>
            		<td>
            			<input class"input-sm2" type="text" id="base1" value="1" readonly=""/>
            		</td>
            		<td>
            			<input class"input-sm2" type="text" id="altura1" value="8" readonly=""/>
            		</td>
            		<td>
            			<input class"input-sm2" type="text" id="area1" value="8" onkeyup="if (event.keyCode == 13) valida('base1','altura1','area1')" readonly=""/>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<input class"input-sm2" type="text" id="base2" />
            		</td>
            		<td>
            			<input class"input-sm2" type="text" id="altura2" />
            		</td>
            		<td>
            			<input class"input-sm2" type="text" idid="area2" />
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<input class"input-sm2" type="text"  id="base3"/>
            		</td>
            		<td>
            			<input class"input-sm2" type="text" id="altura3" />
            		</td>
            		<td>
            			<input class"input-sm2" type="text"  id="area3"/>
            		</td>
            	</tr>
            	<tr>
            		<td>
            			<input class"input-sm2" type="text"  id="base4"/>
            		</td>
            		<td>
            			<input class"input-sm2" type="text" id="altura4" />
            		</td>
            		<td>
            			<input class"input-sm2" type="text"  id="area4"/>
            		</td>
            	</tr>
            </tbody>
        </table>
	</div>
	<br /><br /><br />
	<input type="button" class="btn btn-success btn-sm" onclick="verificar();" value="VERIFICAR" />
</div>
